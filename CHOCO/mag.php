<?php 
require_once 'db_connect.php';
$stmt = $pdo->query("SELECT * FROM products ORDER BY created_at DESC");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHOCO - Magazine</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff;
        }

        .navbar {
            background-color: #e9ecef;
            border-radius: 25px;
            padding: 0.5rem 1rem;
            margin: 1rem;
        }

        .navbar-brand img {
            width: 40px;
            height: 40px;
        }

        .nav-link {
            color: #000;
            padding: 0.5rem 1rem;
        }

        .nav-link.active {
            color: #007bff;
        }

        .categories {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin: 2rem 0;
        }

        .category-btn {
            background-color: #e9ecef;
            border: none;
            padding: 0.5rem 2rem;
            border-radius: 10px;
            color: #000;
        }

        .items-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            padding: 1rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .item-card {
            background-color: #e9ecef;
            border-radius: 15px;
            padding: 1rem;
            text-align: center;
            position: relative;
        }

        .item-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 0.5rem;
        }

        .status-badge {
            position: absolute;
            bottom: 45px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            padding: 0.25rem 1rem;
            border-radius: 15px;
        }

        .in-use {
            background-color: #dc3545;
        }

        .available {
            background-color: #28a745;
        }

        .donate-btn {
            position: fixed;
            bottom: 2rem;
            left: 2rem;
            background-color: #fff;
            border: none;
            padding: 0.5rem;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 24px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        .product-card {
            transition: transform 0.2s;
        }
        .product-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 4px 15px rgba(19, 19, 17, 0.1);
        }
        .status-badge {
            position: absolute;
            button: 10px;
            height: 10%;
            width: 65%;
        }
        header{
            height: 10%;
        }
        main{
            height: 80%;
        }
        footer{
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <header>
    <div><?php include("header.html") ?></div>
   </header>
   <br><br><br>

   <main>

    <!-- Categories -->
    <div class="categories">
        <button class="category-btn">Clothing</button>
        <button class="category-btn">Food</button>
        <button class="category-btn">Cleaner</button>
        <button class="category-btn">Tutor</button>
    </div>

    <!-- Items Grid -->
    <div class="container py-5">
        <center><h1>Products</h1></center>
        <div class="row">
            <?php foreach ($products as $product): ?>
                <div class="col-md-4 mb-4">
                    <div class="card product-card">
                        <img src="<?php echo htmlspecialchars($product['image_path'] ?? 'placeholder.jpg'); ?>" 
                             class="card-img-top" 
                             alt="<?php echo htmlspecialchars($product['name']); ?>"
                             style="height: 200px; object-fit: cover;">
                        <span class="badge <?php echo $product['status'] === 'available' ? 'bg-success' : 'bg-secondary'; ?> status-badge">
                            <?php echo htmlspecialchars($product['status']); ?>
                        </span>
                       
                    </div> <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($product['description']); ?></p>
                        </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Donate Button -->
    <button class="donate-btn">+</button>
    <br><br><br>
    <br><br><br>
    <br><br><br>
   </main>
    <footer>
        <div><?php include("footer.html") ?></div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>