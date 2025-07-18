<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHOCO - Volunteer Form</title>
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

        .submit-btn {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 0.75rem 3rem;
            display: block;
            margin: 2rem auto;
        }

        .donate-link {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-label {
            margin-bottom: 0.5rem;
            font-weight: 500;
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
                <h2 class="form-header">Volunteer Form</h2>
            </div>

            <form action="https://api.web3forms.com/submit" method="POST">
                <input type="hidden" name="access_key" value="98e27dbe-3be7-4ba6-839c-d253b9161577">
                <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                </div>

                <div class="mb-3">
                    <label class="form-label">Picture:</label>
                    <input type="file" name="picture" class="form-control" placeholder="Upload Picture">
                </div>

                <div class="mb-3">
                    <label class="form-label">Activity:</label>
                    <input type="text" name="message" class="form-control" placeholder="Enter expedition">
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone Number:</label>
                    <input type="text" name="phone" class="form-control" placeholder="active on whatsapp">
                </div>


                <div class="mb-3">
                    <label class="form-label">Location:</label>
                    <input type="text" name="location" class="form-control" placeholder="Location of expedition">
                </div>

                <button type="submit" class="submit-btn">Submit</button>
            </form>

            <div class="donate-link">
                <a href="donate.php" class="text-primary">Donate to those in need</a>
            </div>

            <button class="submit-btn"><a href="map.php" class="text-white">Guide me to expedition</a></button>

        </div>
    </div>

    <footer>
        <div><?php include("footer.html")?></div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>