<?php
class CheckoutController extends Controller {
    public function index() {
        $user_id = $_SESSION['id'];
        $keranjangModel = $this->model('DaftarKeranjangModel');
        $data['keranjang'] = $keranjangModel->getDataKeranjangByUserId($user_id);

        $pelanggan_id = $_SESSION['id'];
        $totalPrice = 3000000; // Ganti ini dengan perhitungan total harga

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->processCheckout($pelanggan_id, $totalPrice);
        } 
        $this->view('checkout/checkout', $data); 
    }

    private function processCheckout($pelanggan_id, $totalPrice) {
        $nama = $_POST['name'];
        $alamat = $_POST['address'];
        $telepon = $_POST['phone'];
        $waktu_transaksi = date('Y-m-d H:i:s');
        $checkoutModel = $this->model('ModelKeranjang');
        $result=$checkoutModel->createTransaction($pelanggan_id, $nama, $alamat, $telepon, $waktu_transaksi, $totalPrice);
        if ($result) {
            $keranjangModel = $this->model('ModelKeranjang');
            $hasil=$keranjangModel->deleteCartByUserId($pelanggan_id);
            if ($hasil) {
                header('Location: ' . BASEURL . '/TransactionController'); 
                exit();
            } else { }; 
        } else {}; 
    }

}
?>
