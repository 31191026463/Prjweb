<?php require_once './mvc/helper/authorization.php';?>
<header>
    <!-- search -->
    <div id="tiva-searchBox" class="d-flex align-items-center text-center active">
        <div class="container">
            <span class="tiva-seachBoxClose">
                <i class="zmdi zmdi-close"></i>
            </span>
            <div class="tiva-seachBoxInner">
                <div class="title-search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <span>Tìm kiếm</span>
                </div>
                <div class="description">
                    Tìm kiếm nhanh sản phẩm bạn cần bằng từ khóa về sản phẩm hoặc mã sản phẩm.
                </div>
                <!-- Block search module TOP -->
                <div id="search" class="search-widget d-flex justify-content-center">
                    <script>var a=''</script>
                    <div>
                        <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                        <input 
                            style="
                                font-family: inherit;
                                width: 300px;
                                margin: 0;
                                padding: 8px 10px;
                                margin-bottom: 50px;
                                font-size: 16px;
                                border-radius: 20px;
                                border: 1px solid #b7b7b7;
                                color: #b7b7b7;
                                outline: 0px solid #b7b7b7;
                            "
                            id="searchbo" type="text" value="" placeholder="Nhập nội dung tìm kiếm ở đây"
                            onchange="a= this.value;"
                        >
                        <div>
                        <button 
                            style="
                                font-family: inherit;
                                padding: 10px 35px;
                                font-size: 20px;
                                color: #fff;
                                background-color: #000;
                                border: 0;
                                border-radius: 50px;
                            " 
                            type="button" onclick="
                                window.location.href='<?= BASE_URL ?>tim-kiem/'+a">
                            Tìm
                        </button>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header left mobie -->
    <div class="header-mobile d-md-none">
        <div class="mobile hidden-md-up text-xs-center d-flex align-items-center justify-content-around">

            <!-- menu left -->
            <div id="mobile_mainmenu" class="item-mobile-top">
                <!--<i class="fa fa-bars" aria-hidden="true"></i>-->
            </div>

            <!-- logo -->
            <div class="mobile-logo">
                <a href="<?= BASE_URL ?>">
                    <img class="logo-mobile img-fluid" src="<?= STATIC_URL ?>img/home/logo-mobie.png" alt="Noi that gia vuong logo">
                </a>
            </div>

            <!-- menu right -->
            <div class="mobile-menutop" data-target="#mobile-pagemenu">
                <i class="zmdi zmdi-more"></i>
            </div>
        </div>

        <!-- search -->
        <div id="mobile_search" class="d-flex">
            <div id="mobile_search_content">
                <form method="get" action="#">

                    <input type="text" name="s" value="" placeholder="Tìm kiếm">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="desktop_cart">
                <div class="blockcart block-cart cart-preview tiva-toggle">
                    <div class="header-cart tiva-toggle-btn">
                        <span class="cart-products-count"><?=isset($_SESSION['cart'])?count($_SESSION['cart']):0?></span>
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                    <?php require_once "./mvc/views/inc/header/mobile-cart.php" ?>
                </div>
            </div>
        </div>
    </div>

    <!-- header desktop -->
    <div class="header-top d-xs-none">
        <div class="margin-0 row">

            <!-- menu -->
            <!--<div class="d-flex icon-menu align-items-center justify-content-center">
                <a href="#">
                    <i class="fa fa-bars" aria-hidden="true" id="icon-menu"></i>
                </a>
            </div> -->
            <!-- logo -->
            <div class="d-flex align-items-center  flex-2">
                <?php require_once "./mvc/views/inc/header/logo.php" ?>
            </div>
            <div class="d-flex align-items-center justify-content-center navbar-expand-md main-menu">
                <?php require_once "./mvc/views/inc/header/desktop_menu.php" ?>
            </div>
            <!-- search and acount -->
            <div class="d-flex align-items-center justify-content-end" id="search_widget">
                <div class="d-flex align-items-center justify-content-center search-header-top">
                    <i class="fa fa-search search"></i>
                </div>
                <div id="block_myaccount_infos" class="hidden-sm-down dropdown d-flex align-items-center justify-content-center">
                    <div class="myaccount-title">
                        <a href="#acount" data-toggle="collapse" class="acount">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div id="acount" class="collapse">
                        <?php require_once "./mvc/views/inc/header/account.php" ?>
                    </div>
                </div>
                <div class="desktop_cart align-items-center d-flex">
                    <div class="blockcart block-cart cart-preview tiva-toggle">
                        <div class="header-cart tiva-toggle-btn">
                            <span class="cart-products-count"><?=isset($_SESSION['cart'])?count($_SESSION['cart']):0?></span>
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <div style="position: relative; right: -200px">
                        <?php require_once "./mvc/views/inc/header/desktop-cart.php" ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>