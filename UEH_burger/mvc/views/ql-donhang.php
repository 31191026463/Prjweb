<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Quản lí đơn hàng</title>
    <link rel="icon" href="<?= STATIC_URL ?>img/home/logo-icon.png">
    <link rel="shortcut icon" href="<?= STATIC_URL ?>img/home/logo-icon.ico">
</head>
<body>
  <?php require_once "./mvc/views/inc/ql-header.php" ?>
    <div class="container">
        <h3>Quản lí đơn hàng</h3>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Sản phẩm quan tâm</th>
                <th scope="col">Ngày đặt</th>
                <th scope="col">Thao tác</th>
              </tr>
            </thead>
            <tbody>
             
              <?php foreach ($data['orders'] as $key=>$order) {?>
              <tr>
                <th scope="row"><?=$key+1?></th>
                <td><?=$order['name']?></td>
                <td><?=$order['phone_number']?></td>
                <td><?=$order['address']?></td>
                <td><?=$order['order_detail']?></td>
                <td><?=$order['date_created']?></td>
                <td>
                   
                    <button 
                      id="<?= $order['id'] ?>" 
                      type="button" 
                      class="btn btn-danger" 
                      data-bs-toggle="modal" 
                      data-bs-target="#addUserModal" 
                      data-val="<?= $order['id'] ?>" 
                      data-name="<?= $key+1 ?>" 
                      onclick="
                        document.getElementById('url-sp').value = document.getElementById('<?= $order['id'] ?>').getAttribute('data-val');
                        document.getElementById('to-delete').innerHTML = document.getElementById('<?= $order['id'] ?>').getAttribute('data-name');
                        ">
                        Xóa
                    </button>
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