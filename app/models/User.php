<?php
class User {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }
    public function registerUser($username, $email, $password) {
        // You should perform validation and hashing of the password here
        // For example, you could hash the password before saving it to the database

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $this->db->query("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
        $this->db->bind(':name', $username);
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $hashedPassword);

        return $this->db->execute(); // Returns true if the insertion was successful, false otherwise
    }

    public function loginUser($email, $password) {
        // Logic for user login - check if the email exists and verify the password
        // Retrieve user data from the database based on the provided email
        $this->db->query("SELECT * FROM users WHERE email = :email");
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