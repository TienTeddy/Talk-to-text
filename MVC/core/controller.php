<?php
    class Controller{
        public function Model($model){
            require_once "./MVC/models/".$model.".php";
            return new  $model;
        }
        public function View($views,$data=[]){
            require_once "./MVC/views/".$views.".php";
        }
    }
?>