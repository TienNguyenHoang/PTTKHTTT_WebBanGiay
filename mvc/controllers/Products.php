<?php
    class Products extends Controller{
        public $model;
        function __construct(){
            $this->model = $this->model("product");
        }
        function Default() {
            //Model
            $product =  array();
            $product = $this->model->getAllProduct("All",1);
            $category = array();
            $category = $this->model->getAllCategory();
            //View
            $this->view("master1",[
                "page" => "products",
                "category" => $category,
                "product" => $product,
            ]);
        }
        function AllProduct($category,$trang) {
            $product =  array();
            $product = $this->model->getAllProduct($category,$trang);
            $data = array();
            $data['product'] = $product;
            $data['current_category'] = $category;
            require_once "./mvc/views/pages/allProduct.php";
        }
        function AllProduct2($category,$trang) {
            $product =  array();
            $product = $this->model->getAllProduct($category,$trang);
            $data = array();
            $data['product'] = $product;
            $data['current_category'] = $category;
            require_once "./mvc/views/pages/allProduct.php";
            require_once "./mvc/views/pages/pagination.php";
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
    }
?>