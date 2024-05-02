<?php
class AdminMenu extends Controller {
    public function index() {
        $data['judul'] = 'AdminMenu';
        $data['folder'] = 'AdminMenu';
        $data['style'] = 'AdminMenu';
     $this->view('adminmenu/adminmenu'); 
    }
}
?>