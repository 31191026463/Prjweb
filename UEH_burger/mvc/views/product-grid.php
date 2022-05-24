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
    <title><?=isset($data['danhmuc'])?$data['danhmuc']:$data['pageTitle']?> - UEH Burger</title>
    <meta property="og:url" content="<?=BASE_URL?>">
    <meta name="revisit-after" content="1 day">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="HandheldFriendly" content="true">
    <meta property="og:site_name" content="UEH Burger">

    <meta name="keywords" content="UEH Burger,nội thất Đà Nẵng, nội thất, funiture, 
    <?=isset($data['danhmuc'])?$data['danhmuc']:''?>,UEH Burger">
    <meta name="description" content="Các sản phẩm ở UEH Burger luôn đem đến sự hài lòng cho người sử dụng,
    với nhiều danh mục để chọn lựa, đa dạng sản phẩm.
    ">
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
                                        <?php foreach ($data['path'] as $path) {?>
                                            <li>
                                                <a href="<?=$path['url']?>">
                                                    <span><?=$path['name']?></span>
                                                </a>
                                            </li>
                                        <?php }?>
                                    </ol>
                                </div>
                            </div>
                        </nav>

                        <div class="container">
                            <div class="content">
                                <div class="row">
                                    <div class="sidebar-3 sidebar-collection col-lg-3 col-md-4 col-sm-4 order-2 order-sm-1">

                                        <!-- category menu -->
                                        <?php require_once "./mvc/views/inc/main/categories.php" ?>

                                        <!-- best seller -->
                                        <?php require_once "./mvc/views/inc/main/catalog.php" ?>

                                        <!-- product tag -->
                                        <?php require_once "./mvc/views/inc/main/tags.php" ?>

                                    </div>
                                    <div class="col-sm-8 col-lg-9 col-md-8 product-container order-1 order-sm-2">
                                        <h1><?= $data['pageTitle'] ?></h1>
                                        <div class="js-product-list-top firt nav-top">
                                            <div class="d-flex justify-content-around row">
                                                <div class="col col-xs-12">
                                                    <ul class="nav nav-tabs">
                                                        <li>
                                                            <a href="#grid" data-toggle="tab" class="active show fa fa-th-large"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#list" data-toggle="tab" class="fa fa-list-ul"></a>
                                                        </li>
                                                    </ul>
                                                    <div class="hidden-sm-down total-products">
                                                        <p>Có <?= $data['numOfSP'] ?> sản phẩm</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content product-items">
                                            <div id="grid" class="related tab-pane fade in active show">
                                                <div class="row">

                                                    <?php foreach ($data['allSP'] as $sp) { ?>
                                                        <div class="item text-center col-md-4 card border-0">
                                                            <div class="product-miniature js-product-miniature item-one first-item">
                                                                <div class="thumbnail-container border">
                                                                    <a href="<?= BASE_URL ?>san-pham/<?= $sp['url'] ?>">
                                                                        <?php $images = explode(',', $sp['images']) ?>

                                                                        <img class="img-fluid image-cover" src="<?= $images[0] ?>" alt="img">
                                                                        <?php if (isset($images[1])) { ?>
                                                                            <img class="img-fluid image-secondary" src="<?= $images[1] ?>" alt="img">
                                                                        <?php } ?>

                                                                    </a>
                                                                    <div class="highlighted-informations">
                                                                    <div class="variant-links">
                                                                        <a href="#" class="color beige" title="Beige"></a>
                                                                        <a href="#" class="color orange" title="Orange"></a>
                                                                        <a href="#" class="color green" title="Green"></a>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="product-title">
                                                                            <a href="product-detail.html" style="text-transform: uppercase"><?= $sp['name'] ?></a>
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
                                                                        <form action="<?=BASE_URL?>san-pham/<?=$sp['url']?>" method="post" class="formAddToCart">
                                                                        <input type="hidden" name='url' value='<?=$sp['url']?>'>
                                                                                        <input type="hidden" name='name' value='<?=$sp['name']?>'>
                                                                                        <input type="hidden" name='price' value='<?=$sp['price']?>'>
                                                                                        <input type="hidden" name='image' value='<?=$images[0]?>'>
                                                                            <button class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                        </button>
                                                                        </form>
                                                                        <a href="<?= BASE_URL ?>san-pham/<?= $sp['url'] ?>" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                            <div id="list" class="related tab-pane fade">
                                                <div class="row">
                                                    <?php foreach ($data['allSP'] as $sp) { ?>
                                                        <div class="item col-md-12">
                                                            <div class="product-miniature item-one first-item">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="thumbnail-container border">
                                                                            <a href="<?= BASE_URL ?>san-pham/<?= $sp['url'] ?>">
                                                                                <?php $images = explode(',', $sp['images']) ?>

                                                                                <img class="img-fluid image-cover" src="<?= $images[0] ?>" alt="img">
                                                                                <?php if (isset($images[1])) { ?>
                                                                                    <img class="img-fluid image-secondary" src="<?= $images[1] ?>" alt="img">
                                                                                <?php } ?>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a style="text-transform: uppercase" href="<?= BASE_URL ?>san-pham/<?= $sp['url'] ?>"><?= $sp['name'] ?></a>
                                                                                    <span class="info-stock">
                                                                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                                                        Còn hàng
                                                                                    </span>
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
                                                                                <div class="discription">
                                                                                    <?= substr($sp['description'], 0, 100) . '...' ?>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>Thêm vào giỏ hàng
                                                                                    </a>
                                                                                </form>
                                                                                <!-- <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a> -->
                                                                                <a href="<?= BASE_URL ?>san-pham/<?= $sp['url'] ?>" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- pagination -->
                                        <div class="pagination">
                                            <div class="js-product-list-top ">
                                                <div class="d-flex justify-content-around row">
                                                    <div class="showing col col-xs-12">
                                                        <span>Có tất cả <?= $data['numOfSP'] ?> sản phẩm (chỉ hiển thị 12 sản phẩm mỗi trang)</span>
                                                    </div>
                                                    <div class="page-list col col-xs-12">
                                                        <ul>
                                                            <?php $currentPage = $data['currentPage'];
                                                            $numOfPage = $data['numOfPage'];
                                                            ?>
                                                            <li>
                                                                <a rel="prev" <?php if ($currentPage != 1) { ?> href="<?= $data['url'] . ($data['currentPage'] - 1) ?>" <?php } ?> class="previous disabled js-search-link">
                                                                    Trang trước
                                                                </a>
                                                            </li>

                                                            <?php if (($currentPage - 1) > 0) { ?>
                                                                <li>
                                                                    <a rel="nofollow" href="<?= $data['url'] . ($currentPage - 1) ?>" class="disabled js-search-link">
                                                                        <?= $currentPage - 1 ?>
                                                                    </a>
                                                                </li>
                                                            <?php } ?>
                                                            <li class='current active'>
                                                                <a rel="nofollow" class='current active' href="#" class="disabled js-search-link">
                                                                    <?= $currentPage ?>
                                                                </a>
                                                            </li>
                                                            <?php if (($currentPage + 1) <= $numOfPage) { ?>
                                                                <li>
                                                                    <a rel="nofollow" href="<?= $data['url'] . ($currentPage + 1) ?>" class="disabled js-search-link">
                                                                        <?= $currentPage + 1 ?>
                                                                    </a>
                                                                </li>
                                                            <?php } ?>

                                                            <li>
                                                                <a rel="next" <?php if ($currentPage != $numOfPage) { ?> href="<?= $data['url'] . ($data['currentPage'] + 1) ?>" <?php } ?> class="next disabled js-search-link">
                                                                    Trang sau
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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


    <!-- Page Loader -->
    <!-- <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div> -->

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