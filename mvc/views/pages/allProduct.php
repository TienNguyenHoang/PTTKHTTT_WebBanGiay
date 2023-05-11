<div class="product">
    <?php
    foreach ($data['product'][0] as $product) { 
        $money = number_format($product['Gia'], 0, ',', '.');
        ?>
        <a href="/WebBanGiay_PTTKHTTT/Products/ProductDetails/<? echo $product['TenSP']; ?>" style="text-decoration: none;">
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