<?php

class Controller {

    public function view($header = 'templates/header', $footer = 'templates/footer', $view, $data = []){
        require_once '../app/views/'.$header.'.php';
        require_once '../app/views/'.$view.'.php';
        require_once '../app/views/'.$footer.'.php';

    }
    public function model($model){
        require_once '../app/models/'.$model.'.php';
        return new $model;
    }
}