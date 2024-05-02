<?php
class BarangList extends Controller {
    public function index() {
        $data['judul'] = 'BarangList';
        $data['folder'] = 'BarangList';
        $data['style'] = 'BarangList';
        $produkModel = $this->model('BarangModel');
        $data['barangs'] = $produkModel->getAllProducts();
        $this->tambahKeKeranjang();
        $this->view('toko/toko', $data);
        
    }
    public function tambahKeKeranjang() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Periksa apakah pengguna sudah login atau sesi id_user tersedia
            if (isset($_SESSION['id']) && isset($_POST['id_barang'])) {
                $id_user = $_SESSION['id'];
                $id_barang = $_POST['id_barang'];
                $jumlah_barang = $_POST['jumlah_barang'];

                // Buat objek model
                $cartModel = $this->model('ModelKeranjang');

                // Tambahkan item ke keranjang menggunakan method addToCart dari CartModel
                $isAdded = $cartModel->addToCart($id_user, $id_barang, $jumlah_barang);

                if ($isAdded) {
                    // Jika berhasil ditambahkan ke keranjang, redirect atau lakukan tindakan lain
                    header('Location: ' . BASEURL . '/BarangList');
                    exit();
                } else {
                    // Jika gagal menambahkan ke keranjang, tampilkan pesan kesalahan
                    // ...
                }
            } else {
                // Jika pengguna belum login atau data tidak lengkap, tampilkan pesan kesalahan
                // ...
            }
        } else {
            // Jika bukan metode POST, redirect ke halaman lain atau lakukan tindakan lain
            // ...
        }
    }
}
?>
