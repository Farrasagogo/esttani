<?php
class Admin {
    private $db;

    public function __construct() {
        $this->db = new Database(); // Assuming Database.php contains your database connection logic
    }

  

    public function loginUser($email, $password) {
        // Logic for user login - check if the email exists and verify the password
        // Retrieve user data from the database based on the provided email
        $this->db->query("SELECT * FROM admin WHERE email = :email");
        $this->db->bind(':email', $email);
        $row = $this->db->single();
    
        if ($row) {
            // Verify the password using password_verify
            $hashedPassword = $row['password'];
            if (password_verify($password, $hashedPassword)) {
                // Password is correct, return user data
                return $row;
            }
        }
    
        // Invalid email or password
        return false;
    }
    
    // Other methods like updateUser, deleteUser, getUserById, etc., can be added here
}
?>