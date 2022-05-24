<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="vi"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="vi"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="vi">


<!-- product-grid-sidebar-left10:54-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Không tìm thấy kết quả - UEH Burger</title>

    <meta name="keywords" content="UEH Burger">
    <meta name="description" content="UEH Burger">
    
    <link rel="icon" href="<?= STATIC_URL ?>img/home/logo-icon.png">
    <link rel="shortcut icon" href="<?= STATIC_URL ?>img/home/logo-icon.ico">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <?php require_once "./mvc/views/inc/font_inc/font.php" ?>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/nivo-slider.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/animate.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/style.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/font-material/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/slider-range/css/jslider.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/owl-carousel/assets/owl.carousel.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="<?= STATIC_URL ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= STATIC_URL ?>css/reponsive.css">
</head>

<body id="product-sidebar-left" class="product-grid-sidebar-left">
    <!-- contact pop -->
    <?php require_once "./mvc/views/inc/phone.php" ?>
    <?php require_once "./mvc/views/inc/fb-messenger.php"?>
    
    <!-- header -->
    <?php require_once "./mvc/views/inc/header.php" ?>
    <!-- !header -->

    <!-- main content -->
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <div class="page-home">
                        <!-- breadcrumb -->
                        <nav class="breadcrumb-bg">
                            <div class="container no-index">
                                <div class="breadcrumb">
                                    <ol>
                                        <?php foreach ($data['path'] as $path) { ?>
                                            <li>
                                                <a href="<?= $path['url'] ?>">
                                                    <span><?= $path['name'] ?></span>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ol>
                                </div>
                            </div>
                        </nav>

                        <div class="container">
                            <div class="content">
                                <div class="row">
                                    <div class="sidebar-3 sidebar-collection col-lg-3 col-md-4 col-sm-4">

                                        <!-- category menu -->
                                        <?php require_once "./mvc/views/inc/main/categories.php" ?>

                                        <!-- best seller -->
                                        <?php require_once "./mvc/views/inc/main/catalog.php" ?>

                                        <!-- product tag -->
                                        <?php require_once "./mvc/views/inc/main/tags.php" ?>

                                    </div>
                                    <div class="col-sm-8 col-lg-9 col-md-8 product-container">
                                        <h1><?= $data['pageTitle'] ?></h1>
                                        <p>Bạn hãy thử chọn từ khóa khác thích hợp, hoặc chọn theo danh mục bên trái.</p>


                                    </div>

                                    <!-- end col-md-9-1 -->
                                </div>
                            </div>
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
    <script src="<?= STATIC_URL ?>libs/jquery/jquery.min.js"></script>
    <script src="<?= STATIC_URL ?>libs/popper/popper.min.js"></script>
    <script src="<?= STATIC_URL ?>libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= STATIC_URL ?>libs/nivo-slider/js/jquery.nivo.slider.js"></script>
    <script src="<?= STATIC_URL ?>libs/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?= STATIC_URL ?>libs/slider-range/js/tmpl.js"></script>
    <script src="<?= STATIC_URL ?>libs/slider-range/js/jquery.dependClass-0.1.js"></script>
    <script src="<?= STATIC_URL ?>libs/slider-range/js/draggable-0.1.js"></script>
    <script src="<?= STATIC_URL ?>libs/slider-range/js/jquery.slider.js"></script>

    <!-- Template JS -->
    <script src="<?= STATIC_URL ?>js/theme.js"></script>
</body>


<!-- product-grid-sidebar-left10:55-->

</html>