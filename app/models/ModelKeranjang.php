<?php
class ModelKeranjang {
    private $db;

    public function __construct() {
        // Koneksi ke database atau inisialisasi koneksi database
        $this->db = new Database(); // Sesuaikan dengan implementasi koneksi database Anda
    }

    public function addToCart($id_user, $id_barang, $jumlah_barang) {
        // Query untuk menambahkan item ke keranjang belanja
        $this->db->query('INSERT INTO keranjang (id_user, id_barang, jumlah_barang) VALUES (:id_user, :id_barang, :jumlah_barang)');
        $this->db->bind(':id_user', $id_user);
        $this->db->bind(':id_barang', $id_barang);
        $this->db->bind(':jumlah_barang', $jumlah_barang);
        
        return $this->db->execute();
    }
    public function deleteCartByUserId($pelanggan_id) {
        $this->db->query('DELETE FROM keranjang WHERE id_user = :user_id');
        $this->db->bind(':user_id', $pelanggan_id);

        return $this->db->execute();
    }
    public function createTransaction($pelanggan_id, $nama, $alamat, $telepon, $waktu_transaksi, $totalPrice) {
        $this->db->query('INSERT INTO transaksi (pelanggan_id, nama, alamat, no_telpon, waktu_transaksi, total) VALUES (:pelanggan_id, :nama, :alamat, :telepon, :waktu_transaksi, :total)');
        $this->db->bind(':pelanggan_id', $pelanggan_id);
        $this->db->bind(':nama', $nama);
        $this->db->bind(':alamat', $alamat);
        $this->db->bind(':telepon', $telepon);
        $this->db->bind(':waktu_transaksi', $waktu_transaksi);
        $this->db->bind(':total', $totalPrice);

        return $this->db->execute();
    }
}
?>
