<div class="sidebar-block">
    <div class="title-block">
        Món ăn bán chạy
    </div>
    <div class="product-content tab-content">
        <div class="row">

            <?php foreach ($data['banchay'] as $sp) { ?>
                <div class="item col-md-12 card border-0">
                    <div class="product-miniature item-one first-item d-flex">
                        <div class="thumbnail-container border">
                            <a href="<?= BASE_URL ?>san-pham/<?= $sp['url'] ?>">
                                <?php $images = explode(',', $sp['images']) ?>

                                <img class="img-fluid image-cover" src="<?= $images[0] ?>" alt="img">
                                <?php if (isset($images[1])) { ?>
                                    <img class="img-fluid image-secondary" src="<?= $images[1] ?>" alt="img">
                                <?php } ?>
                            </a>
                        </div>
                        <div class="product-description">
                            <div class="product-groups">
                                <div class="product-title">
                                    <a href="<?= BASE_URL ?>san-pham/<?= $sp['url'] ?>"><?= ucfirst($sp['name']) ?></a>
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
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

</div>