<?php
use PHPUnit\Framework\TestCase;

require_once '/xampp/htdocs/esttani/app/controllers/Register.php';

class RegisterTest extends TestCase {
    public function testProcessRegistration() {
        // Simulate POST request data
        $_POST['name'] = 'testuser';
        $_POST['email'] = 'test@example.com';
        $_POST['password'] = 'testpassword';

        $register = new Register();
        $reflection = new ReflectionClass($register);
        $method = $reflection->getMethod('processRegistration');
        $method->setAccessible(true);

        $result = $method->invoke($register);
        $this->assertNull($result); // Assuming no return value or specific assertion

        // Add assertions as per your logic in the method
    }

    // You can write similar tests for other controller methods
}
?>