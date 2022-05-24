<?php

class UserModel extends DB {
    public function Login($username, $password)
    //  Trả về 0: không tìm thấy user, 1: User là khách, 2: user là admin
    {
        $query = " SELECT username, password, role FROM user where username = '$username'";
        $result = $this -> con -> query($query);
        $item = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($item['password']==$password)
        {
            return $item['role'];
        }
        return 0;
    }
    public function Signup($username, $password, $name, $address, $phonenumber)
    {
        $query = " SELECT * FROM user WHERE username = '$username'";
            
        $result = $this -> con -> query($query);

        if( mysqli_num_rows($result)>0)
        {
            return "Lỗi trùng tên người dùng (User name)";
        }
        else
        {
            $signupquery = "INSERT INTO `user` (`username`, `password`, `name`, `address`, `phone_number`,`role`) VALUES ('$username', '$password', '$name', '$address', '$phonenumber','2')";
            if ( $this -> con -> query($signupquery)===TRUE)
            {
                return "Đăng kí thành công";
            }
            else
            {
                return "Lỗi đăng kí tài khoản!";
            }
        } 
    }
    public function GetUser($username)
    {
        $query = " SELECT username, name, address, phone_number, date_created FROM user WHERE username = '$username'";
        $result = $this -> con -> query($query); 
        $item = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $item;
    }

}