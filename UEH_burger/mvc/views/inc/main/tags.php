<div class="sidebar-block product-tags">
    <div class="title-block">
        Thẻ liên quan (tags)
    </div>
    <div class="block-content">
        <ul class="listSidebarBlog list-unstyled">

            <?php foreach ($data['tags'] as $tag) { ?>
                <li>
                    <a href="<?=BASE_URL?>/tim-kiem/<?=$tag?>" title="Show products matching tag <?=$tag?>" ><?=$tag?></a>
                </li>
            <?php }?>

        </ul>
    </div>
</div>