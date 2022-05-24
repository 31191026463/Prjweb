<?php
require_once "./mvc/helper/functions.php";
class QuanLiModel extends DB {

    public function checkURL($url, $table)
    {
         // Hàm kiểm tra đã có trong database hay chưa?
        $query = "SELECT url FROM $table where '$url'= url" ;

        $resultArray =[];
            
        $result = $this -> con -> query($query);
            
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
        {
            $resultArray[] = $item;
        }
        if (count($resultArray)>0)
        {
            return 0 ;
        }
        else
        {
            return 1;
        }
    }

    public function ThemCategory($Name, $ImageLink)
    {
        $url = convert_name($Name);
        $check = $this -> checkURL($url,'category');

        //-----------------------------------------------------/
        if ($check==0)
        {
            return 'Không thể thêm vì tên danh mục đã tồn tại. Vui lòng chọn tên khác!';
        }
        else
        {
            $sql = "INSERT INTO category (url, name, image) VALUES ('$url','$Name', '$ImageLink')";

            if ($this->con->query($sql) === TRUE)
            {
                return "Thêm danh mục thành công !!!";
            }
            else
            {
                return "Lỗi hệ thống, không kết nối được với Database :<";
            }
        }
    }
    public function SuaCategory($CurrentUrl , $Name, $ImageLink)
    {
        // Thêm danh mục có tên mới vào database
        $url = convert_name($Name);
        $notice= $this-> ThemCategory($Name,$ImageLink);
        if ($notice== "Thêm danh mục thành công !!!" )
        {
            //Thay đổi các khóa ngoại
            $query = "SELECT * FROM category_details where category_url='$CurrentUrl'";
            $result = $this -> con -> query($query); 
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {    

                $updatequery = "UPDATE `category_details` SET `category_url`= '$url' WHERE `category_url`= '$CurrentUrl' AND `product_url` = '".$row['product_url']."'";
                
                $deletequery = "DELETE FROM category_details WHERE `category_url`= '$CurrentUrl' AND `product_url` = '".$row['product_url']."'";
                $this -> con -> query($updatequery);
                $this -> con -> query($deletequery);
            }
            //Xóa danh mục cũ
            $this -> XoaCategory($CurrentUrl);
            return "Cập nhật danh mục hoàn tất";
        }
        elseif($notice=='Không thể thêm vì tên danh mục đã tồn tại. Vui lòng chọn tên khác!')
        {
            $query ="UPDATE category SET image = '$ImageLink' WHERE url= '$CurrentUrl'";
            $this -> con -> query($query);
            return "Cập nhật danh mục hoàn tất";
        }
        else 
        {
            return $notice;
        }
    }
    public function XoaCategory($CurrentUrl)
    {
        //Check còn khóa ngoại hay không
        $query = "SELECT * FROM category_details where '$CurrentUrl'= category_url " ;

        $resultArray =[];
            
        $result = $this -> con -> query($query);
            
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
        {
            $resultArray[] = $item;
        }
        if (count($resultArray)>0)
        {
            return "Còn sản phẩm thuộc danh mục này, không thể xóa.";
        }
        else
        {
            $query = "DELETE FROM category WHERE url='$CurrentUrl'" ;
            
            if ($this->con->query($query ) === TRUE)
            {
                return "Xóa danh mục thành công !!";
            }
            else
            {
                return "Lỗi hệ thống, không kết nối được với Database :<";
            }
        }
    }
    #Thêm sản phẩm 
    public function ThemSP($Name, $Price, $Images, $Description, $Tag, $View_count, $Categorys)
    {
        //Chuyển tên sản phẩm thành url
        $url = convert_name($Name);
        // Kiểm tra sản phẩm đã có trong database hay chưa ?
        $check= $this-> checkURL($url,'product');

        // Nếu đã tồn tại thì báo lỗi ngược lại thì thêm vào database.
        if ($check ==0)
        {
            return "Sản phẩm đã tồn tại, vui lòng thêm sản phẩm khác";
        }
        else
        {
            //Thêm sản phẩm vào database.
            $sql = "INSERT INTO product (url, name, price, images, description, tag, view_count) 
                    VALUES ('$url','$Name', '$Price', '$Images','$Description','$Tag','$View_count')";

            if ($this->con->query($sql) === TRUE)
            {
                $notice= "Thêm sản phẩm thành công !!!";
            }
            else
            {
                $notice= "Lỗi hệ thống, không kết nối được với Database :<";
            }
            // Thêm các khóa ngoại vào bảng product_details
            for ($i=0;$i<count($Categorys);$i++)
            {
                $query= "INSERT INTO category_details (category_url, product_url)
                        VALUES ('".$Categorys[$i]."','$url')";
                $this->con->query($query);
            }
            return $notice;
        }

    }
    //Sửa sản phẩm.
    public function SuaSP($CurrentUrl, $Name, $Price, $Images, $Description, $Tag, $View_count, $Categorys)
    {
        $url = convert_name($Name);
        // Thêm sản phẩm có tên mới vào database (Đã bao gồm kiểm tra tồn tại của sản phẩm).
        $notice = $this ->ThemSP($Name, $Price, $Images, $Description, $Tag, $View_count, $Categorys);
        //Nếu thêm ok thì thay các khóa ngoại
        if ($notice == "Thêm sản phẩm thành công !!!")
        {
            $arr=[];
            $query = "SELECT * FROM category_details where product_url='$CurrentUrl'";
            $result = $this -> con -> query($query);
            //Lặp, Chỉnh sửa trên toàn bộ kết quả tìm kiếm được 
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
            {    
                //Xóa khóa ngoại cũ
                $deletequery = "DELETE FROM category_details WHERE `category_url`= '".$row['category_url']."' AND `product_url` = '$CurrentUrl'";

                $this -> con -> query($deletequery);

            }
            $this ->XoaSP($CurrentUrl);    
            return "Cập nhật sản phẩm hoàn tất";
        }
        elseif ($notice== "Sản phẩm đã tồn tại, vui lòng thêm sản phẩm khác")
        {
            $query = "UPDATE product SET price='$Price', images='$Images', description= '$Description', tag='$Tag', view_count='$View_count' WHERE  url = '$CurrentUrl'";
            if ($this -> con -> query($query)=== True)
            {
                $arr=[];
                $query = "SELECT * FROM category_details where product_url='$CurrentUrl'";
                $result = $this -> con -> query($query);
                //Lặp, Chỉnh sửa trên toàn bộ kết quả tìm kiếm được 
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
                {    
                    //Xóa khóa ngoại cũ
                    $deletequery = "DELETE FROM category_details WHERE `category_url`= '".$row['category_url']."' AND `product_url` = '$CurrentUrl'";
    
                    $this -> con -> query($deletequery);
    
                }
                for ($i=0; $i<count($Categorys);$i++)
                {
                    $query= "INSERT INTO category_details (category_url, product_url)
                    VALUES ('".$Categorys[$i]."','$CurrentUrl')";
                    $this -> con -> query($query);
                }
                return "Cập nhật sản phẩm hoàn tất";
            }
            else
            {
                return "Lỗi hệ thống, không kết nối được với Database :<";
            }

        }
        else
        {
            return $notice;
        }
    }
    public function XoaSP($CurrentUrl)
    {
        //Check còn khóa ngoại hay không
        $query = "SELECT * FROM category_details where '$CurrentUrl'= product_url " ;

        $resultArray =[];
            
        $result = $this -> con -> query($query);
            
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
        {
            $deletequery = "DELETE FROM category_details WHERE product_url='$CurrentUrl'";
            $this->con->query($deletequery);
        }

        //Nếu còn danh mục chứa sản phẩm hiện tại thì xóa hết khóa ngoại.

        $query = "DELETE FROM product WHERE url='$CurrentUrl'" ;
            
        if ($this->con->query($query ) === TRUE)
        {
            return "Xóa sản phẩm thành công !!";
        }
        else
        {
            return "Lỗi hệ thống, không kết nối được với Database :<";
        }
    }
    public function ThemOrder($Name,$Phone_number,$Address, $Order_detail)
    {
        $Order_str=$Order_detail[0];
        for ($i =1; $i<count($Order_detail);$i++)
        {
            $Order_str .= ", ";
            $Order_str .= $Order_detail[$i];
        }
        $query= "INSERT INTO order_infor (name, phone_number, address, order_detail)
                        VALUES ('$Name','$Phone_number','$Address','$Order_str')";
                if ($this->con->query($query ) === TRUE)
                {
                    return "Cảm ơn quý khách đã đặt hàng. Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất";
                }
                else
                {
                    return "Lỗi hệ thống, vui lòng thử lại sau.";
                }
    }
    public function QuanLiOrder()
    {
        $query = "SELECT * FROM order_infor  ORDER BY date_created DESC";

        $resultArray =[];
            
        $result = $this -> con -> query($query);
            
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
        {
            $resultArray[]=$item;
        }
        
        return $resultArray;
    }
    public function XoaOrder($id)
    {
        $query = "DELETE FROM order_infor WHERE id='$id'" ;
            
        if ($this->con->query($query ) === TRUE)
        {
            return "Xóa đơn hàng thành công !!";
        }
        else
        {
            return "Lỗi hệ thống, không kết nối được với Database :<";
        }
    }

    public function GetNewIdImage() {
        $query = "SELECT max(id) from images_store";
        $result = $this->con->query($query);
        return  mysqli_fetch_array($result, MYSQLI_ASSOC)['max(id)'] +1;
    }

    public function ThemImage($ImageLink)
    {
        $query= "INSERT INTO images_store (link)
        VALUES ('$ImageLink')";
        if ($this->con->query($query ) === TRUE)
        {
            return "Thêm ảnh thành công";
        }
        else
        {       
            return "Lỗi hệ thống, không kết nối được với Database :<";
        }
    }
    public function GetImages()
    {
        $query= "SELECT * FROM images_store ORDER BY date_created DESC";
        $resultArray =[];
            
        $result = $this -> con -> query($query);
            
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
        {
            $resultArray[]=$item;
        }
        
        return $resultArray;
    }
    public function XoaImage($id)
    {
        $query = "DELETE FROM images_store WHERE id='$id'" ;
            
        if ($this->con->query($query ) === TRUE)
        {
            return "Xóa ảnh thành công !!";
        }
        else
        {
            return "Lỗi hệ thống, không kết nối được với Database ";
        } 
    }


}