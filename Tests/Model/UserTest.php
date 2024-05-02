
<?php
require_once 'C:/xampp/htdocs/esttani/app/models/User.php';
require_once 'C:/xampp/htdocs/esttani/app/core/Database.php';
require_once 'C:/xampp/htdocs/esttani/app/config/config.php';
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {
    public function testRegisterUser() {
        // Mock the Database class
        $mockDb = $this->createMock(Database::class);

        // Set up expectations for the mock object
        $mockDb->expects($this->once())
               ->method('query')
               ->willReturn($mockDb); // Return the mock database object

        $mockDb->expects($this->exactly(3)) // Expecting three binds
               ->method('bind')
               ->willReturn($mockDb);

        $mockDb->expects($this->once())
               ->method('execute')
               ->willReturn(true); // Simulating successful execution

        // Create an instance of the User class with the mocked Database
        $user = new User($mockDb);

        // Test the registerUser method
        $result = $user->registerUser('testuser', 'test@example.com', 'testpassword');
        $this->assertTrue($result);
    }

    public function testLoginUser() {
        // Mock the Database class
        $mockDatabase = $this->createMock(Database::class);

        // Set up expectations for the mock object
        $mockDatabase->expects($this->once())
                     ->method('query')
                     ->willReturn(['password' => '$2y$10$fakehashedpassword']); // Simulating a fetched password from the database

        // Create an instance of the User class with the mocked Database
        $user = new User($mockDatabase);

        // Test the loginUser method
        $result = $user->loginUser('test@example.com', 'testpassword');
        $this->assertFalse($result); // Assuming the user isn't in the database yet
    }
}


?>