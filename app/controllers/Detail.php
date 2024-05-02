<?php
class Detail extends Controller {
    public function index($idPassed = null) {
        $passedId = $idPassed ?? $_SESSION['idPassed'] ?? null;
        $iduserdetail = $_SESSION['id'];
        $data['judul'] = 'Detail';
        $data['folder'] = 'Detail';
        $data['style'] = 'Detail';
        echo $iduserdetail;
        $tutorialModel = $this->model('TutorialModel');
        $data['tutorials'] = $tutorialModel->getAllTutorials($passedId);

        $komentarModel = $this->model('DetailModel');
        $data['komentar'] = $komentarModel->getKomentarByDetailEduId($passedId);

       
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['submitkomentar'])) {
                $komentarModel2 = $this->model('InputKomentar');
                $isi_komentar = $_POST['commentInput'];
                $result = $komentarModel2->tambahKomentar($passedId, $isi_komentar, $iduserdetail); 
                if ($result) {
                    header('Location: ' . BASEURL . '/Detail'); 
                    exit();
                } else {
                    $data['error'] = 'Gagal menambahkan komentar.';
                }
            } 
        }
        $this->view('detail/detail', $data);
        
        
    }
}
?>
