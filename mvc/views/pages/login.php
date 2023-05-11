<?
    if (isset($_GET['dangnhap'])) {
        $flag = false;
        if (!empty($data['account'])) {
            $username = $_GET['username'];
            $password = $_GET['password'];
            require_once "./mvc/models/account.php";
            $account = new account();
            $account->login($username,$password);
        }
    }
?>
<div class="container-fluid" style="height: 600px; background-image: linear-gradient(to right top,rgba(0,0,0,0.8) 85%,rgba(75, 70, 70, 0.411)), url(/WebBanGiay_PTTKHTTT/public/img/LogIn/LoginBackground.jpg); background-size: cover;background-position: center;background-attachment: fixed;">
            <div class="container">
                <div class="col-md-6"></div>
                <div class="col-md-6" style="margin-top: 50px; width: 400px; background-color: #ffffff;  box-shadow: 0px 0px 1px #ccc; border-radius: 5px;">
                    <h1 style="margin: 30px;">Đăng Nhập</h1>
                    <form style="margin: 15px;" name="login" id="loginForm">
                        <div class="form-group">
                            <input type="text" class="form-control" name="usernameDN" id="usernameDN" placeholder="Tên đăng nhập" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="passwordDN" id="passwordDN" placeholder="Mật khẩu" required>
                        </div>
                        <?php
                            if (isset($flag) && !$flag) {
                                echo '<small style="color: red;margin-left:5px">Tài Khoản Không Tồn Tại!</small>';
                            }
                        ?>
                        
                        <button type="button" name="dangnhap" id="dangnhap" class="btn btn-default" style="width: 100%; margin-top: 15px; background-color: #e74c3c; color: #fff;">ĐĂNG NHẬP</button>
                        <div class="row" style="margin-top: 5px;">
                            <small class="col-md-6"><a href="">Quên mật khẩu</a></small>
                            <small class="col-md-5" style="padding-right: 0; text-align: right; margin-left: 12px;"><a href="">Đăng nhập với SMS</a></small>
                        </div>
                        <div class="row" style="margin: 0 2px;">
                            <div class="col-md-5" style="padding: 0;">
                                <hr style="border-color: #ccc; width: 100%;">
                            </div>
                            <div class="col-md-2" style="margin-top: 8px; color: #ccc;padding: 0;text-align: center;">HOẶC</div>
                            <div class="col-md-5" style="padding: 0;">
                                <hr style="border-color: #ccc; width: 100%;">
                            </div>
                        </div>
                        <div class="row" style="margin: 0 2px;">
                            <button class="btn btn-default col-md-5"><i class="fab fa-facebook" style="color: #3a07f2;"></i> Facebook</button>
                            <div class="col-md-2" style="padding: 0;"></div>
                            <button class="btn btn-default col-md-5"><i class="fab fa-google-plus"></i> Google</button>
                        </div>
                        <div style="margin: 20px 0;text-align: center;">
                            <small>Bạn mới biết đến SneakerShop? <a href="./Register"><mark>Đăng ký</mark></a></small>
                        </div>
                    </form>

                </div>
            </div>
        </div>
