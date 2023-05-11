<?php
    class Register extends Controller{
        public $model;
        function __construct(){
            $this->model = $this->model("account");
        }
        function Default() {
            $this->view("master2",[
                "page" => "register",
                "js" => "register",
                "account" => $this->model->allAccounts()
            ]);
        }
    }
?>