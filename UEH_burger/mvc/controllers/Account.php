<?php
require_once './mvc/helper/authorization.php';
class Account extends Controller{

    function Default()
    {
        if (!isLoggedIn()) {
            header("Location: ".BASE_URL);
            exit();
        }

        $model = $this->model('SanPhamModel');
        $categories = $model->GetCategory();

        $userModel = $this->model('UserModel');
        $userdata = $userModel->GetUser($_SESSION['username']);
        
        $this->view('user-acount', [
            'view' => 0,
            'categories' => $categories,
            'userdata' => $userdata
        ]);
    }
    

}

?>
