<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?=BASE_URL?>">Trang chủ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav w-100">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?=BASE_URL?>quan-li/quan-li-san-pham">Quản lí sản phẩm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?=BASE_URL?>quan-li/quan-li-danh-muc">Quản lí danh mục</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?=BASE_URL?>quan-li/quan-li-don-hang">Quản lí đơn hàng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?=BASE_URL?>quan-li/quan-li-anh">Quản lí ảnh</a>
            </li>
          </ul>
          <div class="d-flex flex-row-reverse w-100">   
            <a class="btn btn-danger" aria-current="page" href="<?=BASE_URL.'logout'?>">Đăng xuất</a>
        </div>
      </div>
        </div>
      </div>
    </nav>
</header>