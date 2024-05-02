<?php
class DetailModel {
    private $db;

    public function __construct() {
        $this->db = new Database(); // Atur koneksi database (sesuai dengan konfigurasi Anda)
    }

    public function getKomentarByDetailEduId($passedId) {
        $this->db->query("SELECT k.isi_komentar, k.waktu_komentar, u.name, u.foto_profil 
                          FROM komentar k
                          JOIN users u ON k.iduser = u.id
                          WHERE k.edu_id = :edu_id
                          ORDER BY k.waktu_komentar DESC");
        $this->db->bind(':edu_id', $passedId);
        return $this->db->resultSet();
    }
}
?>