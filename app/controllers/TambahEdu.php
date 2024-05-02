<?php
class TambahEdu extends Controller {
    public function index() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->processAddEdu();
    }

        // Load view
        $this->loadAddEduView();
    }

    private function processAddEdu() {
        // Menangani proses upload gambar
        $gambarPath = $this->uploadImage();

        // Mengambil data dari form
        $judul = $_POST['judul'];
        $link_youtube = $_POST['link_youtube'];
        $kategori = $_POST['kategori'];
        $keterangan_singkat = $_POST['keterangan_singkat'];
        $tujuan = $_POST['tujuan'];
        $materi = $_POST['materi'];
        $langkah_langkah = $_POST['langkah_langkah'];

        // Simpan data ke database
        $eduModel = $this->model('TambahEduModel');
        $eduAdded = $eduModel->addEdu($judul, $link_youtube, $kategori, $keterangan_singkat, $gambarPath, $tujuan, $materi, $langkah_langkah);
        if ($eduAdded) {
            
            // Redirect ke halaman yang sesuai setelah berhasil menambahkan data
            header('Location: ' . BASEURL . '/EditEdu');
            exit();
        } else {
            echo $eduAdded;
        }
    }

    private function uploadImage() {
        // Konfigurasi tempat penyimpanan gambar
        $targetDirectory = "img/";
        $targetFile = $targetDirectory . basename($_FILES["photo"]["name"]);

        // Menyimpan gambar ke direktori yang ditentukan
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            return $targetFile; // Mengembalikan path gambar yang berhasil diunggah
        } else {
            // Handle jika gagal mengunggah gambar
            // ...
            return ''; // Mengembalikan string kosong jika terjadi kesalahan
        }
    }

    private function loadAddEduView() {
        $this->view('tambahEdu/tambahedu');
        // Load additional views or styles if needed
    }
}
?>
