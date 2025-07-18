<?php
require_once 'db_connect.php';

// Handle product deletion
if (isset($_POST['delete_product'])) {
    $id = $_POST['product_id'];
    try {
        // Get image path before deleting
        $stmt = $pdo->prepare("SELECT image_path FROM products WHERE id = ?");
        $stmt->execute([$id]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Delete the image file if it exists
        if ($product && file_exists($product['image_path'])) {
            unlink($product['image_path']);
        }
        
        // Delete from database
        $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
        $stmt->execute([$id]);
        
        $success_message = "Product deleted successfully!";
    } catch(PDOException $e) {
        $error_message = "Error deleting product: " . $e->getMessage();
    }
}

// Handle product addition
if (isset($_POST['add_product'])) {
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
            
            $success_message = "Product added successfully!";
        } else {
            $error_message = "Failed to upload image.";
        }
    } catch(PDOException $e) {
        $error_message = "Error adding product: " . $e->getMessage();
    }
}

// Get all products
$stmt = $pdo->query("SELECT * FROM products ORDER BY created_at DESC");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Marketplace</a>
            <a class="btn btn-outline-light" href="index.php">View Magazine</a>
            <a class="btn btn-outline-light" href="mag.php">View choco - Magazine</a>
        </div>
    </nav>

    <div class="container py-5">
        <h1 class="mb-4">Admin Dashboard</h1>

        <?php if (isset($success_message)): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($success_message); ?></div>
        <?php endif; ?>

        <?php if (isset($error_message)): ?>
            <div class="alert alert-danger"><?php echo htmlspecialchars($error_message); ?></div>
        <?php endif; ?>
        
        <!-- Add Product Form -->
        <div class="card mb-4">
            <div class="card-header">
                <h3>Add New Product</h3>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" name="status">
                            <option value="available">Available</option>
                            <option value="in_use">In Use</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Image</label>
                        <input type="file" class="form-control" name="image" accept="image/*" required>
                    </div>
                    <button type="submit" name="add_product" class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>

        <!-- Products List -->
        <div class="card">
            <div class="card-header">
                <h3>Current Products</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td>
                                        <img src="<?php echo htmlspecialchars($product['image_path'] ?? 'placeholder.jpg'); ?>" 
                                             alt="<?php echo htmlspecialchars($product['name']); ?>" 
                                             style="height: 50px; width: 50px; object-fit: cover;">
                                    </td>
                                    <td><?php echo htmlspecialchars($product['name']); ?></td>
                                    <td><?php echo htmlspecialchars($product['description']); ?></td>
                                    <td>
                                        <span class="badge <?php echo $product['status'] === 'available' ? 'bg-success' : 'bg-secondary'; ?>">
                                            <?php echo htmlspecialchars($product['status']); ?>
                                        </span>
                                    </td>
                                    <td>
                                        <form method="POST" style="display: inline;">
                                            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                            <button type="submit" name="delete_product" class="btn btn-danger btn-sm" 
                                                    onclick="return confirm('Are you sure you want to delete this product?');">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>