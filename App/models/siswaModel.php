<?php

class siswaModel extends Controller{
    private $tablesiswa = 'siswa';
    private $tablekelas = 'kelas';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function selectAllSiswa()
    {
        $query = "SELECT db_mvc.{$this->tablesiswa}.id, db_mvc.{$this->tablesiswa}.nama, db_mvc.{$this->tablesiswa}.id_kelas, db_mvc.{$this->tablekelas}.id_kelas, db_mvc.{$this->tablekelas}.nama_kelas, db_mvc.{$this->tablesiswa}.jurusan, db_mvc.{$this->tablesiswa}.absen FROM db_mvc.{$this->tablesiswa} INNER JOIN db_mvc.{$this->tablekelas} ON db_mvc.{$this->tablesiswa}.id_kelas = db_mvc.{$this->tablekelas}.id_kelas";
        $this->db->query($query);
        return $this->db->resultAll();
    }

    public function selectSiswaById($id)
    {
        $query = "SELECT db_mvc.{$this->tablesiswa}.`id`, db_mvc.{$this->tablesiswa}.`nama`, db_mvc.{$this->tablesiswa}.`id_kelas`, db_mvc.{$this->tablekelas}.`id_kelas`, db_mvc.{$this->tablekelas}.`nama_kelas`, db_mvc.{$this->tablesiswa}.jurusan``, db_mvc.{$this->tablesiswa}.`absen` FROM db_mvc.{$this->tablesiswa} INNER JOIN db_mvc.{$this->tablekelas} ON db_mvc.{$this->tablesiswa}.id_kelas = db_mvc.{$this->tablekelas}.id_kelas WHERE db_mvc.{$this->tablesiswa}.`id` =:id";
        $this->db->query($query);
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

    public function editSiswa($data)
    {
        $query = "UPDATE db_mvc.{$this->table} SET `nama`=:nama, `kelas`=:kelas, `jurusan`=:jurusan, `absen`=:absen WHERE `id`=:id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('absen', $data['absen']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteSiswa($id)
    {
        $query = "DELETE FROM db_mvc.{$this->table} WHERE id =:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }


}
