<i class="fas fa-caret-up" style="color: #ffffff;font-size: 50px; position: absolute; top: -26px; right: 15px;"></i>
<div style="color: #ccc; font-size: 16px;padding: 10px;">Sản phẩm Mới Thêm</div>
<div class="mini-cart">
    <?php for ($i = 0; $i < count($arr) - 1; $i++) { 
            if($i==3) break;?>
        <div class="row">
            <div class="col-md-3" style="margin: 10px;">
                <img src="/WebBanGiay_PTTKHTTT/public/img/product/<?php echo $arr[$i]['HinhAnh'] ?>" alt="" style="width: 50px;" class="img-thumbnail">
            </div>
            <div class="col-md-5" style="margin-top: 15px;">
                <p><?php echo $arr[$i]['TenSP'] ?></p>
            </div>
            <div class="col-md-3" style="margin-top: 15px;">
                <p style="color: #f26202;">
                    <?php
                    $money = number_format($arr[$i]['Gia'], 0, ',', '.');
                    echo $money . "<small style='margin-left:3px'>đ</small>";
                    ?>
                </p>
            </div>
        </div>
    <?php } ?>
</div>
<div class="row">
    <?php
    $slcl = $arr[count($arr) - 1];
    if ($slcl > 0) {
        echo "<div class='col-md-4' style='font-size: 15px;padding: 10px;margin-left: 20px'>$slcl sản phẩm khác</div>";
    }
    ?>
    <div class="col-md-7" style="text-align: right;">
        <button class="btn btn-danger">
            <a href="/WebBanGiay_PTTKHTTT/Cart/Cartdetails" style="text-decoration: none;color:#fff;">Xem Giỏ Hàng</a>
        </button>
    </div>
</div>
