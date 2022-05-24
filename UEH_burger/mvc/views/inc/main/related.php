<div class="related">
    <div class="title-tab-content  text-center">
        <div class="title-product justify-content-start">
            <h2>Món ăn liên quan</h2>
        </div>
    </div>
    <div class="tab-content">
        <div class="row">

            <?php foreach ($data['lienquan'] as $sp) { ?>
                <div class="item text-center col-md-4 card border-0">
                    <div class="product-miniature js-product-miniature item-one first-item">
                        <div class="thumbnail-container border border">
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
                            <div class="product-buttons d-flex justify-content-center">
                                <form action="<?=BASE_URL?>san-pham/<?=$sp['url']?>" method="post" class="formAddToCart">
                                <input type="hidden" name='url' value='<?=$sp['url']?>'>
                                                                                        <input type="hidden" name='name' value='<?=$sp['name']?>'>
                                                                                        <input type="hidden" name='price' value='<?=$sp['price']?>'>
                                                                                        <input type="hidden" name='image' value='<?=$images[0]?>'>    
                                <button class="add-to-cart" type="submit" data-button-action="add-to-cart">
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
</div>