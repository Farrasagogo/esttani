<?php
class About extends Controller {
    public function index() {
        $data['judul'] = 'About';
        $data['folder'] = 'About';
        $data['style'] = 'About';
     $this->view('about/about'); 
    }
}
?>