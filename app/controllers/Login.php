<?php
class Login extends Controller {
    public function index() {
        $data['judul'] = 'Login';
        $data['folder'] = 'Login';
        $data['style'] = 'Login';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['loginbutton'])) {
            $this->processLogin();}
        }

        // Load view
        $this->loadLoginView($data);
    }

    private function processLogin() {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $userModel = $this->model('User');
        $userData = $userModel->loginUser($email, $password);
    
        if ($userData) {
            // Login successful

            $_SESSION['id'] = $userData['id'];
            
            header('Location: ' . BASEURL . '/Edu'); 
            exit();
        } else {
            // Login failed
            header('Location: ' . BASEURL . '/login?error=invalid_credentials'); 
            exit();
        }
    }
    
    private function loadLoginView($data) {
        $this->view('loginUser/login', $data); 
    }
}
?>