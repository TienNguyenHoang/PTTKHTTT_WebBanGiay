<?php
class product extends DB {
    public $productperpage=8;
    public function getAllProduct($category,$trang) {
        $mang = array();
        $product = array();
        $count = array();
        $start = ($trang-1)*$this->productperpage;
        if($category == "All") {
            $qr = "SELECT * FROM `sanpham` LIMIT $start,$this->productperpage";
        } else {
            $qr = "SELECT * FROM `sanpham`,`hang` WHERE sanpham.MaHang = hang.MaHang AND hang.TenHang = '$category' LIMIT $start,$this->productperpage";
        }
        $rows = mysqli_query($this->con,$qr);
        while($row = mysqli_fetch_array($rows)) {
            $product[] = $row;
        }
        if($category == "All") {
            $qr = "SELECT COUNT(*) FROM `sanpham`";
        } else {
            $qr = "SELECT COUNT(*) FROM `sanpham`,`hang` WHERE sanpham.MaHang = hang.MaHang AND hang.TenHang = '$category'";
        }
        $rows = mysqli_query($this->con,$qr);
        while($row = mysqli_fetch_array($rows)) {
            $count[] = $row;
        }
        $mang[0] = $product;
        $mang[1] = $count;
        return $mang;
    }

    public function getNewProducts() {
        $mang = array();
        $qr = "SELECT * FROM `sanpham` ORDER BY MaSP DESC LIMIT 8";
        $rows = mysqli_query($this->con,$qr);
        while($row = mysqli_fetch_array($rows)) {
            $mang[] = $row;
        }
        return $mang;
    }
    public function getHotSellProducts() {
        $mang = array();
        $qr = "SELECT * FROM `sanpham` LIMIT 8";
        $rows = mysqli_query($this->con,$qr);
        while($row = mysqli_fetch_array($rows)) {
            $mang[] = $row;
        }
        return $mang;
    }
    public function getProduct($tenSP) {
        $mang = array();
        $qr = "SELECT * FROM `sanpham` WHERE TenSP = '$tenSP'";
        $rows = mysqli_query($this->con,$qr);
        while($row = mysqli_fetch_array($rows)) {
            $mang[] = $row;
        }
        return $mang;
    }
    public function getProductID($tenSP) {
        $mang = array();
        $qr = "SELECT MaSP FROM `sanpham` WHERE TenSP = '$tenSP'";
        $rows = mysqli_query($this->con,$qr);
        while($row = mysqli_fetch_array($rows)) {
            $mang[] = $row;
        }
        return $mang;
    }
    public function getProductSize($tenSP) {
        $mang = array();
        $id_sp = $this->getProductID($tenSP)[0]['MaSP'];
        $qr = "SELECT Size FROM `sanpham_size` WHERE MaSP = '$id_sp'";
        $rows = mysqli_query($this->con,$qr);
        while($row = mysqli_fetch_array($rows)) {
            $mang[] = $row;
        }
        return $mang;
    }
    public function getProductColor($tenSP) {
        $mang = array();
        $id_sp = $this->getProductID($tenSP)[0]['MaSP'];
        $qr = "SELECT MauSac FROM `sanpham_mausac` WHERE MaSP = '$id_sp'";
        $rows = mysqli_query($this->con,$qr);
        while($row = mysqli_fetch_array($rows)) {
            $mang[] = $row;
        }
        return $mang;
    }
    public function getCategory($tenSP) {
        $maLoai=array();
        $qr = "SELECT MaHang FROM `sanpham` WHERE TenSP = '$tenSP'";
        $rows = mysqli_query($this->con,$qr);
        while($row = mysqli_fetch_array($rows)) {
            $maLoai = $row;
        }
        return $maLoai;
    }
    public function getAllCategory() {
        $mang=array();
        $qr = "SELECT * FROM `hang`";
        $rows = mysqli_query($this->con,$qr);
        while($row = mysqli_fetch_array($rows)) {
            $mang[] = $row;
        }
        return $mang;
    }
    public function getSimilarProduct($tenSP) {
        $mang = array();
        $maLoai = $this->getCategory($tenSP);
        $qr = "SELECT * FROM `sanpham` WHERE MaHang = '$maLoai[0]' AND TenSP <> '$tenSP' LIMIT 6";
        $rows = mysqli_query($this->con,$qr);
        while($row = mysqli_fetch_array($rows)) {
            $mang[] = $row;
        }
        return $mang;
    }
}
?>