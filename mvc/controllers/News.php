<?php
    class News extends Controller{
        public $model;
        function __construct(){
            $this->model = $this->model("SinhVienModel");
        }
        // function SayHi() {
        //     echo $this->model->GetSV();
        // }
        // function Show($a,$b) {
        //     //Model
        //     $tong = $this->model->Tong($a,$b);
        //     //View
        //     $this->view("aodep",[
        //         "Page" => "news",
        //         "Number"=>$tong,
        //         "Mau"=>"red",
        //         "SoThich"=>["A","B","C"],
        //         "SV" => $this->model->SinhVien()
        //     ]);
        // }
        function Default() {
            //Model
            //View
            $this->view("master1",["page" => "news"]);
        }
    }
?>