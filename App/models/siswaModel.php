<?php

class siswaModel extends Controller{
    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function selectAllSiswa()
    {
        $query = "SELECT * FROM db_mvc.{$this->table}";
        $this->db->query($query);
        return $this->db->resultAll();
    }

    public function selectSiswaById($id)
    {
        $query = "SELECT * FROM db_mvc.{$this->table} WHERE `id` =:id";
        $this->db->bind('id', $id);
        $this->db->resultSingle();
    }

    public function createSiswa($data)
    {
        $query = "INSERT INTO db_mvc.{$this->table} (`nama`,`kelas`,`jurusan`,`absen`) VALUES (:nama,:kelas,:jurusan,:absen)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('absen', $data['absen']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}
