<style>
    .list-group-item.active {
    background-color: #ffffff;
    color: red;
}

.list-group-item:active {
    border: none;
    background-color: #ffffff;
    color: red;
}

.list-group-item:hover {
    color: red;
}

.list-group-item.active::before {
    content: '▶';
    display: inline-block;
    font-size: 15px;
    margin-right: 5px;
}
</style>
<div class="container-fluid" style="background-image: linear-gradient(to right top,rgba(0,0,0,0.8) 85%,rgba(75, 70, 70, 0.411)), url(/WebBanGiay_PTTKHTTT/public/img/introduce/introduce_background.jpg); background-size: cover;background-position: center;background-attachment: fixed;">
    <div class="container" style="height: 200px;margin-top: 0;">
        <div style="color: #ffffff;text-align: center;">
            <h1>TẤT CẢ SẢN PHẨM</h1>
            <small><a href="">Trang chủ</a> / Sản phẩm</small>
        </div>
    </div>
</div>
<div class="container-fluid contentmain row" style="margin: 20px 0;background-color: #ecf0f1;margin:0">
    <div class="col-md-2" style="padding:20px;">
        <div class="tab">
            <div style="background-color:#ffffff;font-size:18px;font-weight:bold;padding:10px;margin-bottom:7px"><i class="fas fa-list" style="margin-right: 10px;"></i>Danh Mục</div>
            <div class="list-group">
                <a href="#" class="list-group-item active">Tất cả</a>
                <a href="#" class="list-group-item">nike</a>
                <a href="#" class="list-group-item">adidas</a>
                <a href="#" class="list-group-item">puma</a>
                <a href="#" class="list-group-item">converse</a>
                <a href="#" class="list-group-item">vans</a>
            </div>
        </div>

    </div>
    <div class="col-md-10">
        <div class="all-content">
            <div class="content">
                <div style="background-color: #e7e9ec;padding:10px;margin: 0 10px;margin-top:20px">
                    <div class="form-input">
                        <label for="">Sắp xếp theo</label>
                        <select name="" id="" class="form-control" style="width: 150px;display: inline-block;margin-left:5px;">
                            <option value="">Tất cả</option>
                            <option value="">Tất cả</option>
                            <option value="">Tất cả</option>

                        </select>
                    </div>
                </div>
                <div class="product">
                    <?php
                    foreach ($data['product'] as $product) { ?>
                        <a href="/WebBanGiay_PTTKHTTT/Products/ProductDetails/<? echo $product['TenSP']; ?>" style="text-decoration: none;">
                            <div class="product-item">
                                <img src="/WebBanGiay_PTTKHTTT/public/img/product/<?php echo $product['HinhAnh'] ?>" alt="" class="product-img img">
                                <div class="product-info" align="center">
                                    <h5 class="product-name"><?php echo $product['TenSP']; ?></h5>
                                    <div class="product-price">
                                        <?php echo $product['Gia']; ?></div>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                </div>
                <div style="text-align: center;">
                    <ul class="pagination pager" style="margin: 0;">
                        <li class="previous"><a href="#" style="margin-right: 15px;">Previous</a></li>
                        <li class="active"><a href="#" style="margin: 0 5px;">1</a></li>
                        <li><a href="#" style="margin: 0 5px;">2</a></li>
                        <li><a href="#" style="margin: 0 5px;">3</a></li>
                        <li><a href="#" style="margin: 0 5px;">4</a></li>
                        <li><a href="#" style="margin: 0 5px;">5</a></li>
                        <li class="next"><a href="#" style="margin-left: 15px;">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>