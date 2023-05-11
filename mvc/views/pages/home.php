<div class="container-fluid" style="margin: 20px 50px;">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="/WebBanGiay_PTTKHTTT/public/img/slide/sneakerSilde1.jpg" alt="Slider" style="width:100%;">
            </div>
            <div class="item">
                <img src="/WebBanGiay_PTTKHTTT/public/img/slide/sneakerSilde2.jpg" alt="Slider" style="width:100%;">
            </div>
            <div class="item">
                <img src="/WebBanGiay_PTTKHTTT/public/img/slide/sneakerSilde3.jpg" alt="Slider" style="width:100%;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="row information">
    <div class="col-md-3 info">
        <div style="text-align: center;"><i class="fa-solid fa-money-bill"></i></div>

        <h1>Thanh toán</h1>
        <p style="text-align: center;">Linh hoạt với nhiều cách thức giao dịch khác nhau.</p>
    </div>
    <div class="col-md-3 info">
        <div style="text-align: center;"><i class="fa-solid fa-truck-fast"></i></div>
        <h1>Giao hàng</h1>
        <p style="text-align: center;">Đóng gói kĩ càng, bảo quản tốt, giao hàng tận nơi với thời gian nhanh nhất có thể.</p>
    </div>
    <div class="col-md-3 info">
        <div style="text-align: center;"><i class="fa-solid fa-hand-holding-hand"></i></div>
        <h1>Bảo hành</h1>
        <p style="text-align: center;">Đổi hàng, trả hàng khi nhận được hàng không mong muốn.
        </p>
    </div>
    <div class="col-md-3 info">
        <div style="text-align: center;"><i class="fa-solid fa-hand-holding-hand"></i></div>
        <h1>Hỗ trợ online</h1>
        <p style="text-align: center;">Luôn hỗ trợ khách hàng 24/24 tất cả các ngày trong tuần.
        </p>
    </div>
</div>
<div class="container">
    <div class="home-header" style="text-align: center;">
        <h1 style="color: red;">SẢN PHẨM MỚI</h1>
        <small>Các sản phẩm mới có tại cửa hàng</small>
        <hr style="border-color: red; width: 70%;">
    </div>
    <div class="home-products">
        <div class="product">
            <?php
            foreach ($data['newProducts'] as $product) { 
                $money = number_format($product['Gia'], 0, ',', '.');?>
                <a href="/WebBanGiay_PTTKHTTT/Products/ProductDetails/<?echo $product['TenSP'];?>" style="text-decoration: none;">
                    <div class="product-item">
                        <img src="/WebBanGiay_PTTKHTTT/public/img/product/<?php echo $product['HinhAnh'] ?>" alt="" class="product-img img">
                        <div class="product-info" align="center">
                            <h5 style="height: 30px;" class="product-name"><?php echo $product['TenSP']; ?></h5>
                            <div class="product-price">
                                <?php echo $money."<small style='margin-left:3px'>đ</small>"; ?></div>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="home-header" style="text-align: center;">
        <h1 style="color: red;">SẢN PHẨM BÁN CHẠY</h1>
        <small>Các sản phẩm bán chạy tại cửa hàng</small>
        <hr style="border-color: red; width: 70%;">
    </div>
    <img src="/WebBanGiay_PTTKHTTT/public/img/sale/img-best-sellers.webp" alt="" style="width: 100%;">
    <div class="home-products">
        <div class="product">
        <?php
            foreach ($data['hotSellProducts'] as $product) { 
                $money = number_format($product['Gia'], 0, ',', '.');?>
                <a href="/WebBanGiay_PTTKHTTT/Products/ProductDetails" style="text-decoration: none;">
                    <div class="product-item">
                        <img src="/WebBanGiay_PTTKHTTT/public/img/product/<?php echo $product['HinhAnh'] ?>" alt="" class="product-img img">
                        <div class="product-info" align="center">
                            <h5 class="product-name"><?php echo $product['TenSP']; ?></h5>
                            <div class="product-price">
                                <?php echo $money."<small style='margin-left:3px'>đ</small>"; ?></div>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</div>
<div class="container-fluid feedback" style="background-image: linear-gradient(to right top,rgba(0,0,0,0.8) 85%,rgba(75, 70, 70, 0.411)), url(/WebBanGiay_PTTKHTTT/public/img/feedback/background.jpg); background-size: cover;background-position: center;background-attachment: fixed;">
    <div class="container">
        <div class="home-header" style="text-align: center;">
            <h1 style="color: red;">FEEDBACK</h1>
            <small style="color: #ffffff;">Album feedback của khách hàng về <mark>SneakerShop</mark></small>
            <hr style="border-color: red; width: 70%;">
        </div>
        <div class="row" style="margin: 40px 0;">
            <div class="col-md-3"><img src="/WebBanGiay_PTTKHTTT/public/img/feedback/feedback_1.webp" alt="" class="img-rounded" style="width: 100%;"></div>
            <div class="col-md-3"><img src="/WebBanGiay_PTTKHTTT/public/img/feedback/feedback_2.webp" alt="" class="img-rounded" style="width: 100%;"></div>
            <div class="col-md-3"><img src="/WebBanGiay_PTTKHTTT/public/img/feedback/feedback_3.webp" alt="" class="img-rounded" style="width: 100%;"></div>
            <div class="col-md-3"><img src="/WebBanGiay_PTTKHTTT/public/img/feedback/feedback_4.webp" alt="" class="img-rounded" style="width: 100%;"></div>
        </div>
        <div class="row" style="margin: 40px 0;">
            <div class="col-md-3"><img src="/WebBanGiay_PTTKHTTT/public/img/feedback/feedback_5.webp" alt="" class="img-rounded" style="width: 100%;"></div>
            <div class="col-md-3"><img src="/WebBanGiay_PTTKHTTT/public/img/feedback/feedback_6.webp" alt="" class="img-rounded" style="width: 100%;"></div>
            <div class="col-md-3"><img src="/WebBanGiay_PTTKHTTT/public/img/feedback/feedback_7.webp" alt="" class="img-rounded" style="width: 100%;"></div>
            <div class="col-md-3"><img src="/WebBanGiay_PTTKHTTT/public/img/feedback/feedback_8.webp" alt="" class="img-rounded" style="width: 100%;"></div>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin: 40px 170px;">
    <div class="home-header" style="text-align: center;">
        <h1 style="color: red;">TIN TỨC</h1>
        <small>Tổng hợp tin tức, mẹo vặt cho bạn</small>
        <hr style="border-color: red; width: 70%;">
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="/WebBanGiay_PTTKHTTT/public/img/new/new3.webp" alt="" style="width: 100%;">
            <h3 class="home-news-heading">King James mang đôi OFF-WHITE x Nike Air Force 1 University Yellow</h3>
            <p><i class="fas fa-user"></i> Nguyễn Anh Dũng <i class="far fa-clock" style="margin-left: 90px;margin-right: 5px;"></i>Ngày 21/12/2022</p>
            <p>OFF-WHITE x Nike Air Force 1 University Yellow là đôi sneakers được hé lộ trong website public—domain.com, một websit...</p>
            <a href="">Xem thêm <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
        <div class="col-md-4">
            <img src="/WebBanGiay_PTTKHTTT/public/img/new/new1.webp" alt="" style="width: 100%;">
            <h3 class="home-news-heading">Hàng loạt các phối màu của adidas Stan Smith được tung ra</h3>
            <p><i class="fas fa-user"></i> Nguyễn Anh Dũng<i class="far fa-clock" style="margin-left: 90px;margin-right: 5px;"></i>Ngày 04/01/2023</p>
            <p>adidas Stan Smith đã không còn xa lạ với bất cứ ai yêu mến sneakers trên toàn cầu nói chung và tại Việt Nam nói riêng...</p>
            <a href="">Xem thêm <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
        <div class="col-md-4">
            <img src="/WebBanGiay_PTTKHTTT/public/img/new/new2.webp" alt="" style="width: 100%;">
            <h3 class="home-news-heading">Nike AIR FORCE 1 Love Women – Phối màu dành riêng cho một nửa thế giới</h3>
            <p><i class="fas fa-user"></i> Nguyễn Anh Dũng<i class="far fa-clock" style="margin-left: 90px;margin-right: 5px;"></i>Ngày 15/03/2023</p>
            <p>Nike lại tiếp tục tung ra một phối màu sử dụng tông màu trắng chủ đạo bằng chất liệu canvas kết hợp denim trên đôi sn...</p>
            <a href="">Xem thêm <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
    </div>
</div>