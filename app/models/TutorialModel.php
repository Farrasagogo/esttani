<?php
class TutorialModel {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    // Method untuk mengambil semua data tutorial
    public function getAllTutorials($passedId) {
        $this->db->query('SELECT * FROM edu
        WHERE id = :detail_edu_id');
        $this->db->bind(':detail_edu_id', $passedId);
        return $this->db->resultSet();
    }
}
?>
