<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHOCO - About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            color: white;
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #f8f9fa; /* Light container background */
            padding: 20px;
            border-radius: 8px;
            color: black;
        }
        .card {
            margin-bottom: 10px;
            text-align: center;
            color: white;
        }
        .card-body {
            padding: 10px;
        }
        .card-title {
            font-size: 1.2rem;
        }
        .floating-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: white;
            color: black;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            cursor: pointer;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }
        .bottom-right-indicator {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 20px;
            background-color: #dc3545;
            border-radius: 5px;
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
    <header>
        <div><?php include("header.html") ?></div>
    </header>

    <div class="">
        <h1 class="text-center mt-4">About Us</h1>

        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Visitors</h5>
                        <p>65.51% increase</p>
                        <p>in our blog and our website</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="background-color: #dc3545;">
                    <div class="card-body">
                        <h5 class="card-title">Visitors</h5>
                        <p>22% increase</p>
                        <p>in our blog and our website</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-primary">
                    <div class="card-body">
                        <h5 class="card-title">Visitors</h5>
                        <p>7% increase</p>
                        <p>in our blog and our website</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="background-color: #17a2b8;">
                    <div class="card-body">
                        <h5 class="card-title">Visitors</h5>
                        <p>22% increase</p>
                        <p>in our blog and our website</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Visitors</h5>
                        <p>94% increase</p>
                        <p>in our blog and our website</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="background-color: #28a745;">
                    <div class="card-body">
                        <h5 class="card-title">Visitors</h5>
                        <p>45.9% increase</p>
                        <p>in our blog and our website</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="background-color: #6f42c1;">
                    <div class="card-body">
                        <h5 class="card-title">Visitors</h5>
                        <p>27% increase</p>
                        <p>in our blog and our website</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="background-color: #e83e8c;">
                    <div class="card-body">
                        <h5 class="card-title">Visitors</h5>
                        <p>3% increase</p>
                        <p>in our blog and our website</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <button class="floating-button submit-btn"><a href="donate.php" class="btn btn-primary">Donate</a></button>
        <div class="bottom-right-indicator"></div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>