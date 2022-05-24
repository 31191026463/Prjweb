<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Quản lí ảnh</title>
    <link rel="icon" href="<?= STATIC_URL ?>img/home/logo-icon.png">
    <link rel="shortcut icon" href="<?= STATIC_URL ?>img/home/logo-icon.ico">
</head>

<body>
    <?php require_once "./mvc/views/inc/ql-header.php" ?>
    <div class="container">
        <h3 class="mt-3">Upload ảnh</h3>
        <form action="<?= BASE_URL ?>quan-li/quan-li-anh" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Chọn ảnh để upload:</label>
                <input required style="width: 300px" type="file" class="form-control" name="fileToUpload" id="fileToUpload" placeholder="Chọn ảnh">

            </div>

            <button type="submit" class="btn btn-primary mt-3">Tải ảnh lên</button>
        </form>
        <h3 class='mt-3'>Tất cả ảnh</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Link</th>
     
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['images'] as $key=>$image) { ?>
                <tr>
                    <th scope="row"><?=$image['id']?></th>
                    <td>
                        <img style="height: 200px" src='<?=$image['link']?>' alt='thumbnail'>
                        <a href='<?=$image['link']?>'><?=$image['link']?></a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" method="post" action="#">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Xóa đơn hàng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body col-10 mx-auto">
                    <span>Bạn có chắc chắn muốn xóa đơn hàng "</span><span id='to-delete'></span><span>"?</span>

                    <input type="hidden" id="url-sp" name="id">
                    <input type="hidden" id="act" name="action" value="remove">

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