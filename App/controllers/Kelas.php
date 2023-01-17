<?php

class Kelas extends Controller{
    public function __construct()
    {
        if (empty($_SESSION['username'])){
            redirect('login/');
        }
    }

    public function index()
    {
        $data['title'] = 'kelas';
        $data['kelas'] = $this->model('kelasModel')->getAllKelas();
        $this->view('templates/header',$data);
        $this->view('kelas',$data);
        $this->view('templates/footer',$data);
    }

    public function store()
    {
        if ($this->model('kelasModel')->createKelas($_POST)){
            redirect('kelas/');
        }
    }

    public function edit()
    {
        if ($this->model('kelasModel')->editKelas($_POST)>0){
            redirect('kelas/');
        } else{
            $data['title'] = 'kelas';
            $data['kelas'] = $this->model('kelasModel')->getAllKelas();
            $this->view('templates/header',$data);
            $this->view('kelas',$data);
            $this->view('templates/footer',$data);
        }
    }

    public function delete($id)
    {
        if ($this->model('kelasModel')->deleteKelas($id)>0){
            redirect('kelas/');
        }
    }
}