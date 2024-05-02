<?php

class TransactionController extends Controller {
    
    public function index() {
        $idsesi = $_SESSION['id'];
        $transactionModel = $this->model('TransactionModel');
        
        // Get transactions data from the model
        $data['transactions'] = $transactionModel->getAllTransactionsSpesific($idsesi); // Method to retrieve transactions
        
        // Load view with transactions data
        $this->view('orders/orders', $data); // Assuming the view file is in 'transactions' folder and named 'index.php'
    }
}
?>
