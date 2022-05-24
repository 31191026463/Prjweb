<div class="sidebar-block">
    <div class="title-block">Danh mục món ăn</div>
    <div class="block-content">

        <?php foreach ($data['categories'] as $cate) {?>

        <div class="cateTitle hasSubCategory open level1">
            <a class="cateItem" href="<?=BASE_URL.'danh-muc/'.$cate['url']?>"><?=ucfirst($cate['name'])?></a>
        </div>
        
        <?php }?>

        
    </div>
</div>