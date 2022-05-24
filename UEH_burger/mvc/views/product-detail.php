<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="vi"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="vi"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="zxx">


<!-- product-detail06:46-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title><?=ucfirst($data['SP'][0]['name'])?> - UEH Burger</title>
    <meta property="og:url" content="<?=BASE_URL?>">
    <meta name="revisit-after" content="1 day">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="HandheldFriendly" content="true">
    <meta property="og:site_name" content="UEH Burger">

    <meta name="keywords" content="<?=$data['SP'][0]['tag']?>,UEH Burger">
    <meta name="description" content="<?=$data['SP'][0]['description']?>">

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

<body id="product-detail">

    <!-- contact pop -->
    <?php require_once "./mvc/views/inc/phone.php" ?>
    <?php require_once "./mvc/views/inc/fb-messenger.php"?>
    
    <!-- header -->
    <?php require_once "./mvc/views/inc/header.php" ?>
    <!-- !header -->

    <!-- main content -->
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper">
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
                                    <div class="sidebar-3 sidebar-collection col-lg-3 col-md-3 col-sm-4 order-2 order-sm-1">

                                        <!-- category -->
                                        <?php require_once "./mvc/views/inc/main/categories.php" ?>

                                        <!-- best seller -->
                                        <?php require_once "./mvc/views/inc/main/bestseller.php" ?>

                                        <!-- product tag -->
                                        <?php require_once "./mvc/views/inc/main/tags.php" ?>
                                    </div>

                                    <?php $sp = $data['SP'][0] ?>
                                    <div class="col-sm-8 col-lg-9 col-md-9 order-1 order-sm-2">
                                        <div class="main-product-detail">
                                            <h2 style="text-transform: uppercase"><?= $sp['name'] ?></h2>
                                            <div class="product-single row">
                                                <div class="product-detail col-xs-12 col-md-5 col-sm-5">
                                                    <div class="page-content" id="content">
                                                        <div class="images-container">
                                                            <div class="js-qv-mask mask tab-content border">
                                                                <?php
                                                                $images = $images = explode(',', $sp['images']);
                                                                foreach ($images as $key => $image) {
                                                                ?>
                                                                    <div id="item<?= $key + 1 ?>" class="tab-pane fade <?= $key == 0 ? "active in show" : '' ?>">
                                                                        <img src="<?= $image ?>" alt="img">
                                                                    </div>
                                                                <?php } ?>

                                                                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                                                    <i class="fa fa-expand"></i>
                                                                </div>
                                                            </div>
                                                            <ul class="product-tab nav nav-tabs d-flex">

                                                                <?php foreach ($images as $key => $image) { ?>
                                                                    <li class="<?= $key == 0 ? 'active' : '' ?> col">
                                                                        <a href="#item<?= $key + 1 ?>" data-toggle="tab" <?php if ($key == 0) { ?>aria-expanded="true" class="active show" <?php } ?>>
                                                                            <img src="<?= $image ?>" alt="img">
                                                                        </a>
                                                                    </li>
                                                                <?php } ?>


                                                            </ul>
                                                            <div class="modal fade" id="product-modal" role="dialog">
                                                                <div class="modal-dialog">

                                                                    <!-- Modal content-->
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <div class="modal-body">
                                                                                <div class="product-detail">
                                                                                    <div>
                                                                                        <div class="images-container">
                                                                                            <div class="js-qv-mask mask tab-content">

                                                                                                <?php foreach ($images as $key => $image) { ?>
                                                                                                    <div id="modal-item<?= $key + 1 ?>" class="tab-pane fade <?= $key == 0 ? 'active in show' : '' ?>">
                                                                                                        <img src="<?= $image ?>" alt="img">
                                                                                                    </div>
                                                                                                <?php } ?>

                                                                                            </div>
                                                                                            <ul class="product-tab nav nav-tabs">

                                                                                                <?php foreach ($images as $key => $image) { ?>
                                                                                                    <li class="<?= $key == 0 ? 'active' : '' ?>">
                                                                                                        <a href="#modal-item<?= $key + 1 ?>" data-toggle="tab" class="<?= $key == 0 ? 'active show' : '' ?>">
                                                                                                            <img src="<?= $image ?>" alt="img">
                                                                                                        </a>
                                                                                                    </li>
                                                                                                <?php } ?>


                                                                                            </ul>
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
                                                <div class="product-info col-xs-12 col-md-7 col-sm-7">
                                                    <div class="detail-description">
                                                        <div class="price-del">
                                                            <span style="font-size: 20px">Giá: </span>
                                                            <span class="price"><?= $sp['price'] != 0 ? number_format($sp['price']) . 'đ' : 'Liên hệ' ?></span>
                                                            <span class="float-right">
                                                                <span class="availb">Tình trạng: </span>
                                                                <span class="check">
                                                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>CÒN HÀNG</span>
                                                            </span>
                                                        </div>
                                                        <p class="description">Sản phẩm được báo giá vận chuyển với bạn khi liên lạc</p>
                                                        <div class="has-border cart-area">
                                                            <div class="product-quantity">
                                                                <div class="qty">
                                                                    <div class="input-group">
                                                                        <div class="quantity">
                                                                            <span class="control-label">QTY : </span>
                                                                            <span type="text" name="qty" id="quantity_wanted"  class="input-group form-control">1</span>
                                                                        </div>
                                                                        <span class="add">
                                                                            <div style="display: flex; align-items: stretch">
                                                                                <div style="display: flex; align-items: center">
                                                                                    <form method="post" action="<?=BASE_URL?>san-pham/<?=$sp['url']?>">
                                                                                        <input type="hidden" name='url' value='<?=$sp['url']?>'>
                                                                                        <input type="hidden" name='name' value='<?=$sp['name']?>'>
                                                                                        <input type="hidden" name='price' value='<?=$sp['price']?>'>
                                                                                        <input type="hidden" name='image' value='<?=$images[0]?>'>
                                                                                        <button class="btn btn-primary add-to-cart add-item" data-button-action="add-to-cart" type="submit">
                                                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                            <span>Thêm vào giỏ hàng</span>
                                                                                        </button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <p class="product-minimal-quantity">
                                                            </p>
                                                        </div>
                                                        <div class="d-flex2 has-border">
                                                            <div class="btn-group">
                                                                <a>
                                                                    <i class="zmdi zmdi-share"></i>
                                                                    <span>Chia sẻ</span>
                                                                </a>
                                                                <a class="email">
                                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                                    <span>Gửi tặng bạn bè</span>
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="rating-comment has-border d-flex">
                                                            <div class="review-description d-flex">
                                                                <span>ĐÁNH GIÁ:</span>
                                                                <div class="rating">
                                                                    <div class="star-content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">

                                                            <p>Danh mục :
                                                                <span class="content2">
                                                                    <?php
                                                                    $cates = $data['SP'][1];
                                                                    foreach ($cates as $key => $cate) { ?>
                                                                        <a href="<?=BASE_URL."danh-muc/".$cate['url']?>"><?= $cate['name'] ?></a><?= $key != (count($cates) - 1) ? ',' : '' ?>
                                                                    <?php } ?>

                                                                </span>
                                                            </p>
                                                            <p>Tags :
                                                                <span class="content2">
                                                                    <?php
                                                                    $tags = explode(',', $sp['tag']);
                                                                    foreach ($tags as $index => $tag) {
                                                                    ?>
                                                                        <a href="<?=BASE_URL."tim-kiem/".$tag?>"><?= $tag ?></a><?= $index != count($tags) - 1 ? ',' : '' ?>
                                                                    <?php } ?>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="review">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a data-toggle="tab" href="#description" class="active show">Mô tả sản phẩm</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div id="description" class="tab-pane fade in active show">
                                                        <?php $descriptionList = explode(PHP_EOL, $sp['description']) ?>

                                                        <?php foreach ($descriptionList as $paragraph) { ?>
                                                            <p>
                                                                <?= $paragraph ?>
                                                            </p>
                                                        <?php } ?>


                                                    </div>
                                                </div>
                                            </div>
                                            <?php require_once "./mvc/views/inc/main/related.php" ?>
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

    <!-- footer -->
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


<!-- product-detail07:06-->

</html>