<?php
class AdminTransactionController extends Controller {
    
    public function index() {
        // Check if the user is an admin (you may have your own authentication logic)
        // For example, if ($_SESSION['user_role'] !== 'admin') { ... }
        
        // Load the model
        $transactionModel = $this->model('TransactionModel');
        
        // Get transactions data from the model
        $data['transactions'] = $transactionModel->getAllTransactions();
        $this->updateStatus();
        // Load view with transactions data
        $this->view('adminorder/adminorder', $data);
    }

    public function updateStatus() {
        // Check if the user is an admin
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the updated status and transaction ID from POST request
        $newStatus = $_POST['new_status'];
        $transactionId = $_POST['transaction_id'];
        
        // Update the transaction status in the database using the model
        $transactionModel = $this->model('TransactionModel');
        $isUpdated = $transactionModel->updateTransactionStatus($transactionId, $newStatus);
        
        if ($isUpdated) {
            header('Location: ' . BASEURL . '/AdminTransactionController'); 
            exit();
        } else {
            // Handle update failure
        }
    }
    }
}
?>
