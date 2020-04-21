<?php
    class SinhVienModel extends DB{

        public function GetSV(){
            return "Nguyễn Văn Tèo";
        }

        public function GetSanPham($param){
            $sp='';
            if($param=="ShowAll"){
                $sp="select * from dbo_sanpham";
            }
            else if($param=="ao"){
                $sp="select * from dbo_sanpham
                where maloai=(select maloai from dbo_loai where tenloai=N'Áo') ";
            }
            else if($param=="mu"){
                $sp="select * from dbo_sanpham
                where maloai=(select maloai from dbo_loai where tenloai=N'Mũ') ";
            }
            else if($param=="quan"){
                $sp="select * from dbo_sanpham
                where maloai=(select maloai from dbo_loai where tenloai=N'Quần') ";
            }
            return mysqli_query($this->con,$sp);
        }

        public function GetNews(){
            $d="select * from dbo_sanpham
            where trangthai='New'";
            return mysqli_query($this->con,$d);
        }
    }    
?>