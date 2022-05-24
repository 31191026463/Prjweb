<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="vi"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="vi"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="vi">


<!-- user-acount11:10-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Furnitica - Minimalist Furniture HTML Template</title>

    <meta name="keywords" content="Furniture, Decor, Interior">
    <meta name="description" content="Furnitica - Minimalist Furniture HTML Template">
    <meta name="author" content="tivatheme">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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

<body class="user-acount">
    <!-- header -->
    <?php require_once "./mvc/views/inc/header.php" ?>

    <!-- main content -->
    <div class="main-content">
        <div class="wrap-banner">

            <!-- breadcrumb -->
            <nav class="breadcrumb-bg">
                <div class="container no-index">
                    <div class="breadcrumb">
                        <ol>
                            <li>
                                <a href="<?= BASE_URL ?>">
                                    <span>Trang chủ</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Tài khoản của tôi</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>

            <div class="acount head-acount">
                <div class="container">
                    <div id="main">
                        <h1 class="title-page">Thông tin tài khoản</h1>
                        <div class="content" id="block-history">
                            <table class="std table">
                                <tbody>
                                    <?php $udata = $data['userdata']?>
                                    <tr>
                                        <th class="first_item">Họ tên :</th>
                                        <td><?=$udata['name']?></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Username :</th>
                                        <td><?=$udata['username']?></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Địa chỉ :</th>
                                        <td><?=$udata['address']?></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Số điện thoại :</th>
                                        <td><?=$udata['phone_number']?></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Ngày đăng kí :</th>
                                        <td><?=date_format(date_create($udata['date_created']),"Y/m/d H:i:s");?></td>
                                    </tr>
                    
                                </tbody>
                            </table>

                        </div>
                        
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php require_once "./mvc/views/inc/footer.php" ?>

	<?php require_once "./mvc/views/inc/mobile-menu.php" ?>


    <!-- Vendor JS -->
    <script src="<?=STATIC_URL?>libs/jquery/jquery.min.js"></script>
    <script src="<?=STATIC_URL?>libs/popper/popper.min.js"></script>
    <script src="<?=STATIC_URL?>libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=STATIC_URL?>libs/nivo-slider/js/jquery.nivo.slider.js"></script>
    <script src="<?=STATIC_URL?>libs/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?=STATIC_URL?>libs/slider-range/js/tmpl.js"></script>
    <script src="<?=STATIC_URL?>libs/slider-range/js/jquery.dependClass-0.1.js"></script>
    <script src="<?=STATIC_URL?>libs/slider-range/js/draggable-0.1.js"></script>
    <script src="<?=STATIC_URL?>libs/slider-range/js/jquery.slider.js"></script>
    <script src="<?=STATIC_URL?>libs/slick-slider/js/slick.min.js"></script>

    <!-- Template JS -->
    <script src="<?=STATIC_URL?>js/theme.js"></script>
</body>


<!-- user-acount11:10-->

</html>