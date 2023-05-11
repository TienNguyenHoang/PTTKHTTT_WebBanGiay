<?php
class Cart extends Controller
{
    public $model;
    function __construct()
    {
        $this->model = $this->model("cartModel");
    }
    function Default($maSP,$tenSP)
    {
        if (isset($_SESSION['account'])) {
            $this->model->insertIntoCart($maSP,$tenSP,$_SESSION['account']['MaTK']);
        } else {
            echo "<script>alert('Bạn cần phải có tài khoản')</script>";
            echo "<script>window.location.href = '/WebBanGiay_PTTKHTTT/LogIn';</script>";
        }
    }
    function MiniCart() {
        if (isset($_SESSION['account'])) {
            $arr = $this->model->getProductMiniCart($_SESSION['account']['MaTK']);
            if(empty($arr)) {
                echo "Chưa có sản phẩm nào!";
            } else {
                require_once "./mvc/views/pages/mini-cart.php";
            }
        } else {
            echo "<script>window.location.href = '/WebBanGiay_PTTKHTTT/LogIn';</script>";
        }
    }
    function Cartdetails()
    {
        $this->view("master1", ["page" => "cart"]);
    }
}
?>