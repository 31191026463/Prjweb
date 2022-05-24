<div class="account-list-content">
    <?php if (!isLoggedIn()) { ?>
        <div>
            <a class="login" href="<?= BASE_URL ?>login" rel="nofollow" title="Đăng nhập vào tài khoản">
                <i class="fa fa-sign-in"></i>
                <span>Đăng nhập</span>
            </a>
        </div>
        <div>
            <a class="register" href="<?= BASE_URL ?>signup" rel="nofollow" title="Đăng kí">
                <i class="fa fa-user"></i>
                <span>Đăng kí</span>
            </a>
        </div>
    <?php } ?>
    <?php if (isAdmin()) { ?>
        <div>
            <a class="register" href="<?= BASE_URL ?>quan-li/" rel="nofollow" title="Quản lí">
                <i class="fa fa-bars "></i>
                <span>Quản lí</span>
            </a>
        </div>
    <?php } ?>
    <?php if (isLoggedIn()) { ?>
        <div>
            <a class="login" href="<?= BASE_URL ?>tai-khoan" rel="nofollow" title="Tài khoản của tôi">
                <i class="fa fa-cog"></i>
                <span>Tài khoản của tôi</span>
            </a>
        </div>
        <div>
            <a class="login" href="<?= BASE_URL ?>logout" rel="nofollow" title="Đăng xuất khỏi tải khoản">
                <i class="fa fa-sign-out"></i>
                <span>Đăng xuất</span>
            </a>
        </div>
    <?php } ?>
</div>