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

  <title>Quản lí sản phẩm</title>
</head>

<body>
  <!-- header -->
  <?php require_once "./mvc/views/inc/ql-header.php" ?>

  <main class="container">
    <h3 class="mt-5">Các sản phẩm</h3>
    <!-- Modal button -->
    <div class="py-4 text-center">
      <a class="btn btn-success" href="<?= BASE_URL ?>/quan-li/quan-li-san-pham/them-san-pham/">Thêm sản phẩm
        mới</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Số tt</th>
          <th scope="col">Tên</th>
          <th scope="col">Giá</th>
          <th scope="col">Danh mục</th>
          <th scope="col">Thao tác</th>

        </tr>
      </thead>
      <tbody>

        <?php foreach ($data['allSP'] as $key => $sp) { ?>
          <tr>
            <td><?= $key + 1 ?></td>
            <td><?= ucfirst($sp['name']) ?></td>
            <td><?= number_format($sp['price']) . ' đ' ?></td>
            <td>
              <?php foreach ($sp['categories'] as $catkey => $cate) {
                if ($catkey == count($sp['categories']) - 1)
                  echo $cate['name'];
                else
                  echo $cate['name'] . ', ';
              } ?>


            </td>
            <td>
              <a class="btn btn-primary" href="<?= BASE_URL ?>quan-li/quan-li-san-pham/chi-tiet/<?= $sp['url'] ?>">Xem</a>
              <button 
                id="<?=$sp['url'].$key?>"
                type="button" 
                class="btn btn-danger" 
                data-bs-toggle="modal" 
                data-bs-target="#addUserModal" 
                data-val="<?=$sp['url']?>"
                data-name="<?=$sp['name']?>"
                onclick="
                  document.getElementById('url-sp').value = document.getElementById('<?=$sp['url'].$key?>').getAttribute('data-val');
                  document.getElementById('to-delete').innerHTML = document.getElementById('<?=$sp['url'].$key?>').getAttribute('data-name');
                "
              >
                Xóa
              </button>
            </td>

          </tr>
        <?php } ?>


      </tbody>
    </table>

    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <form class="modal-content" method="post" action="<?=BASE_URL?>quan-li/quan-li-san-pham">
          <div class="modal-header">
            <h5 class="modal-title" id="addUserModalLabel">Xóa sản phẩm</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body col-10 mx-auto">
              <span>Bạn có chắc chắn muốn xóa sản phẩm "</span><span id='to-delete'></span><span>"?</span>
            
            <input type="hidden" id="url-sp" name="url">

          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">OK</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>

  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>