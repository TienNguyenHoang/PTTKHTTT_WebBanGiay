<?php
    class account extends DB {
        public function allAccounts() {
            $mang = array();
            $qr = "SELECT * FROM taikhoan";
            $rows = mysqli_query($this->con,$qr);
            while($row = mysqli_fetch_array($rows)) {
                $mang[] = $row;
            }
            return $mang;
        }
        public function autoRenderaccountID() {
            $mang = array();
            $mang = $this->allAccounts();
            $max = "";
            if(empty($mang)) {
                return "TK01";
            }
            foreach ($mang as $account) {
                if ($account['MaTK'] > $max) {
                    $max = $account['MaTK'];
                }
            }
            $id = substr($max,-2);
            $id = intval($id);
            $id = $id + 1;
            if($id < 10) {
                $id = "0".$id;
            }
            return "TK".$id;
        }
        public function allCustomerAccount() {
            $mang = array();
            $qr = "SELECT * FROM khachhang,taikhoan WHERE khachhang.MaTK = taikhoan.MaTK";
            $rows = mysqli_query($this->con,$qr);
            while($row = mysqli_fetch_array($rows)) {
                $mang[] = $row;
            }
            return $mang;
        }
        public function autoRendercustomerID() {
            $mang = array();
            $qr = "SELECT * FROM khachhang";
            $rows = mysqli_query($this->con,$qr);
            while($row = mysqli_fetch_array($rows)) {
                $mang[] = $row;
            }
            $max = "";
            if(empty($mang)) {
                return "KH01";
            }
            foreach ($mang as $customerid) {
                if ($customerid['MaKH'] > $max) {
                    $max = $customerid['MaKH'];
                }
            }
            $id = substr($max,-2);
            $id = intval($id);
            $id = $id + 1;
            if($id < 10) {
                $id = "0".$id;
            }
            return "KH".$id;
        }
        public function allCart() {
            $mang = array();
            $qr = "SELECT * FROM giohang";
            $rows = mysqli_query($this->con,$qr);
            while($row = mysqli_fetch_array($rows)) {
                $mang[] = $row;
            }
            return $mang;
        }
        public function autoRenderCartID() {
            $mang = array();
            $mang = $this->allCart();
            $max = "";
            if(empty($mang)) {
                return "GH01";
            }
            foreach ($mang as $cart) {
                if ($cart['MaGH'] > $max) {
                    $max = $cart['MaGH'];
                }
            }
            $id = substr($max,-2);
            $id = intval($id);
            $id = $id + 1;
            if($id < 10) {
                $id = "0".$id;
            }
            return "GH".$id;
        }
        public function createAccountKH($name,$address,$phonenum,$email,$username,$password) {
            $matk = $this->autoRenderaccountID();
            $makh = $this->autoRendercustomerID();
            $maGH = $this->autoRenderCartID();
            $sql = "INSERT INTO taikhoan(MaTK,TenTk,MatKhau,quyen)VALUES('$matk','$username','$password','Khách Hàng');
            INSERT INTO khachhang(MaKH,TenKH,Sdt,DiaChi,Mail,MaTK)VALUES('$makh','$name','$phonenum','$address','$email','$matk');
            INSERT INTO `giohang` (`MaGH`, `MaTk`) VALUES ('$maGH', '$matk');";
            if(mysqli_multi_query($this->con,$sql)) {
                echo "<script>alert('Thành công!')</script>";
            }
        }
        public function login($username,$password) {
            $accounts = array();
            $accounts = $this->allCustomerAccount();
            foreach($accounts as $account) {
                if($account['TenTK'] == $username && $account['MatKhau'] == $password) {
                    echo "$username";
                    $flag = true;
                    $arr = ['MaTK' => $account['MaTK'], 'username' => $username, 'password' => $password, 'quyen' => $account['quyen'], 'tenkh' => $account['TenKH'],
                     'sdt' => $account['Sdt'], 'email' => $account['Mail'], 'diachi' => $account['DiaChi']];
                    $_SESSION['account'] = $arr;
                    header('Location: ./Home');
                }
            }
        }
    }
