<?php
require_once './mvc/helper/authorization.php';
class Signup extends Controller{

    function Default(){
        if (isLoggedIn()) {
            header("Location: ".BASE_URL);
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['username']) 
            && isset($_POST['password'])
            && isset($_POST['fullname'])
            && isset($_POST['phone'])
            && isset($_POST['address'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $fullname = $_POST['fullname'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];

                $userModel = $this->model('UserModel');
                $message = $userModel->Signup($username, $password, $fullname, $address, $phone);

                if ($message == "Đăng kí thành công")
                echo 
                "<script>
                    alert('".$message."');
                    window.location.href='".BASE_URL."';
                </script>"; 
                else
                echo 
                "<script>
                    alert('".$message."');
                    window.location.href='".BASE_URL."signup';
                </script>"; 

                
            } else {
                echo 
                "<script>
                    alert('".'Đã xảy ra lỗi, vui lòng thử lại!'."');
                    window.location.href='".BASE_URL."signup';
                </script>"; 
            }
        } else {
            $model = $this->model('SanPhamModel');
            $categories = $model->GetCategory();
            $this->view('user-signup', [
                'view' => 0,
                'categories' => $categories,
            ]);
        }
    }

}

?>
