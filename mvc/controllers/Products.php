<?php
    class Products extends Controller{
        public $model;
        function __construct(){
            $this->model = $this->model("product");
        }
        function Default() {
            //Model
            $product =  array();
            $product = $this->model->getAllProduct();
            //View
            $this->view("master1",[
                "page" => "products",
                "product" => $product,
            ]);
        }
        function ProductDetails($tenSP) {
            $product =  array();
            $product = $this->model->getProduct($tenSP);
            $similarproduct = array();
            $similarproduct = $this->model->getSimilarProduct($tenSP);
            $sizes = array();
            $sizes = $this->model->getProductSize($tenSP);
            $colors = array();
            $colors = $this->model->getProductColor($tenSP);
            $this->view("master1",[
                "page" => "productdetails",
                "product" => $product,
                "similarproduct" => $similarproduct,
                "sizes" => $sizes,
                "color" => $colors,
            ]);
        }
        function Cart() {
            $this->view("master1",["page" => "cart"]);
        }
    }
?>