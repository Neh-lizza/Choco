<?php 
require_once 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $status = $_POST['status'];
        
        // Handle file upload
        $targetDir = "uploads/";
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        
        $imageFile = $_FILES["image"];
        $imageFileName = uniqid() . "_" . basename($imageFile["name"]);
        $targetFilePath = $targetDir . $imageFileName;
        
        if (move_uploaded_file($imageFile["tmp_name"], $targetFilePath)) {
            $stmt = $pdo->prepare("INSERT INTO products (name, description, status, image_path) VALUES (?, ?, ?, ?)");
            $stmt->execute([$name, $description, $status, $targetFilePath]);
            
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to upload image']);
        }
    } catch(PDOException $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

?>