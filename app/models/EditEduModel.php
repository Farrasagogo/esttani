<?php
class EditEduModel {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllEduData() {
        $this->db->query("SELECT id, judul, gambar, kategori FROM edu");
        $result = $this->db->resultSet();
        return $result;
    }

    public function geteditAllEduData($id) {
        $this->db->query("SELECT * FROM edu WHERE id = :id");
        $this->db->bind(':id', $id);
        $result = $this->db->resultSet();
        return $result;
    }
    // EditEduModel.php

    public function updateEdu($id_to_edit, $judul, $link_youtube, $kategori, $keterangan_singkat, $tujuan, $materi, $langkah_langkah, $gambarPath) {
        $this->db->query('UPDATE edu SET 
                            judul = :judul,
                            link_youtube = :link_youtube,
                            gambar = :gambar,
                            kategori = :kategori,
                            keterangan_singkat = :keterangan_singkat,
                            tujuan = :tujuan,
                            materi = :materi,
                            langkah_langkah = :langkah_langkah 
                          WHERE id = :id');
        
        $this->db->bind(':id', $id_to_edit);
        $this->db->bind(':judul', $judul);
        $this->db->bind(':link_youtube', $link_youtube);
        $this->db->bind(':gambar', $gambarPath);
        $this->db->bind(':kategori', $kategori);
        $this->db->bind(':keterangan_singkat', $keterangan_singkat);
        $this->db->bind(':tujuan', $tujuan);
        $this->db->bind(':materi', $materi);
        $this->db->bind(':langkah_langkah', $langkah_langkah);
        
        // Execute the query
        return $this->db->execute();
    }
    


    
    public function hapusEduData($id) {
        $this->db->query('DELETE FROM edu WHERE id = :id'); // Ganti "nama_tabel" dengan nama tabel yang benar
        $this->db->bind(':id', $id);

        // Jalankan query
        if ($this->db->execute()) {
            // Jika penghapusan berhasil
            return true;
        } else {
            // Jika gagal menghapus
            return false;
        }
    }
}
?>
