<div class="container-fluid" style="background-color: #ecf0f1;">
    <div class="container-fluid" style="background-color: #fff; box-shadow: 0 0 50px #fff; padding: 0; margin: 30px 60px;">
        <div class="row" style="margin: 15px;">
            <div class="col-md-4" style="padding: 0;"><img class="img" src="/WebBanGiay_PTTKHTTT/public/img/product/<?php echo $data['product'][0]['HinhAnh']?>" alt="" style="width: 100%;"></div>
            <div class="col-md-1"></div>
            <div class="col-md-7" style="padding: 0; margin-left: 20px;">
                <div style="position: relative;">
                    <small style="background-color: orangered; color: white; padding: 5px;position: absolute; top: 0;left: 0;">Yêu thích</small>
                    <h3 style="display: inline-block; margin: 0;margin-left: 70px;"><?php echo $data['product'][0]['TenSP']?></h3>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col-md-2" style="padding: 0;margin-left: 17px; margin-right: 10px;"><span style="color: #f26202; text-decoration: underline;font-size: 15px;">4.7</span> <i class="fas fa-star" style="color: #f26202;"></i><i class="fas fa-star" style="color: #f26202;"></i>
                        <i class="fas fa-star" style="color: #f26202;"></i><i class="fas fa-star" style="color: #f26202;"></i>
                        <i class="fas fa-star-half-alt" style="color: #f26202;"></i>
                    </div>
                    <div class="col-md-2" style="border-left: 1px solid #ccc;border-right: 1px solid #ccc;text-align: center;padding: 0;"><span style="color: #000; text-decoration: underline;font-size: 15px;">1,8K</span>
                        <span style="color: #ccc;font-size: 15px;">Đánh Giá</span>
                    </div>
                    <div class="col-md-2" style="padding-left: 0;margin-left: 10px;">
                        <span style="color: #000; text-decoration: underline;font-size: 15px;">5,3K</span>
                        <span style="color: #ccc;font-size: 15px;">Đã Bán</span>
                    </div>
                </div>
                <div class="row" style="background-color: #f7f9fa;color: #f26202;font-size: 30px; margin-left: 3px;margin-top: 40px;padding: 10px;padding-left: 100px;">
                    <?php
                        $money = number_format($data['product'][0]['Gia'], 0, ',', '.');
                        echo $money."<small style='margin-left:3px'>đ</small>";
                    ?>
                </div>
                <div class="row" style="margin-top: 30px; margin-left: 15px;margin: 15px 0;margin-top: 60px;">
                    <div class="col-md-3">
                        <p>Vận chuyển</p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-8">
                        <p><i class="fas fa-truck" style="margin-right: 3px;"></i>Vận Chuyển Tới Địa Điểm Nhanh Chóng <br>Phí Vận Chuyển 20.000đ</p>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px; margin-left: 15px;margin:15px 0">
                    <div class="col-md-3">
                        <p>Màu Sắc</p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-8">
                        <select name="" id="" class="input-group">
                            <?php foreach($data['color'] as $color) {?>
                                <option value="<?php echo $color['MauSac']?>"><?php echo $color['MauSac']?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px; margin-left: 15px;margin:15px 0">
                    <div class="col-md-3">
                        <p>Size</p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-8">
                        <select name="" id="" class="input-group">
                        <?php foreach($data['sizes'] as $size) {?>
                                <option value="<?php echo $size['Size']?>"><?php echo $size['Size']?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px; margin-left: 15px;margin:15px 0">
                    <div class="col-md-3">
                        <p>Số Lượng</p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-8">
                        <div style="border: 1px solid #ccc;border-radius: 5px; display: inline-block;">
                            <button class="btn btn-default" style="border: none; border-right: 1px solid #ccc;"><i class="fas fa-minus"></i></button>
                            <input type="text" role="spinbutton" value="1" style="width: 30px; height: 30px; text-align: center; border: none;">
                            <button class="btn btn-default" style="border: none;border-left: 1px solid #ccc;"><i class="fas fa-plus"></i></button>
                        </div>
                        <p style="font-size: 15px;color: #ccc;display: inline;margin-left: 10px; margin-right: 2px;"><?php echo $data['product'][0]['SoLuong']?> sản phẩm có sẵn</p>
                    </div>
                </div>

                <div class="row" style="margin-top: 50px;">
                    <div class="col-md-4" style="padding: 0; margin-left: 25px;">
                        <button class="btn btn-danger"><a href="/WebBanGiay_PTTKHTTT/Cart/Default/<?php echo $data['product'][0]['MaSP']."/".$data['product'][0]['TenSP']?>" style="text-decoration: none;color:#fff;"><i class="fas fa-cart-arrow-down" style="color: #ffffff;"></i> <span style="font-size: 20px;">Thêm Vào Giỏ Hàng</span></a></button>
                    </div>
                    <div class="col-md-5" style="padding: 0;margin-left: 10px;">
                        <button class="btn btn-success" style="font-size: 20px;">Mua Ngay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #fff; box-shadow: 0 0 50px #fff; padding: 0; margin: 30px 60px;">
        <div style="margin: 20px;">
            <div class="row">
                <div class="col-md-9">
                    <h4>Sản phẩm tương tự</h4>
                </div>
                <div class="col-md-3" style="text-align: right;"><small><a href="">Xem Tất Cả <i class="fas fa-chevron-right"></i></a></small></div>
            </div>
            <div class="row" style="margin-top: 20px;">
            <?php foreach($data['similarproduct'] as $product){?>
                <div class="col-md-2">
                    <a href="/WebBanGiay_PTTKHTTT/Products/ProductDetails/<?php echo $product['TenSP']?>">
                        <img src="/WebBanGiay_PTTKHTTT/public/img/product/<?php echo $product['HinhAnh']?>" alt="" class="img-thumbnail" style="width: 100%; border:3px solid #f26202;">
                        <h6 style="font-size: 15px;"><?php echo $product['TenSP']?></h6>
                        <small style="color: #f26202;"><?php echo $product['Gia']?></small>
                    </a>
                </div>
            <?php }?>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #fff; box-shadow: 0 0 50px #fff; padding: 0; margin: 30px 60px;">
        <div style="margin: 20px;">
            <div>
                <h1 style="background-color: #f7f9fa;font-size: 25px;padding: 10px;">CHI TIẾT SẢN PHẨM</h1>
                <div class="row" style="padding: 5px; margin-left: 10px;">
                    <div class="col-md-2" style="color: #ccc;">Danh Mục</div>
                    <div class="col-md-9">
                        <a href="">Sneaker <i class="fas fa-chevron-right"></i></a>
                        <a href="">Sản Phẩm <i class="fas fa-chevron-right"></i></a>
                        <a href="">Adidas <i class="fas fa-chevron-right"></i></a>
                        <a href="">Adidas Pureboost Jet Women GW9146</a>
                    </div>
                </div>
                <div class="row" style="padding: 5px;margin-left: 10px;">
                    <div class="col-md-2" style="color: #ccc;">Địa chỉ tổ chức</div>
                    <div class="col-md-9">Đang cập nhật</div>
                </div>
                <div class="row" style="padding: 5px;margin-left: 10px;">
                    <div class="col-md-2" style="color: #ccc;">Tên tổ chức</div>
                    <div class="col-md-9">Đang cập nhật</div>
                </div>
                <div class="row" style="padding: 5px;margin-left: 10px;">
                    <div class="col-md-2" style="color: #ccc;">Kho hàng</div>
                    <div class="col-md-9">520</div>
                </div>
                <div class="row" style="padding: 5px;margin-left: 10px;">
                    <div class="col-md-2" style="color: #ccc;">Gửi từ</div>
                    <div class="col-md-9">TP.HCM</div>
                </div>
            </div>
            <div>
                <h1 style="background-color: #f7f9fa;font-size: 25px;padding: 10px; ">MÔ TẢ SẢN PHẨM</h1>
                <p style="font-size: 15px;padding: 10px;">Adidas Ultraboost GX5928 : 5.200.000 Giày Adidas Ultraboost 22 W Gx5928 có độ bền và độ dẻo cao, nhẹ, khả năng chịu lực tốt nhờ chất liệu vải dệt. Với công nghệ Adidas Primeknit, giày Adidas vừa ôm sát chân vừa hoàn trả năng lượng
                    tốt trong từng bước chạy. Đế giày làm bằng chất liệu cao su bền với nhiệt, bên cạnh đó còn gia tăng khả năng chống trượt bám chặt trên mọi địa hình. Thiết kế giày hiện đại kết hợp cùng màu đen cá tính tạo nên phong cách thời
                    trang thời thượng.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #fff; box-shadow: 0 0 50px #fff; padding: 0; margin: 30px 60px;">
        <div style="margin: 20px;">
            <h1 style="background-color: #f7f9fa;font-size: 25px;padding: 10px;">ĐÁNH GIÁ</h1>
            <div class="row" style="padding: 20px; margin-left: 10px; background-color: rgb(253, 228, 228); border: 1px solid #f38f4d;">
                <div class="col-md-3" style="color: #f26202; font-size: 20px;text-align: center;"><span style="font-size: 35px;">4.7</span> trên 5 <br> <i class="fas fa-star" style="color: #f26202;"></i>
                    <i class="fas fa-star" style="color: #f26202;"></i><i class="fas fa-star" style="color: #f26202;"></i>
                    <i class="fas fa-star" style="color: #f26202;"></i><i class="fas fa-star-half-alt" style="color: #f26202;"></i>
                </div>
                <div class="col-md-6" style="text-align: center;">
                    <button class="btn btn-default" style="margin: 2px;">Tất cả</button>
                    <button class="btn btn-default" style="margin: 2px;">5 Sao (363)</button>
                    <button class="btn btn-default" style="margin: 2px;">4 Sao (18)</button>
                    <button class="btn btn-default" style="margin: 2px;">3 Sao (5)</button>
                    <button class="btn btn-default" style="margin: 2px;">2 Sao (1)</button>
                    <button class="btn btn-default" style="margin: 2px;">1 Sao (2)</button>
                    <button class="btn btn-default" style="margin: 2px;">Có Bình Luận (130)</button>
                    <button class="btn btn-default" style="margin: 2px;">Có Hình Ảnh / Video (103)</button>
                </div>
            </div>
            <div class="commment" style="margin-left: 30px;margin-top: 30px; width: 900px;">
                <div class="media" style="border-bottom: 1px solid #ccc;">
                    <div class="media-left">
                        <img src="/WebBanGiay_PTTKHTTT/public/img/avatar/avatar1.webp" class="media-object" style="width:45px">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Tiến Nguyễn <small><i>2023-03-24 10:59</i></small></h4>
                        <small>
                            <i class="fas fa-star" style="color: #f26202;"></i><i class="fas fa-star" style="color: #f26202;"></i>
                            <i class="fas fa-star" style="color: #f26202;"></i><i class="fas fa-star" style="color: #f26202;"></i>
                            <i class="fas fa-star-half-alt" style="color: #f26202;"></i>
                        </small>
                        <p>Lần thứ hai mua giày của shop Giày siu nhẹ, khá đẹp Size vừa chân Nhưng keo dán thấy còn thừa nhiều lắm, hy vọng không ảnh hưởng 🙏 Giao hàng nhanh</p>
                        <i class="far fa-thumbs-up" style="color: #ccc;cursor: pointer;margin-bottom: 20px;"></i> <small style="color: #ccc;margin-left: 2px;">2</small>
                    </div>
                </div>
                <div class="media" style="border-bottom: 1px solid #ccc;">
                    <div class="media-left">
                        <img src="/WebBanGiay_PTTKHTTT/public/img/avatar/avatar2.png" class="media-object" style="width:45px">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Minh Trí <small><i>2022-09-29 13:36</i></small></h4>
                        <small>
                            <i class="fas fa-star" style="color: #f26202;"></i><i class="fas fa-star" style="color: #f26202;"></i>
                            <i class="fas fa-star" style="color: #f26202;"></i><i class="fas fa-star" style="color: #f26202;"></i>
                        </small>
                        <p>Giày đẹp, chắc chắn, mn nên nua nhé. Mình với chồng đã mua giày bên hãng và thấy đi khá bền. Giày giao tới nới k bị móp méo</p>
                        <i class="far fa-thumbs-up" style="color: #ccc;cursor: pointer;margin-bottom: 20px;"></i> <small style="color: #ccc;margin-left: 2px;">1</small>
                    </div>
                </div>
                <div class="media" style="border-bottom: 1px solid #ccc;">
                    <div class="media-left">
                        <img src="/WebBanGiay_PTTKHTTT/public/img/avatar/avatar3.png" class="media-object" style="width:45px">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Nguyễn Ngọc <small><i>2023-01-29 14:34</i></small></h4>
                        <small>
                            <i class="fas fa-star" style="color: #f26202;"></i><i class="fas fa-star" style="color: #f26202;"></i>
                            <i class="fas fa-star" style="color: #f26202;"></i><i class="fas fa-star" style="color: #f26202;"></i>
                            <i class="fas fa-star" style="color: #f26202;"></i>
                        </small>
                        <p>Giao hàng rất nhanh chóng Đóng gói kĩ Hàng nhận như ảnh và mô tả</p>
                        <i class="far fa-thumbs-up" style="color: #ccc;cursor: pointer;margin-bottom: 20px;"></i> <small style="color: #ccc;margin-left: 2px;">4</small>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <img src="/WebBanGiay_PTTKHTTT/public/img/avatar/avatar4.png" class="media-object" style="width:45px">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Bích Trăm <small><i>2022-10-25 16:17</i></small></h4>
                        <small>
                            <i class="fas fa-star" style="color: #f26202;"></i><i class="fas fa-star" style="color: #f26202;"></i>
                            <i class="fas fa-star" style="color: #f26202;"></i><i class="fas fa-star" style="color: #f26202;"></i>
                            <i class="fas fa-star-half-alt" style="color: #f26202;"></i>
                        </small>
                        <p>Hàng rất đẹp, đi vừa chân. Đã mua mấy đôi của hãng, nói chung rất là ưng. Đóng gói cẩn thận và giao hàng nhanh</p>
                        <i class="far fa-thumbs-up" style="color: #ccc;cursor: pointer;"></i> <small style="color: #ccc;margin-left: 2px;">1</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>