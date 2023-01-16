<?php

class Home extends Controller{

    public function __construct()
    {
        if(empty($_SESSION['username'])){
            redirect('login/');
        }
    }
    public function index(){
        $data['title']="home";
        $this->view('templates/header');
        $this->view('index');
        $this->view('templates/footer');
    }
    
}