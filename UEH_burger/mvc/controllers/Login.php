<?php
require_once './mvc/helper/authorization.php';
class Login extends Controller{

    function Default(){
        if (isLoggedIn()) {
            header("Location: ".BASE_URL);
            exit();
        }
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
            
                if (validateLoginInfo($username, $password)) {
                    $userModel = $this->model('UserModel');
                    $role = $userModel->Login($username, $password);
                    if ($role == 0) {
                        echo 
                        "<script>
                            alert('".'Tên đăng nhập hoặc mật khẩu sai, vui lòng thử lại!'."');
                            window.location.href='".BASE_URL."login';
                        </script>"; 
                    } elseif ($role == 1) {
                        setUser($username, $role);
                        echo 
                        "<script>
                            alert('".'Đăng nhập admin thành công!'."');
                            window.location.href='".BASE_URL."login';
                        </script>"; 
                    } elseif ($role == 2) {
                        setUser($username, $role);
                        echo 
                        "<script>
                            alert('".'Đăng nhập thành công!'."');
                            window.location.href='".BASE_URL."login';
                        </script>";
                    } else {

                    }
                    
                } else {
                    echo 
                    "<script>
                        alert('".'Tên đăng nhập hoặc mật khẩu không hợp lệ, vui lòng thử lại!'."');
                        window.location.href='".BASE_URL."login';
                    </script>"; 
                }
            } else {
                echo 
                "<script>
                    alert('".'Đã xảy ra lỗi, vui lòng thử lại!'."');
                    window.location.href='".BASE_URL."login';
                </script>"; 
            }
        } else {
            $model = $this->model('SanPhamModel');
            $categories = $model->GetCategory();
            $this->view('user-login', [
                'view' => 0,
                'categories' => $categories,
            ]);
        }
    }

}

?>
