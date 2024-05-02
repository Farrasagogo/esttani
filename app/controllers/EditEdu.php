<?php
class EditEdu extends Controller {
    public function index() {
        $data['judul'] = 'EditEdu';
        $data['folder'] = 'EditEdu';
        $data['style'] = 'EditEdu';

        // Penanganan POST request
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['hapusbutton'])) {
                $_SESSION['idedusesi'] = $_POST['idedu'];
                if (isset($_SESSION['idedusesi'])) {
                    $id = $idPassed ?? $_SESSION['idedusesi'] ?? null;
                    $eduModel = $this->model('EditEduModel');
                    $deleted = $eduModel->hapusEduData($id);
                    
                    if ($deleted) {
                        // Redirect jika penghapusan berhasil
                        header('Location: ' . BASEURL . '/EditEdu'); 
                        exit();
                    } else {
                        // Penanganan jika gagal menghapus
                        echo "Gagal menghapus data.";
                        // atau bisa juga redirect ke halaman lain dengan pesan error
                    }
                } else {
                    // Handle jika session idedusesi tidak tersedia
                    header('Location: previous_page.php?error=Session ID not found');
                    exit();
                }
            }
            
            if (isset($_POST['editbutton'])) {
                $_SESSION['idedusesi'] = $_POST['idedu'];
                if (isset($_SESSION['idedusesi'])) {
                    // $editModel = $this->model('EditEduModel');
                    // $data['readeditedu'] = $editModel->geteditAllEduData($id_to_edit);
                    header('Location: ' . BASEURL . '/EditEduPilih'); 
                    exit();
                } else {
                    // Handle jika session idedusesi tidak tersedia
                    header('Location: previous_page.php?error=Session ID not found');
                    exit();
                }
            }
        }

        // Ambil data dari model untuk ditampilkan di view
        $listedu = $this->model('EditEduModel');
        $edukasi = $listedu->getAllEduData();
        $data['edukasi'] = $edukasi;
        
        // Tampilkan view
        $this->view('EditEdu/editedu', $data);
    }
}
?>
