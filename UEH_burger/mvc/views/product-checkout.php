<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="vi"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="vi"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="vi">


<!-- product-checkout07:12-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Đặt hàng - UEH Burger</title>

    <meta name="keywords" content="UEH Burger">
    <meta name="description" content="UEH Burger, thanh toán">
    <meta name="author" content="tivatheme">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="<?= STATIC_URL ?>img/home/logo-icon.png">
    <link rel="shortcut icon" href="<?= STATIC_URL ?>img/home/logo-icon.ico">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

<!-- Google Fonts -->
<?php require_once "./mvc/views/inc/font_inc/font.php" ?>

    <!-- libs CSS -->
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/nivo-slider.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/animate.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/style.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/font-material/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/slider-range/css/jslider.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/slick-slider/css/slick.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/slick-slider/css/slick-theme.css">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="<?= STATIC_URL ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= STATIC_URL ?>css/reponsive.css">
</head>

<body class="product-checkout checkout-cart">
<?php require_once "./mvc/views/inc/header.php" ?>


    <!-- main content -->
    <div id="checkout" class="main-content">
        <div class="wrap-banner">
            <!-- breadcrumb -->
            <nav class="breadcrumb-bg">
                <div class="container no-index">
                    <div class="breadcrumb">
                        <ol>
                            <li>
                                <a href="#">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Checkout</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>
			
            <!-- main -->
            <div id="wrapper-site">
                <div class="container">
                    <div class="row">
                        <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                            <div id="main">
                                <div class="cart-grid row">
                                    <div class="col-md-9 check-info">
                                        <div class="checkout-personal-step">
                                            <h3 class="step-title h3 info">
                                                <span class="step-number">+</span>Thông tin đặt hàng
                                            </h3>
                                        </div>
                                        <div class="content">
                                            <ul class="nav nav-inline">
                                            </ul>
                                            <span> <b>Quý khách vui lòng kiểm tra thông tin trước khi đặt hàng</b></span>
                                            <div class="tab-content mt-3">
                                                
                                                <div class="tab-pane fade in active show" id="checkout-guest-form" role="tabpanel">
                                                    

                                                    <form action="<?=BASE_URL?>gio-hang/dat-hang" id="customer-form" class="js-customer-form" method="post">
                                                        <div>
                                                            <?php $udata = $data['userdata'];?>
                                                            
                                                            <div class="form-group row">
                                                            <label for="fullname">Tên đầy đủ:</label>
                                                                <input class="form-control" required name="fullname" type="text" placeholder="Họ và tên" value="<?=$udata['name']?>">
                                                            </div>
                                                            
                                                            <div class="form-group row">
                                                                <label for="address">Địa chỉ:</label>
                                                                <input class="form-control" required name="address" type="text" placeholder="Địa chỉ" value="<?=$udata['address']?>">
                                                            </div>
                                                 
                                                            <div class="form-group row">
                                                                <label for="phone">Số điện thoại:</label>
                                                                <input class="form-control" required name="phone" type="text" placeholder="Số điện thoại" value="<?=$udata['phone_number']?>">
                                                            </div>

                                                            <?php if (isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {
                                                                $i=0;
                                                                foreach ($_SESSION['cart'] as $key=>$sp) {
                                                            ?>
                                                                <input type="hidden" name="sp-<?=$i?>" value="<?=$sp['name']?>">
                                                            <?php $i++;}}?>
                                                        </div>
                                                        
                                                        <div class="clearfix">
                                                        
                                                            <div class="row">
                                                                
                                                                
                                                                <button class="continue btn btn-primary pull-xs-right" data-link-action="register-new-customer" type="submit"
                                                                    >
                                                                    Đặt hàng
                                                                </button>
                                                                
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="checkout-login-form" role="tabpanel">
                                                    <form id="login-form" action="#" method="post" class="customer-form">
                                                        <div>
                                                            <input type="hidden" name="back" value="">
                                                            <div class="form-group row">
                                                                <input class="form-control" name="email" type="email" placeholder="Email">
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="input-group js-parent-focus">
                                                                    <input class="form-control js-child-focus js-visible-password" name="password" type="password" placeholder="Password">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="forgot-password">
                                                                    <a href="user-reset-password.html" rel="nofollow">
                                                                        Forgot your password?
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix">
                                                            <div class="row">
                                                                <button class="continue btn btn-primary pull-xs-right" name="continue" data-link-action="sign-in" type="submit" value="1">
                                                                    Continue
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "./mvc/views/inc/footer.php" ?>

<?php require_once "./mvc/views/inc/mobile-menu.php" ?>


<!-- Vendor JS -->
<script src="<?= STATIC_URL ?>libs/jquery/jquery.min.js"></script>
<script src="<?= STATIC_URL ?>libs/popper/popper.min.js"></script>
<script src="<?= STATIC_URL ?>libs/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= STATIC_URL ?>libs/nivo-slider/js/jquery.nivo.slider.js"></script>
<script src="<?= STATIC_URL ?>libs/owl-carousel/owl.carousel.min.js"></script>
<script src="<?= STATIC_URL ?>libs/slider-range/js/tmpl.js"></script>
<script src="<?= STATIC_URL ?>libs/slider-range/js/jquery.dependClass-0.1.js"></script>
<script src="<?= STATIC_URL ?>libs/slider-range/js/draggable-0.1.js"></script>
<script src="<?= STATIC_URL ?>libs/slider-range/js/jquery.slider.js"></script>
<script src="<?= STATIC_URL ?>libs/slick-slider/js/slick.min.js"></script>

<!-- Template JS -->
<script src="<?= STATIC_URL ?>js/theme.js"></script>
</body>


<!-- product-checkout07:13-->
</html>