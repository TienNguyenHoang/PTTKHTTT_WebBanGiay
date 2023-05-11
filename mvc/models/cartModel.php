<?php
    class cartModel extends DB {
        public function custormerCart($maTK) {
            $mang = array();
            $qr = "SELECT * FROM `giohang`,`chitietgh` WHERE giohang.MaGH = chitietgh.MaGH AND MaTK = '$maTK'";
            $rows = mysqli_query($this->con,$qr);
            while($row = mysqli_fetch_array($rows)) {
                $mang[] = $row;
            }
            return $mang;
        }
        public function getCartID($maTK) {
            $mang = array();
            $qr = "SELECT MaGH FROM `giohang` WHERE MaTK = '$maTK'";
            $rows = mysqli_query($this->con,$qr);
            while($row = mysqli_fetch_array($rows)) {
                $mang[] = $row;
            }
            return $mang;
        }
        public function isExistProduct($maTK) {
            $mang = array();
            $qr = "SELECT MaSP FROM `giohang`,`chitietgh` WHERE MaTK = '$maTK'";
            $rows = mysqli_query($this->con,$qr);
            while($row = mysqli_fetch_array($rows)) {
                $mang[] = $row;
            }
            return $mang;
        } 
        public function insertIntoCart($maSP,$tenSP,$maTK) {
            $custormerCart = $this->custormerCart($maTK);
            $maGH = $this->getCartID($maTK)[0]['MaGH'];
            $flag = true;
            if(!empty($custormerCart)) {
                foreach($custormerCart as $cartdetail) {
                    if($cartdetail['MaSP'] == $maSP) {
                        $flag = false;
                        break;
                    }
                }
            }
            if($flag) {
                $qr = "INSERT INTO `chitietgh`(`soLuong`, `MaGH`, `MaSP`) VALUES (1,'$maGH', '$maSP');";
            } else {
                $qr = "UPDATE `chitietgh` SET soLuong = soLuong + 1 WHERE MaSP = '$maSP'";
            }
            if (mysqli_query($this->con,$qr)) {
                echo "<script>alert('Thêm thành công!')</script>";
                echo "<script>window.location.href = '/WebBanGiay_PTTKHTTT/Products/ProductDetails/$tenSP';</script>";
            }
        }
        public function getProductMiniCart($maTK) {
            $mang = array();
            $qr = "SELECT sanpham.TenSP,sanpham.HinhAnh,sanpham.Gia 
            FROM giohang,chitietgh,sanpham WHERE giohang.MaGH = chitietgh.MaGH 
            and giohang.MaTk = '$maTK' and chitietgh.MaSP = sanpham.MaSP;";
            $rows = mysqli_query($this->con,$qr);
            while($row = mysqli_fetch_array($rows)) {
                $mang[] = $row;
            }
            $mang[] = count($mang) - 3;
            return $mang;
        }
    }
?>