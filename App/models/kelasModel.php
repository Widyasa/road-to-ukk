<?php
class kelasModel extends Controller{
    private $table = 'kelas';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getALlKelas()
    {
        $query = "SELECT * FROM db_mvc.{$this->table}";
        $this->db->query($query);
        return $this->db->resultAll();
    }

    public function getKelasById($id)
    {
        $query = "SELECT * FROM db_mvc.{$this->table} WHERE `id_kelas`=:id_kelas";
        $this->db->query($query);
        return $this->db->resultSingle();
    }

    public function createKelas($data)
    {
        $query = "INSERT INTO db_mvc.{$this->table} (`nama_kelas`) VALUES (:nama_kelas)";
        $this->db->query($query);
        $this->db->bind('nama_kelas', $data['nama_kelas']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editKelas($data)
    {
        $query = "UPDATE db_mvc.{$this->table} SET `nama_kelas`=:nama_kelas WHERE `id_kelas`=:id_kelas";
        $this->db->query($query);
        $this->db->bind('nama_kelas', $data['nama_kelas']);
        $this->db->bind('id_kelas', $data['id_kelas']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function deleteKelas($id)
    {
        $query = "DELETE FROM db_mvc.{$this->table} WHERE `id_kelas`=:id_kelas";
        $this->db->query($query);
        $this->db->bind('id_kelas', $id );
        $this->db->execute();
        return $this->db->rowCount();
    }
}