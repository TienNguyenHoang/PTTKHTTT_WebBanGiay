<nav class="navbar navbar-inverse" style="background-color: black; margin: 0;">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand navbar-brand-config" href="#" style="height: auto; padding: 0;">
                <img src="/WebBanGiay_PTTKHTTT/public/img/logo/logoShop.png" style="width: 100px;"></img>
            </a>
        </div>
        <ul class="nav navbar-nav" id="header-list">
            <li id="home"><a href="/WebBanGiay_PTTKHTTT/Home" class="navbar-item">Trang chủ</a></li>
            <li id="introduce"><a href="/WebBanGiay_PTTKHTTT/Introduce" class="navbar-item">Giới thiệu</a></li>
            <li id="products"><a href="/WebBanGiay_PTTKHTTT/Products" class="navbar-item">Sản phẩm</a></li>
            <li id="news"><a href="/WebBanGiay_PTTKHTTT/News" class="navbar-item">Tin tức</a></li>
            <li id="contact"><a href="/WebBanGiay_PTTKHTTT/Contact" class="navbar-item">Liên hệ</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="margin-top: 25px;">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <?php
                    if (isset($_SESSION['account'])) {
                        if ($_SESSION['account']['quyen'] == "Khách Hàng") {
                            echo '<li><a data-toggle="modal" data-target="#myProfile_modal"><i class="fas fa-user"></i>  Tài Khoản Của Tôi</a></li>
                                        <li><a href="/WebBanGiay_PTTKHTTT/LogIn"><i class="fas fa-file-invoice"></i>  Đơn Hàng</a></li>
                                        <li><a href="/WebBanGiay_PTTKHTTT/LogIn/LogOut"><i class="fas fa-sign-out-alt"></i>  Đăng xuất</a></li>';
                        } else {
                            echo '<li><a href="/WebBanGiay_PTTKHTTT/LogIn"><i class="fas fa-file-invoice"></i>  Đơn Hàng</a></li>
                                        <li><a href="/WebBanGiay_PTTKHTTT/LogIn"><i class="fas fa-user-cog"></i>  Trang Quản Trị</a></li>
                                        <li><a href="/WebBanGiay_PTTKHTTT/LogIn/LogOut"><i class="fas fa-sign-out-alt"></i>  Đăng xuất</a></li>';
                        }
                    } else {
                        echo '<li><a href="/WebBanGiay_PTTKHTTT/LogIn"><i class="fas fa-sign-in-alt"></i>  Đăng nhập</a></li>
                                        <li><a href="/WebBanGiay_PTTKHTTT/Register"><i class="fas fa-user-plus"></i>  Đăng ký</a></li>';
                    }
                    ?>
                </ul>
            </li>
            <li style="position: relative;margin-top: 10px;">
                <a style="cursor: pointer;padding: 0;font-size: 20px;position: relative;" id="cart-icon">
                    <i class="fas fa-shopping-cart" style="color: #ffffff;"></i>
                    <div style="font-size: 15px; color: #f26202;position: absolute;top: -10px;right: -5px;display:none">5</div>
                </a>
                <div id="cart" style="width: 400px; background-color: #fff; position: absolute; top: 45px; right: -20px;display: none;">
                    <i class="fas fa-caret-up" style="color: #ffffff;font-size: 50px; position: absolute; top: -26px; right: 15px;"></i>
                    <div style="color: #ccc; font-size: 16px;padding: 10px;">Sản phẩm Mới Thêm</div>
                    <div class="row">
                        <div class="col-md-3" style="margin: 10px;">
                            <img src="/WebBanGiay_PTTKHTTT/public/img/product/adidas/Adidas Pureboost Jet Women GW9146.jpg" alt="" style="width: 50px;" class="img-thumbnail">
                        </div>
                        <div class="col-md-5" style="margin-top: 15px;">
                            <p>Adidas Pureboost Jet Women GW9146</p>
                        </div>
                        <div class="col-md-3" style="margin-top: 15px;">
                            <p style="color: #f26202;">300.000đ</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3" style="margin: 10px;">
                            <img src="/WebBanGiay_PTTKHTTT/public/img/product/adidas/Adidas Pureboost Jet Women GW9146.jpg" alt="" style="width: 50px;" class="img-thumbnail">
                        </div>
                        <div class="col-md-5" style="margin-top: 15px;">
                            <p>Adidas Pureboost Jet Women GW9146</p>
                        </div>
                        <div class="col-md-3" style="margin-top: 15px;">
                            <p style="color: #f26202;">300.000đ</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3" style="margin: 10px;">
                            <img src="/WebBanGiay_PTTKHTTT/public/img/product/adidas/Adidas Pureboost Jet Women GW9146.jpg" alt="" style="width: 50px;" class="img-thumbnail">
                        </div>
                        <div class="col-md-5" style="margin-top: 15px;">
                            <p>Adidas Pureboost Jet Women GW9146</p>
                        </div>
                        <div class="col-md-3" style="margin-top: 15px;">
                            <p style="color: #f26202;">300.000đ</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" style="font-size: 15px;padding: 10px;margin-left: 20px;">2 sản phẩm khác</div>
                        <div class="col-md-7" style="text-align: right;">
                            <button class="btn btn-danger">
                                <a href="/WebBanGiay_PTTKHTTT/Products/Cart" style="text-decoration: none;color:#fff;">Xem Giỏ Hàng</a>
                            </button>
                        </div>
                    </div>

                </div>
            </li>
        </ul>
        <form class="navbar-form navbar-right navbar-form-config" action="" style="margin-top: 30px;">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="search">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</nav>
