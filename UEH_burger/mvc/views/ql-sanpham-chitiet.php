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

  <title>Chi tiết sản phẩm</title>
</head>

<body>
  <?php require_once "./mvc/views/inc/ql-header.php" ?>


  <main class="container">
    <?php
      $sp = $data['sanpham'][0];
      $cate = $data['sanpham'][1];
    ?>
    <h3 class="mt-5 pt-5"><?= ucfirst($sp['name']) ?></h3>
    <a class="btn btn-primary" href="<?= BASE_URL ?>quan-li/quan-li-san-pham/chinh-sua/<?= $sp['url'] ?>">Chỉnh sửa</a>
    <table class="table border ">
      <thead>
        <tr>
          <th scope="col">Thuộc tính</th>
          <th scope="col">Giá trị</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Tên</th>
          <td><?= ucfirst($sp['name']) ?></td>
        </tr>
        <tr>
          <th scope="row">Giá</th>
          <td><?= number_format($sp['price']) ?> đ</td>
        </tr>
        <tr>
          <th scope="row">Ngày thêm</th>
          <td><?= date_format(date_create($sp['date_created']), "d/m/Y") ?></td>
        </tr>
        <tr>
          <th scope="row">Lượt xem</th>
          <td><?= $sp['view_count'] ?></td>
        </tr>
        <tr>
          <th scope="row">Ảnh</th>
          <td style="display: flex">
            <?php $images = explode(',', $sp['images']);
            foreach ($images as $image) {
            ?>
              <div style="display: block; margin-left: 20px">
                <img src="<?= $image ?>" alt="thumbn" style='display: block; width:200px'>
                <a href="<?= $image ?>" style='display: block'><?= $image ?></a>
              </div>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <?php $descriptionList = explode(PHP_EOL, $sp['description']) ?>
          <th scope="row">Mô tả</th>
          <td>
            <?php foreach ($descriptionList as $paragraph) { ?>
              <p>
                <?= $paragraph ?>
              </p>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <th scope="row">Danh mục</th>
          <td>
            <?php foreach ($cate as $key => $cat) {
              if ($key == count($cate) - 1) {
                echo $cat['name'];
              } else echo $cat['name'] . ', ';
            } ?>
          </td>
        </tr>
        <tr>
          <th scope="row">Tags</th>
          <td><?= $sp['tag'] ?></td>
        </tr>
      </tbody>
    </table>
  </main>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>