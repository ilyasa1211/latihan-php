<?php

class Home extends Controller {
    public function index(){
        // echo "menampilkan home";
        $this->view('templates/header', 'templates/footer', 'home/index');
    }
}