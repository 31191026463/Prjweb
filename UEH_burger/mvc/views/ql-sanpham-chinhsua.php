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

    <title>Sửa sản phẩm</title>
</head>

<body>

    <?php require_once "./mvc/views/inc/ql-header.php" ?>


    <main class="container">
        <?php
        $sp = $data['sanpham'][0];
        $cate = $data['sanpham'][1];
        ?>
        <h3 class="mt-5 pt-5">Chỉnh sửa sản phẩm <?= ucfirst($sp['name']) ?></h3>
        <p class="mt-3" style="font-weight: 600"><span style="color: red">Lưu ý: <br></span>+Các đường link của ảnh và các tags được ngăn cách bới dấu phẩy (,).
            Ví dụ:<br>Ảnh:<br>&emsp; https://i.imgur.com/3pZHogY.jpeg, https://i.imgur.com/aw9YYgp.jpeg
            <br>Tags:<br> &emsp; gỗ, tủ, sồi, nhựa
        </p>
        <form method="post" action="<?=BASE_URL?>quan-li/quan-li-san-pham/chinh-sua">
            <table class="table border ">
                <thead>
                    <tr>
                        <th scope="col">Thuộc tính</th>
                        <th scope="col">Giá trị</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            <label for="name" class="form-label">Tên</label>
                        </th>
                        <td>
                            <input required type="text" class="form-control" id="price" name="name" value="<?= $sp['name'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <label for="price" class="form-label">Giá</label>
                        </th>
                        <td>
                            <input required type="number" class="form-control" id="price" name="price" value="<?= $sp['price'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Ngày thêm</th>
                        <td><?= date_format(date_create($sp['date_created']), "d/m/Y") ?></td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <label for="view_count" class="form-label">Lượt xem</label>
                        </th>
                        <td>
                            <input required type="number" class="form-control" id="view_count" name="view_count" value="<?= $sp['view_count'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <label for="images" class="form-label">Ảnh</label>
                        </th>
                        <td>
                            <textarea required class="form-control" id="images" name="images" rows="4"><?= $sp['images'] ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <label for="description" class="form-label">Mô tả</label>
                        </th>
                        <td>
                        <?php $descriptionList = explode(PHP_EOL, $sp['description']) ?>
                            <textarea required class="form-control" id="description" name="description" rows="10"><?php foreach ($descriptionList as $key=>$paragraph) { ?><?php 
                                if ($key == count($descriptionList)-1) echo $paragraph; else echo $paragraph.'&#10;';
                            ?><?php } ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Danh mục</th>
                        <td>
                            <?php $key = 0; foreach ($cate as $cat) {?>
                                <div class="form-check">
                                    <input  class="form-check-input" type="checkbox" name="category-<?=$key?>" value="<?=$cat['url']?>" id="category-<?=$key?>" checked>
                                    <label class="form-check-label" for="category-<?=$key?>">
                                        <?=$cat['name']?>
                                    </label>
                                </div>
                            <?php $key++;}?>
                            <?php foreach ($data['diff-categories'] as $cat) {?>
                                <div class="form-check">
                                    <input  class="form-check-input" type="checkbox" name="category-<?=$key?>" value="<?=$cat['url']?>" id="category-<?=$key?>">
                                    <label class="form-check-label" for="category-<?=$key?>">
                                        <?=$cat['name']?>
                                    </label>
                                </div>
                            <?php $key++;}?>

                            
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <label for="tags" class="form-label">Tags</label>
                        </th>
                        <td>
                            <input required type="text" class="form-control" id="tags" name="tags" value="<?=$sp['tag']?>">
                        </td>
                    </tr>
                </tbody>
            </table>
            <input type="hidden" class="form-control" id="url" name="url" value="<?= $sp['url'] ?>">

            <button type="submit" class="btn btn-success mb-5">Hoàn thành</button>
        </form>
    </main>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>