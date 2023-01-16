<?php

class Home extends Controller{

    public function __construct()
    {
        if(empty($_SESSION['username'])){
            redirect('login/');
        }
    }
    public function index(){
        $data['title']="Home";
        $data['siswa'] =$this->model('siswaModel')->selectAllSiswa();
        $this->view('templates/header',$data);
        $this->view('index',$data);
        $this->view('templates/footer',$data);
    }

    public function store()
    {
        if ($this->model('siswaModel')->createSiswa($_POST)){
            redirect('home/');
        }
    }
    
}