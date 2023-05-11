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
    <script src="/WebBanGiay_PTTKHTTT/public/js/<?php echo $data['js']?>.js"></script>
</head>
<body>
<div id="header">
        <nav class="navbar navbar-inverse" style="background-color: #fff; margin: 0; border: none;">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand navbar-brand-config" href="#" style="height: auto; padding: 0;">
                        <img class="img-circle" src="./public/img/logo/logoShop.png" style="width: 70px; margin-top: 10px;"></img>
                    </a>
                </div>
                <div style="margin: 20px;display: inline-block;">
                    <h2 style="margin: 0;">SneakerShop</h2>
                    <small>You're King In Your Way.!!!</small>
                </div>
                <div class="nav navbar-nav navbar-right" style="margin-top: 25px;">
                    <a href="./Home"><i class="fas fa-chevron-left"></i> Trang chủ</a>
                    <a href="" style="margin-left: 20px;">Bạn cần giúp đỡ?</a>
                </div>
            </div>
        </nav>
    </div>
    <div id="content">
    <?php
        require_once "./mvc/views/pages/".$data['page'].".php";
    ?>
    </div>
    <div id="footer" style="background-color: whitesmoke; color: #000;">
        <div class="container-fluid" style="margin: 0 170px;">
            <div class="row" style="margin: 20px 0;">
                <div class="col-md-3">
                    <h5 style="font-weight: bold;">Chăm sóc khách hàng</h5>
                    <p><a href="#">Trung Tâm Trợ Giúp</a></p>
                    <p><a href="#">Sneaker Blog</a></p>
                    <p><a href="#">Sneaker Mail</a></p>
                    <p><a href="#">Hướng Dẫn Mua Hàng</a></p>
                    <p><a href="#">Hướng Dẫn Bán Hàng</a></p>
                    <p><a href="#">Thanh Toán</a></p>
                    <p><a href="#">Vận Chuyển</a></p>
                    <p><a href="#">Trả Hàng & Hoàn Tiền</a></p>
                    <p><a href="#">Chính Sách Bảo Hành</a></p>
                </div>
                <div class="col-md-3">
                    <h5 style="font-weight: bold;">Về Chúng Tôi</h5>
                    <p><a href="">Giới Thiệu</a></p>
                    <p><a href="">Tuyển Dụng</a></p>
                    <p><a href="">Điều Khoản</a></p>
                    <p><a href="">Chính Sách Bảo Mật</a></p>
                    <p><a href="">Chính Hãng</a></p>
                    <p><a href="">Flash Sales</a></p>
                    <p><a href="">Liên Hệ Với Truyền Thông</a></p>
                </div>
                <div class="col-md-3">
                    <h5 style="font-weight: bold;">Thanh Toán</h5>
                    <a href="#"><img src="./public/img/pay/momo.png" alt="" style="width: 40px; margin: 5px;"></a>
                    <a href="#"><img src="./public/img/pay/moca.jpg" alt="" style="width: 40px; margin: 5px;"></a>
                    <a href="#"><img src="./public/img/pay/jcb.png" alt="" style="width: 40px; margin: 5px;"></a>
                    <a href="#"><img src="./public/img/pay/cash.png" alt="" style="width: 40px; margin: 5px;"></a>
                    <a href="#"><img src="./public/img/pay/onepay.png" alt="" style="width: 40px; margin: 5px;"></a>
                    <a href="#"><img src="./public/img/pay/payoo.png" alt="" style="width: 40px; margin: 5px;"></a>
                    <a href="#"><img src="./public/img/pay/tragop.png" alt="" style="width: 40px; margin: 5px;"></a>
                    <a href="#"><img src="./public/img/pay/visa.png" alt="" style="width: 40px; margin: 5px;"></a>
                    <h5 style="font-weight: bold;">Vận Chuyển</h5>
                    <a href="#"><img src="./public/img/transport/1.png" alt="" style="width: 45px; margin: 3px;"></a>
                    <a href="#"><img src="./public/img/transport/2.jpg" alt="" style="width: 45px; margin: 3px;"></a>
                    <a href="#"><img src="./public/img/transport/3.png" alt="" style="width: 45px; margin: 3px;"></a>
                    <a href="#"><img src="./public/img/transport/4.png" alt="" style="width: 45px; margin: 3px;"></a>
                    <a href="#"><img src="./public/img/transport/5.png" alt="" style="width: 45px; margin: 3px;"></a>
                    <a href="#"><img src="./public/img/transport/6.png" alt="" style="width: 45px; margin: 3px;"></a>
                    <a href="#"><img src="./public/img/transport/7.png" alt="" style="width: 45px; margin: 3px;"></a>
                    <a href="#"><img src="./public/img/transport/8.png" alt="" style="width: 45px; margin: 3px;"></a>
                </div>
                <div class="col-md-3">
                    <h5 style="font-weight: bold;">Theo Dõi Chúng Tôi Trên</h5>
                    <p><i class="fab fa-facebook-square"></i> <a href="#"> FaceBook</a></p>
                    <p><i class="fab fa-instagram-square"></i><a href="#"> Instagram</a></p>
                    <p><i class="fab fa-linkedin"></i><a href="#"> Linkedin</a></p>
                </div>
            </div>
            <hr style="width: 80%; border-color: #ccc;">
            <div style="text-align: center;"><small>©All rights reserved. Thiết kế website <mark>SneakerShop</mark></small>
            </div>
        </div>
    </div>
</body>
</html>