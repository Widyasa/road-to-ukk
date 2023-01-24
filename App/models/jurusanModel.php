<?php

class jurusanModel extends Controller{
    private $table_jurusan = 'table_jurusan';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function selectAllJurusan()
    {
        $query = "CALL db_mvc.showAllDataJurusan()";
        $this->db->query($query);
        return $this->db->resultAll();
    }

    public function selectDataJurusanById($id)
    {
        $query = "CALL showDataJurusanById($id)";
        $this->db->query($query);
        return $this->db->resultSingle();
    }

    public function addjurusan($data)
    {
        $query = "CALL 	db_mvc.addDataJurusan(:nama_jurusan)";
        $this->db->query($query);
        $this->db->bind(':nama_jurusan', $data['nama_jurusan']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function editjurusan($data)
    {
        $query = "CALL 	db_mvc.updateDataJurusan(:id_jurusan, :nama_jurusan)";
        $this->db->query($query);
        $this->db->bind(':id_jurusan', $data['id_jurusan']);
        $this->db->bind(':nama_jurusan', $data['nama_jurusan']);
        $this->db->execute();
        return $this->db->rowCount();
    }

}