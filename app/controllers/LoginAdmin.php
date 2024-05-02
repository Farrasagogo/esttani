<?php
class LoginAdmin extends Controller {
    public function index() {
        $data['judul'] = 'LoginAdmin';
        $data['folder'] = 'LoginAdmin';
        $data['style'] = 'LoginAdmin';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['loginbutton'])) {
            $this->processLogin();}
        }

        $this->loadLoginView($data);
    }

    private function processLogin() {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $userModel = $this->model('Admin');
        $userData = $userModel->loginUser($email, $password);
    
        if ($userData) {
            // Login successful

            $_SESSION['id'] = $userData['id'];
            
            header('Location: ' . BASEURL . '/AdminMenu'); 
            exit();
        } else {
            // Login faileds
            header('Location: ' . BASEURL . '/loginadmingagal'); 
            exit();
        }
    }
    
    private function loadLoginView($data) {
        $this->view('loginAdmin/admin', $data); 
    }
}
?>