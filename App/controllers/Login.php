<?php

class Login extends Controller{

    public function __construct()
    {
        if(!empty($_SESSION['username']) && $_GET['url'] != 'login/logout'){
            redirect('home/');
        }
    }
    public function index()
    {
        $data['title']='Login';
        $this->view('templates/header',$data);
        $this->view('login',$data);
        $this->view('templates/footer',$data);
    }

    public function store()
    {
        $loggedInUser = $this->model('Auth')->login($_POST);
        if($loggedInUser){
            $this->model('Auth')->createSession($loggedInUser);
            header("Location:" . BASEURL . "/home/index");
        } else {
            $data['title']='Login';
            $this->view('templates/header',$data);
            $this->view('login',$data);
            $this->view('templates/footer',$data);
        }
    }

    public function logout()
    {
        $_SESSION = array();
        session_destroy();
        redirect('login/');
    }
}