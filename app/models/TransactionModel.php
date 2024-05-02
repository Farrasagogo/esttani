<?php
class TransactionModel {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllTransactionsSpesific($idsesi) {
        $this->db->query('SELECT * FROM transaksi WHERE pelanggan_id = :id' );
        $this->db->bind(':id', $idsesi);
        return $this->db->resultSet();

    }
    public function getAllTransactions() {
        $this->db->query('SELECT * FROM transaksi');
        return $this->db->resultSet();
    }

    public function updateTransactionStatus($transactionId, $newStatus) {
        $this->db->query('UPDATE transaksi SET status = :newStatus WHERE id = :id');
        $this->db->bind(':id', $transactionId);
        $this->db->bind(':newStatus', $newStatus);
        return $this->db->execute();
    }
}
?>
