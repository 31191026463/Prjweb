<div class="menu navbar collapse navbar-collapse d-flex align-items-center justify-content-center">
    <ul class="menu-top navbar-nav">
        <li <?=$data['view']==0?'class="nav-link"':''?> >
            <a href="<?=BASE_URL?>" class="parent">Trang chủ</a>
        </li>
        <li style="display: none">
            <a href="#" class="parent">Blog</a>
        </li>
        <li <?=$data['view']==2?'class="nav-link"':''?> >
            <a href="<?=BASE_URL.'san-pham/tat-ca-san-pham'?>" class="parent">Thực đơn</a>
            <div class="dropdown-menu drop-tab">
                <ul>
                    <li class="item container group">
                        <div class="dropdown-menu dropdown-tab" style="width: 500px;">
                            <ul>
                                <li class="item col-md-6 float-left">
                                    <span class="menu-title">Danh mục món ăn</span>
                                    <div class="menu-content">
                                        <ul class="col">
                                            <li>
                                                <a href="<?=BASE_URL.'san-pham/tat-ca-san-pham'?>">Tất cả món ăn</a>
                                            </li>
                                            <?php foreach ($data['categories'] as $cate) {?>
                                                <li>
                                                    <a href="<?=BASE_URL.'danh-muc/'.$cate['url']?>"><?=ucfirst($cate['name'])?></a>
                                                </li>
                                            <?php }?>
                                          
                                        </ul>
                                    </div>
                                </li>
                                <li class="item col-md-6 html float-left">
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
        <li <?=$data['view']==1?'class="nav-link"':''?>>
            <a href="#" class="parent">Blog</a>
        </li>
        <li <?=$data['view']==3?'class="nav-link"':''?> >
            <a href="<?=BASE_URL.'lien-he'?>" class="parent">Liên hệ</a>
        </li>
    </ul>
</div>