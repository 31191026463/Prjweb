<?php require_once './mvc/helper/authorization.php';?>
<!-- menu mobie right -->
<div id="mobile-pagemenu" class="mobile-boxpage d-flex hidden-md-up active d-md-none" style="width: 100vw">
    <div class="content-boxpage col">
        <div class="box-header d-flex justify-content-between align-items-center">
            <div class="title-box">Menu</div>
            <div class="close-box">Close</div>
        </div>
        <div class="box-content">
            <nav>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div id="megamenu" class="clearfix">
                    <ul class="menu level1">
                        <li class="item home-page has-sub">
                            
                            <a href="<?=BASE_URL?>" title="Home">
                                <i class="fa fa-home" aria-hidden="true"></i>Trang chủ</a>

                        </li>
                        <li class="item group has-sub">
                            <span class="arrow collapsed" data-toggle="collapse" data-target="#page" aria-expanded="false" role="status">
                                <i class="zmdi zmdi-minus"></i>
                                <i class="zmdi zmdi-plus"></i>
                            </span>
                            <a href="<?=BASE_URL?>san-pham/tat-ca-san-pham" title="Page">
                                <i class="fa fa-file-text-o" aria-hidden="true"></i>Thực đơn</a>
                            <div class="subCategory collapse" id="page" aria-expanded="true" role="status">
                                <ul class="group-page">
                                    <li class="item container group">
                                        <div>
                                            <ul>
                                                <li class="item col-md-4 ">
                                                    <span class="menu-title">Danh mục món ăn</span>
                                                    <div class="menu-content">
                                                        <ul class="col">
                                                            <li>
                                                                <a href="<?=BASE_URL?>san-pham/tat-ca-san-pham">Tất cả món ăn</a>
                                                            </li>

                                                            <?php foreach ($data['categories'] as $cate) {?>
                                                                <li>
                                                                    <a href="<?=BASE_URL.'danh-muc/'.$cate['url']?>"><?=ucfirst($cate['name'])?></a>
                                                                </li>
                                                            <?php }?>
                                                        
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="item col-md-4 html">
                                                    <span class="menu-title">Bộ lọc</span>
                                                    <div class="menu-content">
                                                        <ul>
                                                            <li>
                                                                <a href="<?=BASE_URL?>san-pham/bo-loc/moi-nhat">Món ăn mới nhất</a>
                                                            </li>
                                                            <li>
                                                                <a href="<?=BASE_URL?>san-pham/bo-loc/ban-chay-nhat">Món ăn bán chạy</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                              
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="item has-sub">
                
                            <a href="#" title="Blog">
                                <i class="fa fa-address-book" aria-hidden="true"></i>Blog</a>
                        </li>
                        <li class="item has-sub">
                            <a href="<?=BASE_URL?>lien-he" title="Contact us">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>Liên hệ</a>
                        </li>
                        <li class="item has-sub">
                            Người dùng
                        </li>
                        <?php if (!isLoggedIn()) { ?>
                            <li class="item has-sub">
                                <a href="<?=BASE_URL?>login" title="Đăng nhập">
                                    <i class="fa fa-sign-in" aria-hidden="true"></i>Đăng nhập</a>
                            </li>
                            <li class="item has-sub">
                                <a href="<?=BASE_URL?>signup" title="Đăng kí">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i>Đăng kí</a>
                            </li>
                        <?php } if (isAdmin()) {?>

                            <li class="item has-sub">
                                <a href="<?=BASE_URL?>quan-li" title="Quản lí">
                                    <i class="fa fa-bars " aria-hidden="true"></i>Quản lí</a>
                            </li>
                        <?php } if (isLoggedIn()) { ?>
                            <li class="item has-sub">
                                <a href="<?=BASE_URL?>tai-khoan" title="Tài khoản">
                                    <i class="fa fa-cog" aria-hidden="true"></i>Tài khoản của tôi</a>
                            </li>
                            <li class="item has-sub">
                                <a href="<?=BASE_URL?>logout" title="Đăng xuât">
                                    <i class="fa fa-sign-in" aria-hidden="true"></i>Đăng xuất</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>