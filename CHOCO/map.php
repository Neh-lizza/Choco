<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHOCO - Map</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .nav-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
            padding: 10px;
        }

        .nav-bar a {
            margin: 0 15px;
            text-decoration: none;
            color: #000;
        }

        .map-container {
            text-align: center;
            margin: 20px 0;
        }

        iframe {
            width: 100%;
            height: 400px;
            border: none;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }

        .footer a {
            font-size: 18px;
            text-decoration: none;
            color: black;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .action-button {
            margin: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="nav-bar">
        <?php include("header.html") ?>
    </div>
<br><br><br>
    <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2027711.8255218716!2d11.502116587174888!3d5.611917236482858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10fc4c73e8ba5bd7%3A0x9c8df60d4f84726e!2sCameroon!5e0!3m2!1sen!2sus!4v1704591987226!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>    </div>

    <div class="action-button">
        <a href="volunteer.php" class="btn btn-primary">Volunteer</a>
        <a href="donate.php" class="btn btn-primary">Donate</a>
    </div>

    <div class="footer">
        <?php include("footer.html") ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
