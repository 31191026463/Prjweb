<?php
require_once './mvc/helper/authorization.php';
class Logout extends Controller{

    function Default(){
        unsetUser();
        echo
        "<script>
            alert('" . 'Đăng xuất thành công!' . "');
            window.location.href='" . BASE_URL . "';
        </script>"; 
    }
    
}

?>
