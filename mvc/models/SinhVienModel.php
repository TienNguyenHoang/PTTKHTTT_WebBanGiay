<?php
class SinhVienModel extends DB{
    public function GetSV() {
        return "Nguyen Van Teo";
    }
    public function Tong($n,$m) {
        return $n + $m;
    }
    public function SinhVien() {
        $qr = "SELECT * FROM sinhvien";
        $rows = mysqli_query($this->con,$qr);
        while($row = mysqli_fetch_array($rows)) {
            $mang[] = $row;
        }
        return $mang;
    }
}
?> 