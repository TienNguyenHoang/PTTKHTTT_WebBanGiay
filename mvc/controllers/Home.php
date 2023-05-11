<?php
    class Home extends Controller{
        public $model;
        function __construct(){
            $this->model = $this->model("product");
        }
        function Default() {
            //Model
            $newProducts = $this->model->getNewProducts();
            $hotSellProducts = $this->model->getHotSellProducts();
            //View
            $this->view("master1",[
                "page" => "home",
                "newProducts" => $newProducts,
                "hotSellProducts" => $hotSellProducts
            ]);
        }
    }
?>