<?php

class Controller 
{
    protected function view($v,$data = []){
        $title = explode('/',$v);
        $title = ucwords($title[0]);

        if(file_exists('../app/views/'.strtolower($v).'.php')){
            include_once '../app/views/all/header.php';
            include_once '../app/views/'.strtolower($v).'.php';
            include_once '../app/views/all/footer.php';
        }else{
            die('<b>Message:</b> 404 - View not found.');
        }
    }

    protected function model($m){
        $m = ucwords($m).'Model.php';
        if(file_exists('../app/models/'.$m.'.php')){
            include_once '../app/models/'.$m.'.php';
            return new $m;
        }else{
            die('<b>Message:</b> 404 - Model not found.');
        }
    }
}
