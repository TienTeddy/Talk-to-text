<?php
class Home extends Controller{

        public $SinhVienModel;

        function __construct(){

            $this->SinhVienModel=$this->model("SinhVienModel");
        }

        function index(){

             $this->View("index",[
                "Page"=>"SanPham",
                "sanpham"=>$this->SinhVienModel->GetSanPham("ShowAll")
            ]);
        }

        function Detail($sp){
             $this->View("index",[
                "Page"=>"SanPham",
                "sanpham"=>$this->SinhVienModel->GetSanPham($sp)
             ]);
        }
        function AddProduct($masp){
            $this->View("index",[
                "Page"=>"SanPham",
                "sanpham"=>$this->SinhVienModel->AddProduct($masp)
            ]);
        }

        function news(){
            $this->View("index",[
               "Page"=>"News",
               "sanpham"=>$this->SinhVienModel->GetNews()
            ]);
       }
    }
?>