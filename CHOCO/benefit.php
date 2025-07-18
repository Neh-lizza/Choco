<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHOCO - Beneficiary Form</title>
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

        .submit-btn {
            background-color: #007bff;
            color: white;
            border: none;
            display: block;
            margin: 2rem auto;
        }

        .guide-btn {
            background-color: #007bff;
            color: white;
            border: none;
            display: block;
            margin: 0 auto;
            width: auto;
        }

        .form-label {
            margin-bottom: 0.5rem;
            font-weight: 500;
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
                <h2 class="form-header">Beneficiary Form</h2>
            </div>

            <form action="https://api.web3forms.com/submit" method="POST">
                <input type="hidden" name="access_key" value="98e27dbe-3be7-4ba6-839c-d253b9161577">
                <input type="checkbox" name="botcheck" class="hidden" style="display: none;">


                <div class="mb-3">
                    <label class="form-label">Name Of Institution:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone Number:</label>
                    <input type="text" name="phone" class="form-control" placeholder="active on whatsapp">
                </div>

                <div class="mb-3">
                    <label class="form-label">Interest:</label>
                    <input type="text" name="message" class="form-control" placeholder="What are you in need of" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone number:</label>
                    <input type="tel" name="number" class="form-control" placeholder="Enter phone number" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Location:</label>
                    <input type="text" name="location" class="form-control" placeholder="where are you located e.g Buea, miss-bight" required>
                </div>

                <button type="submit" class="submit-btn">Submit</button>
            </form>

        </div>
    </div>
    <footer>
        <div><?php include("footer.html") ?></div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>