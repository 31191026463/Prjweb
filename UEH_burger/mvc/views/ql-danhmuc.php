<!doctype html>
<html lang="vi">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Quản lí danh mục</title>
    <link rel="icon" href="<?= STATIC_URL ?>img/home/logo-icon.png">
    <link rel="shortcut icon" href="<?= STATIC_URL ?>img/home/logo-icon.ico">
</head>

<body>
    <?php require_once "./mvc/views/inc/ql-header.php" ?>


    <main class="container">
        <h3 class="mt-5">Các Danh mục món ăn</h3>
        <!-- Modal button -->
        <div class="py-4 text-center">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">Thêm
                danh mục mới</button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Số tt</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Thao tác</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['allDM'] as $key => $cate) { ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= ucfirst($cate['name']) ?></td>
                        <td>
                            <?php $images = explode(',', $cate['image']);
                            foreach ($images as $image) {
                            ?>
                                <div style="display: block; margin-left: 20px">
                                    <img src="<?= $image ?>" alt="thumbn" style='display: block; width:200px'>
                                    <a href="<?= $image ?>" style='display: block'><?= $image ?></a>
                                </div>
                            <?php } ?>
                        </td>
                        <td>
                        <button 
                            id="<?= $cate['url'] . $key ?>" 
                            type="button" 
                            class="btn btn-primary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#editModal"
                             data-val="<?= $cate['url'] ?>" 
                             data-name="<?= $cate['name'] ?>" 
                             data-img="<?= $cate['image'] ?>"
                             onclick="
                                document.getElementById('url-sua').value = document.getElementById('<?= $cate['url'] . $key ?>').getAttribute('data-val');
                                document.getElementById('name-sua').value = document.getElementById('<?= $cate['url'] . $key ?>').getAttribute('data-name');
                                document.getElementById('image-sua').value = document.getElementById('<?= $cate['url'] . $key ?>').getAttribute('data-img');
                                ">
                                Sửa
                            </button>
                            <button id="<?= $cate['url'] . $key ?>" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addUserModal" data-val="<?= $cate['url'] ?>" data-name="<?= $cate['name'] ?>" onclick="
                                document.getElementById('url-sp').value = document.getElementById('<?= $cate['url'] . $key ?>').getAttribute('data-val');
                                document.getElementById('to-delete').innerHTML = document.getElementById('<?= $cate['url'] . $key ?>').getAttribute('data-name');
                                ">
                                Xóa
                            </button>
                        </td>

                    </tr>
                <?php } ?>

            </tbody>
        </table>

        <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form class="modal-content" method="post" action="#">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addUserModalLabel">Xóa danh mục</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body col-10 mx-auto">
                        <span>Bạn có chắc chắn muốn xóa danh mục "</span><span id='to-delete'></span><span>"?</span>

                        <input type="hidden" id="url-sp" name="url">
                        <input type="hidden" id="act" name="action" value="remove">

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">OK</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>

    </main>


    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" method="POST" action="<?=BASE_URL?>quan-li/quan-li-danh-muc/">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Thêm danh mục</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body col-10 mx-auto">

                    <!-- Form field -->
                    <div class="form-group py-2">
                        <label for="name">Tên</label>
                        <input required type="text" class="form-control" id="name" name="name" placeholder="Điền tên danh mục">
                    </div>
                    <div class="form-group py-2">
                        <label for="image">Ảnh</label>
                        <input required type="text" class="form-control" id="image" name="image" placeholder="Điền link ảnh">
                    </div>
                    <input type="hidden" name="action" value="add">
                    <p>Lưu ý: Chỉ thêm duy nhất 1 ảnh</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">OK</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Sua danh muc -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" method="POST" action="<?=BASE_URL?>quan-li/quan-li-danh-muc/">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Sửa danh mục</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body col-10 mx-auto">

                    <!-- Form field -->
                    <div class="form-group py-2">
                        <label for="name">Tên</label>
                        <input required type="text" class="form-control" id="name-sua" name="name" placeholder="Điền tên danh mục" value="">
                    </div>
                    <div class="form-group py-2">
                        <label for="image">Ảnh</label>
                        <input required type="text" class="form-control" id="image-sua" name="image" placeholder="Điền link ảnh" value="">
                    </div>
                    <input type="hidden" name="action" value="edit">
                    <input type="hidden" id='url-sua' name="url" value="">
                    <p>Lưu ý: Chỉ thêm duy nhất 1 ảnh</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">OK</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>