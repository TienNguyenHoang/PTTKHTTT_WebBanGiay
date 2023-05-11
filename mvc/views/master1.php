<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneaker Shop</title>
    <link rel="icon" type="image/x-icon" href="./public/img/logo/logoShop.png">
    <script src="https://kit.fontawesome.com/1381aa78a9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="/WebBanGiay_PTTKHTTT/public/js/main.js"></script>
    <link rel="stylesheet" href="/WebBanGiay_PTTKHTTT//public//css//style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div id="header">
        <?php require_once "./mvc/views/blocks/header.php"; ?>
    </div>
    <div class="modal fade" id="myProfile_modal" role="dialog" style="z-index:100000">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Hồ Sơ Của Tôi</h4>
                    <small>Quản lý thông tin hồ sơ để bảo mật tài khoản</small>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8" style="border-right:1px solid #ccc">
                            <div class="form-input" style="margin: 10px 0;">
                                <label for="">Tên đăng nhập</label>
                                <input type="text" value="<?php echo $_SESSION['account']['username']?>" class="form-control" readonly>
                            </div>
                            <div class="form-input" style="margin: 10px 0;">
                                <label for="">Họ tên</label>
                                <input type="text" value="<?php echo $_SESSION['account']['tenkh']?>" class="form-control">
                            </div>
                            <div class="form-input" style="margin: 10px 0;">
                                <label for="">Email</label>
                                <input type="text" value="<?php echo $_SESSION['account']['email']?>" class="form-control" >
                            </div>
                            <div class="form-input" style="margin: 10px 0;">
                                <label for="">Số điện thoại</label>
                                <input type="text" value="<?php echo $_SESSION['account']['sdt']?>" class="form-control">
                            </div>
                            <div class="form-input" style="margin: 10px 0;">
                                <label for="">Địa chỉ</label>
                                <input type="text" value="<?php echo $_SESSION['account']['diachi']?>" class="form-control">
                            </div>
                            <button class="btn btn-danger" style="padding: 10px;margin-top:10px;">Lưu</button>
                        </div>
                        <div class="col-md-4" style="text-align: center;">
                            <img src="/WebBanGiay_PTTKHTTT/public/img/avatar/avatarCustomer.jpg" alt="" style="width:100%;" class="img">
                            <button class="btn btn-default" style="padding: 10px;display:block;margin-left: 40px;">Chọn Ảnh</button>
                            <small>Dung lượng file tối đa 1 MB Định dạng:..JPEG,.PNG</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <?php require_once "./mvc/views/pages/" . $data['page'] . ".php"; ?>
    </div>
    <div id="footer" style="color: #fff;background-color: #000">
        <?php require_once "./mvc/views/blocks/footer.php"; ?>
    </div>
</body>

</html>