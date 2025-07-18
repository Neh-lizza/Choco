<?php
// Configuration
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'admin_database';

// Connect to database using PDO
try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

session_start();

// Handle login request
if($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $userInput = $_POST['userInput'];
        $password = $_POST['password'];

        // Prepare and execute query using prepared statements
        $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = :userInput OR email = :userInput");
        $stmt->bindParam(':userInput', $userInput, PDO::PARAM_STR);
        $stmt->execute();

        // Check if user exists
        if ($stmt->rowCount() > 0) {
            $userData = $stmt->fetch(PDO::FETCH_ASSOC);

            if($password == $userData['password']) {
                 $username = $_SESSION['username'];
                 $pfpA = $_SESSION['profile_picture'];
                
                
                        header("Location: dashboardAdmin.php");
                        
                
                exit(); 
            } else {
                showError();
            }
        } else {
            showError();
        }
    } catch(PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}

// Helper function to show error message
function showError() {
    echo '<div style="border: 1px solid black" class="form">
            <h3>Incorrect Username or password.</h3><br/>
            <p style="text-decoration: none;">Try <a href="loginAdmin.php">Login</a> again?</p>
          </div>';
}
?>