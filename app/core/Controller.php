<?php
    class Controller{

        public function model($model){
            require_once 'app/models/'.$model.'.php';
            return new $model();
        }
        public function view($view,$data=[]){
            require_once 'app/views/'.$view.'.php';
        }
        public function getWidget($widget){
            require_once 'app/widget/'.$widget.'.php';
        }
    }