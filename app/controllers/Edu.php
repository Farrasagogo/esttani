<?php
class Edu extends Controller {
    public function index() {
        $data['judul'] = 'Edu';
        $data['folder'] = 'Edu';
        $data['style'] = 'Edu';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['edudetail'])) {
                $_SESSION['idPassed'] = $_POST['idToPass'];
            header('Location: ' . BASEURL . '/Detail'); 
            exit(); 
            }  
        }
        $eduModel = $this->model('EduModel');
        $eduData = $eduModel->getEduData();

        $data['eduData'] = $eduData;
        
        // Load view untuk menampilkan panel edukasi

        $this->view('edu/edu', $data);
    }
}
?>
