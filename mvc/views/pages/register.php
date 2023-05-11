<?
    $flag = true;
    if (isset($_GET['dangky'])) { 
        if (!empty($data['account'])) {
            foreach ($data['account'] as $account) {
                if ($account['TenTK'] == $_GET['username']) {
                    $flag = false;
                    break;
                }
            }
        }
        if ($flag) {
            $username = $_GET['username'];
            $password = $_GET['password'];
            $name = $_GET['name'];
            $address = $_GET['address'];
            $phonenum = $_GET['phonenum'];
            $email = $_GET['email'];
            require_once "./mvc/models/account.php";
            $account = new account();
            $account->createAccountKH($name, $address, $phonenum, $email, $username, $password);
        }
    }
?>
<div class="container-fluid" style="height: 600px; background-image: linear-gradient(to right top,rgba(0,0,0,0.8) 85%,rgba(75, 70, 70, 0.411)), url(/WebBanGiay_PTTKHTTT/public/img/LogIn/LoginBackground.jpg); background-size: cover;background-position: center;background-attachment: fixed;">
    <div class="container row">
        <div class="col-md-6"></div>
        <div class="col-md-6" style="margin-left: 600px; margin-top: 50px; width: 700px; background-color: #ffffff;  box-shadow: 0px 0px 1px #ccc; border-radius: 5px;">
            <h1 style="margin: 30px;">Đăng Ký</h1>
            <form  style="margin: 15px;" class="row" name="register" id="registerForm">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" required placeholder="Họ tên">
                    </div>
                    <div class="form-group">
                        <input type="number" name="phonenum" class="form-control" id="phonenum" required placeholder="Số điện thoại">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="email" required placeholder="Email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" id="address" required placeholder="Địa chỉ">
                    </div>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" id="username" required placeholder="Tài khoản">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password" required placeholder="Mật khẩu">
                    </div>
                </div>
                <?php
                    if(isset($flag) && !$flag) {
                        echo "<small style='color: red;margin-left:20px'>Tên Tài Khoản Đã Tồn Tại!</small>";
                    }
                ?>
                <button type="button" name="dangky" id="dangky" class="btn btn-default" style="width: 100%; margin-top: 15px; background-color: #e74c3c; color: #fff;">ĐĂNG KÝ</button>
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
                <div style="margin: 10px auto;text-align: center; width: 300px;">
                    <small>Bằng việc đăng kí, bạn đã đồng ý với SneakerShop về
                        <a href=""><mark>Điều khoản dịch vụ</mark></a> &
                        <a href=""><mark>Chính sách bảo mật</mark></a>
                    </small>
                </div>
                <div style="margin-top: 30px;text-align: center;">
                    <small>Bạn đã có tài khoản? <a href="./LogIn"><mark>Đăng nhập</mark></a></small>
                </div>
            </form>
        </div>
    </div>
</div>