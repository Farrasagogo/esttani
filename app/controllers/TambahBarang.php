<?php
class TambahBarang extends Controller {
    public function index() {
        $data['judul'] = 'TambahBarang';
        $data['folder'] = 'TambahBarang';
        $data['style'] = 'TambahBarang';
        $this->tambah();
        $this->view('tambahbarang/tambahbarang', $data);
    }

    public function tambah() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Initialize BarangModel
            $barangModel = $this->model('BarangModel');

            // Retrieve data from the form
            $nama_barang = $_POST['nama_barang'];
            $harga = $_POST['harga'];
            $deskripsi_singkat = $_POST['deskripsi_singkat'];
            $stok = $_POST['stok'];
            $kategori = $_POST['kategori'];

            // File upload handling for image
            $gambar = $_FILES['gambar']['name'];
            $gambar_temp = $_FILES['gambar']['tmp_name'];
            $gambar_path = 'img/' . $gambar; // Update with your upload directory

            // Move the uploaded image to the specified directory
            move_uploaded_file($gambar_temp, $gambar_path);

            // Insert the new product data into the database
            $barangModel->tambahBarang($nama_barang, $harga, $deskripsi_singkat, $stok, $kategori, $gambar_path);

            // Redirect to a success page or any other page as needed
            header('Location: ' . BASEURL . '/EditBarang');
            exit();
        } 
    }
}
?>