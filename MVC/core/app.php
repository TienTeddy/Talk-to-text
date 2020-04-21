<?php
    class app{

        protected $controller="Home";
        protected $action="index";
        protected $params=[];

        function __construct(){
            $arr= $this->UrlProcess();

            //xử lí $controller
            if(file_exists("./MVC/controllers/".$arr[0].".php")){
                $this->controller=$arr[0];

                unset($arr[0]);
            }
            require_once "./MVC/controllers/".$this->controller.".php";
            $this->controller = new $this->controller;
            //xử lí $action
            if(isset($arr[1])){
                if(method_exists($this->controller,$arr[1])){
                    $this->action=$arr[1];
                }
                unset($arr[1]);
            }

            //xử lí $params
            $this->params = $arr?array_values($arr):[];
            

            //require_once "./MVC/controllers/".$this->controller.".php";
            //hàm gọi chạy function nào?
            call_user_func_array([$this->controller, $this->action], $this->params );
        }

        function UrlProcess(){
            if(isset($_GET["url"])){
                //explode hàm đưa str thành arr từ kí tự nào
                //filte_var hàm tương tự hàm ariable check kí tự
                return explode("/", filter_var(trim($_GET["url"],"/")));
            }
        }
    }
    
?>