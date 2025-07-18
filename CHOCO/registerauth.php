<?php
// Database configuration (same as before)
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'admin_database';

try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize inputs
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = $_POST['password']; // Get raw password for hashing
    $confirm_password = $_POST['confirm_password'];
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); // Validate email
    $purpose = filter_input(INPUT_POST, 'purpose', FILTER_SANITIZE_STRING);
    $picture = filter_input(INPUT_POST, 'picture', FILTER_SANITIZE_STRING); // Consider more robust file upload handling

    // Basic validation
    if (empty($username) || empty($password) || empty($email) || $email === false) {
        die("Please fill in all required fields correctly.");
    }

    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }
    
    //Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        $stmt = $pdo->prepare("INSERT INTO registers (username, password, email, purpose, picture) VALUES (:username, :password, :email, :purpose, :picture)");
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR); // Store hashed password
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':purpose', $purpose, PDO::PARAM_STR);
        $stmt->bindParam(':picture', $picture, PDO::PARAM_STR);
        $stmt->execute();

        $pfp = $_SESSION['picture'];
        $user = $_SESSION['username'];

        header("Location: login.php"); // Redirect AFTER successful insertion
        exit();

        } catch (PDOException $e) {
        // Handle specific database errors (e.g., duplicate username/email)
        if ($e->errorInfo[1] == 1062) { // MySQL error code for duplicate entry
            die("Username or email already exists.");
        } else {
            error_log("Database error: " . $e->getMessage());
            die("An error occurred during registration.");
        }
    }
}
?>
