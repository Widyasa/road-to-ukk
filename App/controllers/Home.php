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
//        $data['siswaId'] = $this->model('siswaModel')->selectSiswaById();
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

    public function edit()
    {
        if ($this->model('siswaModel')->editSiswa($_POST)>0){
            redirect('home/');
        }
    }

    public function delete($id)
    {
        if ($this->model('siswaModel')->deleteSiswa($id)>0){
            redirect('home/');
        }
    }
    
}