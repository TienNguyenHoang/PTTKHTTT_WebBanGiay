<?php
    class LogIn extends Controller{
        public $model;
        function __construct(){
            $this->model = $this->model("account");
        }
        function Default() {
            //Model
            //View
            $this->view("master2",[
                "page" => "login",
                "js" => "login",
                "account" => $this->model->allAccounts()
            ]);
        }
        function LogOut() {
            session_destroy();
            header('location: /WebBanGiay_PTTKHTTT/Home');
        }
    }
?>