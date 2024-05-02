<?php
class Register extends Controller {
    public function index() {
        $data['judul'] = 'Register';
        $data['folder'] = 'Register';
        $data['style'] = 'Register';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['register'])) {
                $this->processRegistration(); }
            
        }

        // Load view
        $this->loadRegisterView($data);
    }

    private function processRegistration() {
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $userModel = $this->model('User');
        $registrationSuccessful = $userModel->registerUser($username, $email, $password);

        if ($registrationSuccessful) {

            header('Location: ' . BASEURL . '/Login');
            exit();
        } else {

        }
    }
    private function loadRegisterView() {
        $this->view('registerUser/registerview');

    }
}
?>