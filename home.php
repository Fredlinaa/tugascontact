<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Contact Form Application</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; 
        }
        .navbar, .footer {
            background-color: #FF8C00; 
        }
        .navbar-brand, .footer p {
            color: white !important; 
        }
        .jumbotron {
            background-color: #FFA500; 
            color: white; 
        }
        .profile-img {
            border-radius: 50%;
            max-width: 150px;
            border: 5px solid white;
        }
    </style>
<head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Contact Form</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="jumbotron">
                    <img src="Fredlina.jpeg" alt="Profile" class="profile-img mb-4">
                    <h1>Welcome Gaes,hehehehhehe!!!!</h1>
                    <p class="lead">Hi im Fredlina Devhania Kholishah, kelas T3G</p>
                    <hr class="my-4" style="border-top: 1px solid white;">
                    <p>You can navigate to the Contact Us page to submit your information.</p>
                    <a class="btn btn-light btn-lg" href="index.php" role="button">Go to Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-white text-center py-3">
        <p>&copy; Tugas Contact Form Pemwork. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>