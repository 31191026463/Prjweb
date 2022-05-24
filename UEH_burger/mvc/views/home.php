<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="vi"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="vi"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="vi">


<!-- home509:49-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta property="og:type" content="website">

    <meta property="og:url" content="<?= BASE_URL ?>">
    <meta name="revisit-after" content="1 day">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="HandheldFriendly" content="true">
    <meta property="og:site_name" content="UEH Burger">

    <title>UEH Burger</title>
    <meta property="og:title" content="UEH Burger">
    <link rel="icon" href="<?= STATIC_URL ?>img/home/logo-icon.png">
    <link rel="shortcut icon" href="<?= STATIC_URL ?>img/home/logo-icon.ico">
    <meta name="keywords" content="UEH Burger">
    <meta name="description" content="UEH Burger là chuỗi cửa hàng thức ăn nhanh nổi tiếng thế giới với công thức Hamberger đột phá và 100% nguyên liệu thịt bò nhập từ Úc.">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <?php require_once "./mvc/views/inc/font_inc/font.php" ?>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/font-material/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/nivo-slider.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/animate.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/style.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/owl-carousel/assets/owl.carousel.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="<?= STATIC_URL ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= STATIC_URL ?>css/reponsive.css">


</head>

<body id="home5">

    <!-- contact pop -->
    <?php require_once "./mvc/views/inc/phone.php" ?>
    <?php require_once "./mvc/views/inc/fb-messenger.php" ?>

    <!-- header -->
    <?php require_once "./mvc/views/inc/home-header.php" ?>
    <!-- !header -->

    <!-- main content -->
    <div class="main-content">
        <div class="wrap-banner">
            <!-- menu category -->
            <div class="menu-banner d-xs-none">
                <div class="tiva-verticalmenu block">
                    <div class="box-content">
                    </div>
                </div>
            </div>
        </div>

        <!-- main -->
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <section class="page-home">
                        <div class="row justify-content-center mt-5">
                            <div class="title-product justify-content-between mt-4">
                                <h2>Danh mục món ăn</h2>
                                <p style='text-align: center'>Các Danh mục món ăn chúng tôi cung cấp, <br><a href="<?= BASE_URL ?>san-pham">xem Tất cả món ăn ở đây</a></p>
                            </div>
                        </div>
                        <div class="tab-content row">
                            <!-- banner -->
                            <div class="spacing-10 group-image-special">
                                <div class="row">

                                    <?php foreach ($data['categoriesBanner'] as $category) { ?>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="block">
                                                <div class="effect">
                                                    <a style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif" href="<?= BASE_URL . 'danh-muc/' . $category['url'] ?>">
                                                        <span style="color: #fff; text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;"><?= $category['name'] ?></span>
                                                        <img class="img-fluid width-100" src="<?= $category['image'] ?>" alt="banner-1" title="banner-1">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>


                                </div>
                            </div>

                            

                            <!--FEATURED PRODUCTS -->
                            <div class="featured-product">
                                <div class="title-tab-content  text-center">
                                    <div class="title-product justify-content-between">
                                        <h2>Món ăn nổi bật</h2>
                                        <p>Những món ăn được mua nhiều</p>
                                    </div>
                                </div>
                                <div class="tab-content row">

                                    <?php foreach ($data['SPnoibat'] as $sp) { ?>
                                        <div class="col-md-3 item text-center card border-0">
                                            <div class="product-miniature js-product-miniature item-one first-item">
                                                <div class="thumbnail-container">
                                                    <a href="<?= BASE_URL ?>san-pham/<?= $sp['url'] ?> " style="">
                                                        <?php $images = explode(',', $sp['images']) ?>

                                                        <img class="img-fluid image-cover" src="<?= $images[0] ?>" alt="img" style="">
                                                        <?php if (isset($images[1])) { ?>
                                                            <img class="img-fluid image-secondary" src="<?= $images[1] ?>" alt="img" style="">
                                                        <?php } ?>
                                                    </a>
                                                    <div class="highlighted-informations">
                                                        <div class="variant-links">
                                                            <a class="color beige" title="Beige"></a>
                                                            <a class="color orange" title="Orange"></a>
                                                            <a class="color green" title="Green"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-title">
                                                            <a style="text-transform: uppercase" href="<?= BASE_URL ?>san-pham/<?= $sp['url'] ?>"><?= $sp['name'] ?></a>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="star-content">
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                            </div>
                                                        </div>
                                                        <div class="product-group-price">
                                                            <div class="product-price-and-shipping">
                                                                <span class="price">
                                                                    <?php if ($sp['price'] > 0) echo number_format($sp['price']) . 'đ';
                                                                    else echo 'Liên hệ' ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-buttons d-flex justify-content-center">
                                                        <a href="<?= BASE_URL ?>san-pham/<?= $sp['url'] ?>" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>

                                <div class="content-showmore text-center has-showmore">
                                    <a href="<?= BASE_URL ?>san-pham/bo-loc/moi-nhat" type="button" class="btn btn-default novShowMore">
                                        <span>Xem thêm</span>
                                    </a>
                                </div>
                            </div>
                    </section>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
    <?php require_once "./mvc/views/inc/home-footer.php" ?>

    <!-- menu mobie left -->
    <?php require_once "./mvc/views/inc/mobile-menu.php" ?>
    <!-- Page Loader -->


    <!-- Vendor JS -->
    <script src="<?= STATIC_URL ?>libs/jquery/jquery.min.js"></script>
    <script src="<?= STATIC_URL ?>libs/popper/popper.min.js"></script>
    <script src="<?= STATIC_URL ?>libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= STATIC_URL ?>libs/nivo-slider/js/jquery.nivo.slider.js"></script>
    <script src="<?= STATIC_URL ?>libs/owl-carousel/owl.carousel.min.js"></script>

    <!-- Template JS -->
    <script src="<?= STATIC_URL ?>js/theme.js"></script>
</body>


<!-- home510:09-->

</html>