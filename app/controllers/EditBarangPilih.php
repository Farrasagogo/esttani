<?php
class EditBarangPilih extends Controller {
    public function index($idPassed = null) {
        $data['judul'] = 'EditEduPilih';
        $data['folder'] = 'EditEduPilih';
        $data['style'] = 'EditEduPilih';
        $id_to_edit = $idPassed ?? $_SESSION['idbarang'] ?? null;
        $barangModel = $this->model('BarangModel');
        $data['barang'] = $barangModel->getAllBarang($id_to_edit); // Fetch all products from the database
        // Load the view and pass the fetched data
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->processEdit($id_to_edit);
        }
        $this->view('editbarangpilih/editbarangpilih', $data);
    }
   
    private function processEdit($id_to_edit) {
        // Mengambil data dari form
        $gambarPath = $this->uploadImage();
        $nama_barang = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        $deskripsi_singkat = $_POST['deskripsi_singkat'];
        $stok = $_POST['stok'];
        $kategori = $_POST['kategori'];

        // Memanggil model untuk memperbarui entri dalam database
        $barangModel = $this->model('editbarangmodel');
        $isUpdated = $barangModel->updateBarang($id_to_edit,$nama_barang, $harga, $deskripsi_singkat, $stok, $kategori, $gambarPath);

        if ($isUpdated) {
            header('Location: ' . BASEURL . '/EditBarang');
            exit();
        } else {
            // Tampilkan pesan gagal
            // ...
        }
    }
    private function uploadImage() {
        // Konfigurasi tempat penyimpanan gambar
        $targetDirectory = "img/";
        $targetFile = $targetDirectory . basename($_FILES["gambar"]["name"]);

        // Menyimpan gambar ke direktori yang ditentukan
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFile)) {
            return $targetFile; // Mengembalikan path gambar yang berhasil diunggah
        } else {
            // Handle jika gagal mengunggah gambar
            // ...
            return ''; // Mengembalikan string kosong jika terjadi kesalahan
        }
    }
}
?>