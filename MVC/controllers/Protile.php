<?php
class Protile extends Controller{
        function showAll(){
            require_once "./MVC/views/ShowAll.html";
        }

        function detail(){
            $sv=$this->Model("SinhVienModel");
            echo $sv->GetSV();
        }
        
        function Show(){
            
            //Views
            $str="Tien handsome";
            $this->View("index",[
                "page"=>"contact",
                "params"=>$str,

            ]);
        }
    }
?>