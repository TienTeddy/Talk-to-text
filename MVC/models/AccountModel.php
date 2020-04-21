<?php
    class AccountModel extends DB{

        public function GetUsername($params){
            $user="select * from dbo_account where username='".$params."'";
            return mysqli_query($this->con,$user);
        }
        public function GetPassword($params){
            $pass="select password from dbo_account where password='".$params."'";
            return mysqli_query($this->con,$pass);
        }

        public function CheckAccount($params1,$params2){
           $check="select * from dbo_account where username='".$params1."' and password='".$params2."'";
            return mysqli_query($this->con,$check);
        }

    }    
?>