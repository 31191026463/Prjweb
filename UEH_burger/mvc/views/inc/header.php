<?php require_once './mvc/helper/authorization.php';?>
<header>
        <!-- header left mobie -->
        <div class="header-mobile d-md-none">
            <div class="mobile hidden-md-up text-xs-center d-flex align-items-center justify-content-around">

                <!-- menu left -->
                <div id="mobile_mainmenu" class="item-mobile-top">
                </div>

                <!-- logo -->
                <div class="mobile-logo">
                    <a href="<?=BASE_URL?>">
                        <img class="logo-mobile img-fluid" src="<?=STATIC_URL?>img/home/logo-mobie.png" alt="Noi that gia vuong logo">
                    </a>
                </div>

                <!-- menu right -->
                <div class="mobile-menutop" data-target="#mobile-pagemenu">
                    <i class="zmdi zmdi-more"></i>
                </div>
            </div>

            <!-- search -->
            <div id="mobile_search" class="d-flex" onkeydown="return event.key != 'Enter';">
                <div id="mobile_search_content">
                    <form method="get" action="#">

                        <input type="text" id="saerch" value="" placeholder="Tìm kiếm">
                        <button type="button" onclick="window.location.href='<?= BASE_URL ?>tim-kiem/'+document.getElementById('saerch').value">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="desktop_cart">
                    <div class="blockcart block-cart cart-preview tiva-toggle">
                        <div class="header-cart tiva-toggle-btn">
                            <span class="cart-products-count"><?php if (isset($_SESSION['cart'])) {echo count($_SESSION['cart']);} else echo 0;?></span>
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <?php require_once "./mvc/views/inc/header/mobile-cart.php"?>
                    </div>
                </div>
            </div>
        </div>

        <!-- header desktop -->
        <div class="header-top d-xs-none " >
            <div class="container">
                <div class="row">
                    <!-- logo -->
                    <div class="col-sm-2 col-md-2 d-flex align-items-center">
                        <?php require_once "./mvc/views/inc/header/logo.php"?>
                    </div>

                    <!-- menu -->
                    <div class="col-sm-5 col-md-5 align-items-center justify-content-center navbar-expand-md main-menu">
                        <?php require_once "./mvc/views/inc/header/desktop_menu.php"?>
                    </div>

                    <!-- search and acount -->
                    <div class="col-sm-5 col-md-5 d-flex align-items-center justify-content-end" id="search_widget">
                        <form method="get" action="#" onkeydown="return event.key != 'Enter';">

                            <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                            <input type="text" id="searck" value="" placeholder="Tìm kiếm" class="ui-autocomplete-input" autocomplete="off">
                            <button type="button" onclick="window.location.href='<?= BASE_URL ?>tim-kiem/'+document.getElementById('searck').value">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>

                        <div id="block_myaccount_infos" class="hidden-sm-down dropdown">
                            <div class="myaccount-title ">
                                <a href="#acount" data-toggle="collapse" class="acount">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span><?=isset($_SESSION['username'])?$_SESSION['username']:'Tài khoản'?></span>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>

                            </div>

                            <div id="acount" class="collapse">

                                <?php require_once "./mvc/views/inc/header/account.php"?>
                            </div>
                        </div>
                        <div class="desktop_cart">
                            <div class="blockcart block-cart cart-preview tiva-toggle">
                                <div class="header-cart tiva-toggle-btn">
                                    <span class="cart-products-count"><?=isset($_SESSION['cart'])?count($_SESSION['cart']):0?></span>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </div>
                                <?php require_once "./mvc/views/inc/header/desktop-cart.php"?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>