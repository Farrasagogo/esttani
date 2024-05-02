<?php
// EduModel.php - File untuk mengakses dan mengambil data dari database

class EduModel {
    private $db;

    public function __construct() {
        $this->db = new Database(); 
    }
    // Fungsi untuk mengambil data edukasi dari database
    public function getEduData() {

        $this->db->query("SELECT * FROM edu");
        
        // Lakukan query ke database
        $result = $this->db->resultSet();
        return $result;
    }
}
?>
 