<?php
class editbarangmodel {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    
    public function getAllBarang() {
        $this->db->query('SELECT id, nama_barang, harga, stok, kategori, gambar FROM barang');
        return $this->db->resultSet();
    }
    public function deleteBarang($idBarang) {
        $this->db->query('DELETE FROM barang WHERE id = :id');
        $this->db->bind(':id', $idBarang);
        
        // Execute the query
        return $this->db->execute();
    }
    public function updateBarang($id_to_edit, $nama_barang, $harga, $deskripsi_singkat, $stok, $kategori, $gambarPath) {
        $this->db->query('UPDATE barang SET 
                            nama_barang = :nama_barang,
                            harga = :harga,
                            deskripsi_singkat = :deskripsi_singkat,
                            stok = :stok,
                            kategori = :kategori,
                            gambar = :gambar 
                          WHERE id = :id');
        
        $this->db->bind(':id', $id_to_edit);
        $this->db->bind(':nama_barang', $nama_barang);
        $this->db->bind(':harga', $harga);
        $this->db->bind(':deskripsi_singkat', $deskripsi_singkat);
        $this->db->bind(':stok', $stok);
        $this->db->bind(':kategori', $kategori);
        $this->db->bind(':gambar', $gambarPath);
        
        return $this->db->execute();
    }
}
?>