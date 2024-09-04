<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Form using PHP and MySQL</title>
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
        .card-header {
            background-color: #FFA500; 
            color: white; 
        }
        .btn-success {
            background-color: #FF8C00; 
            border-color: #FF8C00; 
        }
        .btn-danger {
            background-color: #FF4500; 
            border-color: #FF4500; 
        }
        .btn-success:hover, .btn-danger:hover {
            opacity: 0.9; 
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">Contact Form</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Contact Us <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Contact Us</h3>
                    </div>
                    <div class="card-body">
                        <form action="form-process.php" method="POST">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" name="nim" id="nim" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" name="phone" id="phone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="l" required>
                                    <label class="form-check-label" for="gender1">Laki-laki</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gender2" value="p" required>
                                    <label class="form-check-label" for="gender2">Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kritik">Kritik</label>
                                <textarea name="kritik" id="kritik" class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-danger" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
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