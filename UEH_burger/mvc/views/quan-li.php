<!doctype html>
<html lang="vi">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?= STATIC_URL ?>img/home/logo-icon.png">
  <link rel="shortcut icon" href="<?= STATIC_URL ?>img/home/logo-icon.ico">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Quản lí</title>
</head>

<body>
  <?php require_once "./mvc/views/inc/ql-header.php" ?>


  <main class="container">
    <h3 class="mt-5">Trang quản lí</h3>

    <div class="py-4 text-center">
      <a class="btn btn-success" href="<?= BASE_URL ?>quan-li/quan-li-san-pham">Quản lí sản phẩm
      </a>
    </div>
    <div class="py-4 text-center">
      <a class="btn btn-success" href="<?= BASE_URL ?>quan-li/quan-li-danh-muc">Quản lí danh mục
      </a>
    </div>
    <div class="py-4 text-center">
      <a class="btn btn-success" href="<?= BASE_URL ?>quan-li/quan-li-don-hang">Quản lí đơn hàng
      </a>
    </div>
    <div class="py-4 text-center">
      <a class="btn btn-success" href="<?= BASE_URL ?>quan-li/quan-li-anh">Upload ảnh
      </a>
    </div>


  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>