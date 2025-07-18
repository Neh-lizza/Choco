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
        $username = $_POST['username'];
        $password = md5($_POST['password']); // Note: md5 is not secure, consider using password_hash instead

        // Prepare and execute query using prepared statements
        $stmt = $pdo->prepare("SELECT * FROM registers WHERE username = :username");
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        // Check if user exists
        if ($stmt->rowCount() > 0) {
            $userData = $stmt->fetch(PDO::FETCH_ASSOC);

            if($password == $userData['password']) {
                $user = $_SESSION['username'];
                  header("Location: dashboardUser.php");
                exit(); // Important: Always exit after header redirect
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
            <p style="text-decoration: none;">Try <a href="sign.php">Login</a> again?</p>
          </div>';
}
?>