<?php
class EditEduPilih extends Controller {
    public function index($idPassed = null) {
        $data['judul'] = 'EditEduPilih';
        $data['folder'] = 'EditEduPilih';
        $data['style'] = 'EditEduPilih';
        $id_to_edit = $idPassed ?? $_SESSION['idedusesi'] ?? null;
        $editModel = $this->model('EditEduModel');
        $data['readeditedu'] = $editModel->geteditAllEduData($id_to_edit);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->processEdit($id_to_edit);}
        $this->view('editedupilih/editedupilih', $data);
    }

    private function processEdit($id_to_edit) {
        // Mengambil data dari form
        $gambarPath = $this->uploadImage();
        $judul = $_POST['judul'];
        $kategori = $_POST['kategori'];
        $link_youtube = $_POST['link_youtube'];
        $keterangan_singkat = $_POST['keterangan_singkat'];
        $tujuan = $_POST['tujuan'];
        $materi = $_POST['materi'];
        $langkah_langkah = $_POST['langkah_langkah'];

        // Memanggil model untuk memperbarui entri dalam database
        $eduModel = $this->model('EditEduModel');
        $isUpdated = $eduModel->updateEdu($id_to_edit, $gambarPath, $judul, $kategori, $link_youtube, $keterangan_singkat,  $tujuan, $materi, $langkah_langkah);

        if ($isUpdated) {
            header('Location: ' . BASEURL . '/EditEdu');
            exit();
        } else {
            // Tampilkan pesan gagal
            // ...
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
       
        
        
}

?>