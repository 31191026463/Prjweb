<?php
require_once "./mvc/config/config.php";
class App{
    protected $controller="TrangChu";
    protected $action="Default";
    protected $params=[];

    function __construct(){
  
        $arr = $this->UrlProcess();
        $arr = $this->Check($arr);

        if (!isset($arr[0])) {
            $arr[] = $this->controller;
        }
        // Controller
        if( file_exists("./mvc/controllers/".$arr[0].".php") ){
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./mvc/controllers/". $this->controller .".php";
        $this->controller = new $this->controller;

        // Action
        if(isset($arr[1])){
            if( method_exists( $this->controller , $arr[1]) ){
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        // Params
        $this->params = $arr?array_values($arr):[];

        call_user_func_array([$this->controller, $this->action], $this->params );

    }

    function UrlProcess(){
        if( isset($_GET["url"]) ){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }

    function Check($arr) {
        $returnArr = array();
        //kiem tra controller
        if (!isset($arr[0])) {
            return array();
        }
        switch ($arr[0]) {
            //home
            case 'trang-chu':
                array_push($returnArr, 'TrangChu');
                if (isset($arr[1])) return array('NotFound');
                break;
            //sp
            case 'san-pham':
                array_push($returnArr, 'SanPham');
                if (isset($arr[1])) {
                    switch ($arr[1]) {
                        //filter
                        case 'bo-loc':
                            array_push($returnArr, 'BoLoc');
                            if (count($arr) <= 2 || count($arr) > 4) {
                                return array('NotFound');
                            } 
                            else {
                                for ($i = 2; $i<count($arr); $i++) {
                                    array_push($returnArr, $arr[$i]);
                                }
                            }
                            break;
                        //all sp
                        case 'tat-ca-san-pham':
                            array_push($returnArr, 'TatCaSanPham');
                            if (count($arr) <= 1 || count($arr) > 3) {
                                return array('NotFound');
                            } 
                            else {
                                for ($i = 2; $i<count($arr); $i++) {
                                    array_push($returnArr, $arr[$i]);
                                }
                            }
                            break;
                        //lay san pham theo ten
                        default:
                            array_push($returnArr, 'GetSanPham');
                            array_push($returnArr, $arr[1]);
                            if (isset($arr[2])) return array('NotFound');
                            break;
                    }
                } else {
                    return $returnArr;
                }
                break;
            case "danh-muc":
                array_push($returnArr, 'DanhMuc');
                array_push($returnArr, 'GetSPDanhMuc');
                if (count($arr) < 2 || count($arr) > 3) {
                    return array('NotFound');
                }
                else {
                    for ($i = 1; $i<count($arr); $i++) {
                        array_push($returnArr, $arr[$i]);
                    }
                }
                break;
            case 'tim-kiem':
                array_push($returnArr, 'TimKiem');
                array_push($returnArr, 'Search');
                if (count($arr) < 2 || count($arr) > 3) {
                    // return array('NotFound');
                    //chuyen qua tat ca san pham
                    return [0 => 'SanPham'];
                }
                else {
                    for ($i = 1; $i<count($arr); $i++) {
                        array_push($returnArr, $arr[$i]);
                    }
                }
                break;

            case 'lien-he':
                array_push($returnArr, 'LienHe');
                if (isset($arr[1])) return array('NotFound');
                break;
            case 'signup':
                array_push($returnArr, 'Signup');
                if (isset($arr[1])) return array('NotFound');
                break;
            case 'login':
                array_push($returnArr, 'Login');
                if (isset($arr[1])) return array('NotFound');
                break;
            case 'tai-khoan':
                array_push($returnArr, 'Account');
                if (isset($arr[1])) return array('NotFound');
                break;
            case 'logout':
                array_push($returnArr, 'Logout');
                if (isset($arr[1])) return array('NotFound');
                break;
            case 'quan-li':
                array_push($returnArr, 'QuanLi');
                if (isset($arr[1])) {
                    switch ($arr[1]) {
                        case 'quan-li-san-pham':
                            array_push($returnArr, 'QuanLiSanPham');
                            if (isset($arr[2])) {
                                switch ($arr[2]) {
                                    case 'them-san-pham':
                                        $returnArr[1] = 'ThemSanPham';
                                        //xet tham so
                                        break;
                                    case 'chi-tiet':
                                        $returnArr[1] = 'ChiTietSanPham';
                                        $returnArr[2] = $arr[3];
                                        //xet tham so
                                        break;
                                    case 'chinh-sua':
                                        $returnArr[1] = 'ChinhSuaSanPham';
                                        if (isset($arr[3]))
                                        $returnArr[2] = $arr[3];
                                        //xet tham so
                                        break;
                                    case 'xoa':
                                        $returnArr[1] = 'XoaSanPham';
                                        //xet ts
                                        break;
                                    default:
                                        return array('NotFound');
                                        break;
                                }
                            } 
                            break;
                        case 'quan-li-danh-muc':
                            array_push($returnArr, 'QuanLiDanhMuc');
                            if (isset($arr[2])) {
                                switch ($arr[2]) {
                                    case 'chinh-sua':
                                        $returnArr[1] = 'ChinhSuaDanhMuc';
                                        //xet tham so
                                        break;
                                    default:
                                        return array('NotFound');
                                        break;
                                }
                            } 
                            break;
                        case 'quan-li-don-hang':
                            array_push($returnArr, 'QuanLiDonHang');
                            //xet tham so
                            break;
                        case 'quan-li-anh':
                            array_push($returnArr, 'QuanLiAnh');
                            //xet tham so
                            break;
                        default:
                            return array('NotFound');
                            break;
                    }   
                } 
                else {
                    return $returnArr;
                }
                break;
            case 'gio-hang':
                array_push($returnArr, 'GioHang');
                if (isset($arr[1])) {
                   
                        switch ($arr[1]) {
                            case "xoa-san-pham":
                                array_push($returnArr, 'XoaSanPham');
                                if (count($arr) < 3 || count($arr) > 4) {
                                    return array('NotFound');
                                }
                                if (isset($arr[2])) {
                                    array_push($returnArr, $arr[2]);
                                }
                    
                                break;
                            case "dat-hang":
                                array_push($returnArr, 'DatHang');
                                if (isset($arr[2])) {
                                    return array('NotFound');
                                }
                                break;
                            default:
                                return array('NotFound');
                        }
                    
                }
                break;
            default:
                return array('NotFound');
                break;

        }
        return $returnArr;
    }

}
?>