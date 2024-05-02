<?php
class BarangModel {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    
    public function getAllProducts() {
        $this->db->query('SELECT * FROM Barang');
        return $this->db->resultSet();
    }
    public function tambahBarang($nama_barang, $harga, $deskripsi_singkat, $stok, $kategori, $gambar) {
        $this->db->query('INSERT INTO barang (nama_barang, harga, deskripsi_singkat, stok, kategori, gambar) VALUES (:nama_barang, :harga, :deskripsi_singkat, :stok, :kategori, :gambar)');
        $this->db->bind(':nama_barang', $nama_barang);
        $this->db->bind(':harga', $harga);
        $this->db->bind(':deskripsi_singkat', $deskripsi_singkat);
        $this->db->bind(':stok', $stok);
        $this->db->bind(':kategori', $kategori);
        $this->db->bind(':gambar', $gambar);
        

        return $this->db->execute(); // Execute the query
    }


    public function getAllBarang($id_to_edit) {
        $this->db->query('SELECT * FROM barang WHERE id=:id');
        $this->db->bind(':id', $id_to_edit);
        return $this->db->resultSet(); // Retrieve all products
    }


}

?>
