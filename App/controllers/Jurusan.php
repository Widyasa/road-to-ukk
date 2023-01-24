<?php
class Jurusan extends Controller{
    public function __construct()
    {
        if (empty($_SESSION['username'])){
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = 'jurusan';
        $data['jurusan'] = $this->model('jurusanModel')->selectAllJurusan();
        $this->view('templates/header',$data);
        $this->view('templates/navbar',$data);
        $this->view('jurusan',$data);
        $this->view('templates/footer',$data);
    }
    public function store()
    {
        if ($this->model('jurusanModel')->addJurusan($_POST)){
            redirect('jurusan');
        }
    }
    public function edit()
    {
        if ($this->model('jurusanModel')->editJurusan($_POST)>0){
            redirect('jurusan/');
        } else{
            $data['title'] = 'jurusan';
            $data['jurusan'] = $this->model('jurusanModel')->selectAllJurusan();
            $this->view('templates/header',$data);
            $this->view('templates/navbar',$data);
            $this->view('jurusan',$data);
            $this->view('templates/footer',$data);
        }
    }
}