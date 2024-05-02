<?php
class DaftarKeranjang extends Controller {
    public function index() {
        ob_start();// Periksa apakah pengguna sudah login atau sesi id_user tersedia
        if (isset($_SESSION['id'])) {
            $id_user = $_SESSION['id'];

            // Buat objek model
            $cartModel = $this->model('DaftarKeranjangModel');

            // Ambil data barang dalam keranjang menggunakan method getCartItems dari CartModel
            $data['keranjang'] = $cartModel->getCartItems($id_user);

            // Load view dan kirimkan data yang diperlukan
        }
            // Handle form submission
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tambah_barang'], $_POST['id_keranjang'], $_POST['quantity'])) {
                $id_barang = $_POST['id_keranjang'];
                $quantity = intval($_POST['quantity']);
    
                // Call the model function to update the quantity in the database
                $cartModel = $this->model('DaftarKeranjangModel');
                $berhasil=$cartModel->updateQuantity($id_barang, $quantity);
                if ($berhasil) {
                    header('Location: ' . BASEURL . '/DaftarKeranjang'); 
                    exit();
                } else {
                    
                }; // Start output buffering

                // Your controller action logic here
        
                
            } 
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'], $_POST['id_keranjang'])) {
                $id_keranjang = $_POST['id_keranjang'];
                
                // Panggil method di model untuk menghapus item berdasarkan id_keranjang
                $cartModels = $this->model('DaftarKeranjangModel');
                $result= $cartModels->deleteCartItem($id_keranjang);
                if ($result) {
                    header('Location: ' . BASEURL . '/DaftarKeranjang'); 
                    exit();
                } else {
                    
                }; // Sta

            }
            $this->view('keranjang/keranjang', $data);
            ob_end_flush();
    }
}
?>
