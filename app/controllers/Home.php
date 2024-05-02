<?php
class Home extends Controller {
    public function index() {
        $data['judul'] = 'Home';
        $data['folder'] = 'Home';
        $data['style'] = 'Home';

        $this->view('homepage/home');

    }
}
?>
