<?php
class TambahEduModel{
    private $db;

    public function __construct() {
        $this->db = new Database(); // Assuming Database.php contains your database connection logic
    }

    public function addEdu($judul, $link_youtube, $kategori, $keterangan_singkat, $gambarPath, $tujuan, $materi, $langkah_langkah) {
        $this->db->query("INSERT INTO edu (judul, link_youtube, kategori, keterangan_singkat, gambar, tujuan, materi, langkah_langkah) VALUES (:judul, :link_youtube, :kategori, :keterangan_singkat, :gambar, :tujuan, :materi, :langkah_langkah)");
        $this->db->bind(':judul', $judul);
        $this->db->bind(':link_youtube', $link_youtube);
        $this->db->bind(':kategori', $kategori);
        $this->db->bind(':keterangan_singkat', $keterangan_singkat);
        $this->db->bind(':gambar', $gambarPath); // Simpan path gambar ke dalam database
        $this->db->bind(':tujuan', $tujuan);
        $this->db->bind(':materi', $materi);
        $this->db->bind(':langkah_langkah', $langkah_langkah);
        return $this->db->execute(); // Mengembalikan hasil eksekusi query (berhasil atau gagal)
    }
    // Other methods like getEduById, updateEdu, deleteEdu, etc., can be added here
}
?>
