<?php
class InputKomentar {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }
    public function tambahKomentar($detail_edu_id, $isi_komentar, $iduserdetail) {
        $this->db->query('INSERT INTO komentar (edu_id, isi_komentar, waktu_komentar, iduser) VALUES (:edu_id, :isi_komentar, CURRENT_TIMESTAMP(), :iduser)
        ');
        $this->db->bind(':edu_id', $detail_edu_id);
        $this->db->bind(':isi_komentar', $isi_komentar);
        $this->db->bind(':iduser', $iduserdetail);
        return $this->db->execute();
    }
}
?>