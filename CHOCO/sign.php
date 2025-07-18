<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHOCO - Login</title>
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

        .form-container {
            background-color: #e9ecef;
            border-radius: 25px;
            padding: 2rem;
            max-width: 500px;
            margin: 2rem auto;
        }

        .logo-container {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .logo-container img {
            width: 60px;
            height: 60px;
        }

        .form-header {
            background-color: #6c757d;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 10px;
            margin-left: 1rem;
            flex-grow: 1;
        }

        .form-control {
            background-color: #6c757d;
            border: none;
            color: white;
            border-radius: 25px;
            padding: 0.75rem 1.5rem;
            margin-bottom: 1rem;
        }

        .form-control::placeholder {
            color: #e9ecef;
        }

        .btn {
            border-radius: 25px;
            padding: 0.75rem 3rem;
        }

        .login-btn {
            background-color: #007bff;
            color: white;
            border: none;
            margin-right: 1rem;
        }

        .guide-btn {
            background-color: #007bff;
            color: white;
            border: none;
            display: block;
            margin: 2rem auto;
            width: auto;
        }

        .form-label {
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-check {
            margin: 1rem 0;
        }

        .links-container {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin: 1rem 0;
        }

        .signup-container {
            text-align: center;
            margin: 1rem 0;
        }
        .submit-btn {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 0.75rem 3rem;
            display: block;
            margin: 2rem auto;
        }

    </style>
</head>
<body>
    <!-- Navigation -->
   <header>
    <div><?php include("header.html") ?></div>
   </header>
   <br><br><br>
    <!-- Form Container -->
    <div class="container">
        <div class="form-container">
            <div class="logo-container">
                <img src="img/logo.jpg" alt="CHOCO Logo">
                <h2 class="form-header">Login</h2>
            </div>

            <form method="post" action="loginauth.php">
                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter Name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>

                <div class="links-container">
                    <button type="submit" class="submit-btn">Login</button>
                </div>

                <div class="signup-container">
                    <span>Don't have an account? </span>
                    <a href="register.php" class="text-primary">Sign Up</a>
                </div>
            </form>

            <button class="submit-btn"><a href="map.php" class="text-white">Guide me to expedition</a></button>
        </div>
    </div>
    
    <footer>
        <div><?php include("footer.html") ?></div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>