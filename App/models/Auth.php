<?php

class Auth extends Controller{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function findUserByUsername($username)
    {

        $query = "SELECT * FROM db_mvc.{$this->table} WHERE `username` = :username";
        $this->db->query($query);
        $this->db->bind("username", $username);
        $row = $this->db->resultSingle();

        if ($this->db->rowCount()>0){
            return $row;
        }

    }

    public function login($data)
    {
        $username = htmlspecialchars($data['username']);
        $row = $this->findUserByUsername($username);

        if ($row === false) return false;
        return $data['password'] === $row['password'] ? $row : false;
    }

    public function createSession($user)
    {
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['is_admin'] = $user['is_admin'] ? true: false;
    }

    public function validateUsername($username)
    {
        if(empty($username)){
            return "username kosong";
        }elseif ($this->findUserByUsername($username)=== false){
            return "username salah";
        }
    }

    public function validatePassword($password)
    {
        if(empty($password)){
            return "password kosong";
        }elseif ($this->findUserByUsername($password)=== false){
            return "password salah";
        }
    }
}