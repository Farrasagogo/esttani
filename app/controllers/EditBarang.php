<?php
class EditBarang extends Controller {
    public function index() {
        $barangModel = $this->model('editbarangmodel');
        $data['barangs'] = $barangModel->getAllBarang();
        $this->delete();
         // Assuming 'barang/index.php' is your view file
        if (isset($_POST['editbutton'])) {
            $_SESSION['idbarang'] = $_POST['idbarang'];
            if (isset($_SESSION['idbarang'])) {
                header('Location: ' . BASEURL . '/EditBarangPilih'); 
                exit();
            } else {
                // Handle jika session idedusesi tidak tersedia
                header('Location: previous_page.php?error=Session ID not found');
                exit();
            }
        }
        $this->view('editbarang/editbarang', $data);
    }
    public function delete() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['hapus'])) {
            $idBarang = $_POST['idbarang']; // Get the ID from the form

            // Load your model for 'barang'
            $barangModel = $this->model('editbarangmodel');

            // Call the method in your model to delete the specific row
            $isDeleted = $barangModel->deleteBarang($idBarang);

            if ($isDeleted) {
                // Redirect or perform any other action upon successful deletion
                header('Location: ' . BASEURL . '/EditBarang');
                exit();
            } else {
                // Handle deletion failure
                // ...
            }
        }
    }
}
?>
