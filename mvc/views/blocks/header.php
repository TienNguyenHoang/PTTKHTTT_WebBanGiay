<nav class="navbar navbar-inverse" style="background-color: black; margin: 0;">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand navbar-brand-config" href="#" style="height: auto; padding: 0;">
                <img src="./public/img/logo/logoShop.png" style="width: 100px;"></img>
            </a>
        </div>
        <ul class="nav navbar-nav" id="header-list">
            <li id="home"><a href="./Home" class="navbar-item">Trang chủ</a></li>
            <li id="introduce"><a href="./Introduce" class="navbar-item">Giới thiệu</a></li>
            <li id="products"><a href="./Products" class="navbar-item">Sản phẩm</a></li>
            <li id="news"><a href="./News" class="navbar-item">Tin tức</a></li>
            <li id="contact"><a href="./Contact" class="navbar-item">Liên hệ</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="margin-top: 25px;">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a data-toggle="modal" data-target="#LogInModal">Đăng nhập</a></li>
                </ul>
            </li>
            <li>
                <a data-toggle="modal" data-target="#CartModal">
                    <i class="fas fa-shopping-cart fa-lg" style="color: #ffffff;"></i>
                </a>
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