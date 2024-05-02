<?php
class DaftarKeranjangModel {
    private $db;

    public function __construct() {
        // Koneksi ke database atau inisialisasi koneksi database
        $this->db = new Database(); // Sesuaikan dengan implementasi koneksi database Anda
    }

    public function getCartItems($id_user) {
        $this->db->query('SELECT barang.nama_barang, barang.harga, barang.gambar, keranjang.jumlah_barang, id_keranjang
                            FROM keranjang 
                            INNER JOIN barang ON keranjang.id_barang = barang.id 
                            WHERE keranjang.id_user = :id_user');
        $this->db->bind(':id_user', $id_user);
        
        return $this->db->resultSet();
    }

    public function updateQuantity( $idkeranjang, $quantity,) {

        $this->db->query('UPDATE keranjang SET jumlah_barang = :quantity WHERE id_keranjang = :id_keranjang');
        $this->db->bind(':id_keranjang', $idkeranjang);
        $this->db->bind(':quantity', $quantity);
        return $this->db->execute();
    }
    
    public function deleteCartItem($id_keranjang) {
        $this->db->query('DELETE FROM keranjang WHERE id_keranjang = :id_keranjang');
        $this->db->bind(':id_keranjang', $id_keranjang);

        // Execute query
        return $this->db->execute();
    }
    
    public function getDataKeranjangByUserId($user_id) {
        $this->db->query('SELECT barang.nama_barang, keranjang.jumlah_barang, barang.harga * keranjang.jumlah_barang AS subtotal, barang.harga
                          FROM keranjang
                          JOIN barang ON keranjang.id_barang = barang.id
                          WHERE keranjang.id_user = :user_id');
        $this->db->bind(':user_id', $user_id);

        return $this->db->resultSet();
    }
}
?>
