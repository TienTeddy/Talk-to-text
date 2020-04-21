<?php
class Account extends Controller{

    public $SinhVienModel;

    function __construct(){

        $this->AccountModel=$this->Model("AccountModel");
    }

    function Login(){

            $this->View("Account/Login",[
            "Page"=>"Login"
        ]);
    }
    function CheckLogin(){
        

        if(isset($_POST["data-username"])&&isset($_POST["data-password"])){
            $user=$_POST["data-username"];
            $pass=$_POST["data-password"];

            //$data=$this->AccountModel->GetUsername($user);

            $check=$this->AccountModel->CheckAccount($user,$pass);
            if($check){
                while ($row=mysqli_fetch_array($check)) {
                    if($user==$row["username"]&&$pass==$row["password"]){

                        $_SESSION['Username']=$user;
                        $_SESSION['Password']=$pass;

                        echo "<script> window.location = '/New2020/Home/Index'; </script>";
                    }
                }
            }
            
            echo "<p style='color:red'>Wrong username or password!";
        }
    }
}
?>