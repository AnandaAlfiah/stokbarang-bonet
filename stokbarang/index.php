<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventoris PT Bonet Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
        }
        .navbar-custom {
            background-color: #B83C08;
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: #fff;
        }
        .navbar-custom .nav-link:hover {
            color: #000;
        }
        .hero-section {
            background-color: #fff;
            padding: 40px 0;
            text-align: center;
        }
        .content-section {
            margin-top: 20px;
            background: #fff;
            padding: 40px;
        }
        .footer-custom {
            background-color: #B83C08;
            color: #fff;
            padding: 15px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Bonet Utama</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pemasukan.php">Pemasukan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pengeluaran.php">Pengeluaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <div class="hero-section text-center">
            <h1>Selamat Datang di Inventoris PT Bonet Utama</h1>
            <p>Anda sedang berada dalam mode User</p>
        </div>

        <div class="content-section">
            <h2 class="text-center mt-4">About Us</h2>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="img/Gambar1.jpeg" class="img-fluid" alt="About Us">
                </div>
                <div class="col-md-6">
                    <p>Selamat datang di EcoGreen Company, di mana kami membuka pintu bagi perubahan positif dalam perlindungan lingkungan. Kami telah siap berjalan dalam misi kami untuk menjaga dan melindungi bumi kita.</p>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h2 class="text-center mt-4">Layanan Kami</h2>
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="img/Gambar2.jpeg" class="img-fluid" alt="Main Image">
                </div>
                <div class="col-md-6">
                    <ul>
                        <li>Pelestarian Alam</li>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor tempora at labore nisi reiciendis ab expedita, perspiciatis provident? Mollitia praesentium nobis voluptatibus amet nesciunt ut voluptate molestias vel error sequi.</p>
                        <li>Energi Terbarukan</li>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, reprehenderit modi magnam odit rerum quia, laudantium, eum quod veritatis impedit culpa porro architecto debitis commodi dolorum quam quasi iste deserunt.</p>
                        <li>Pendidikan Lingkungan</li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis maxime officia, natus sunt amet eos quidem totam, necessitatibus ipsum doloremque animi perferendis repellendus odio alias atque, ab exercitationem nesciunt! Culpa.</p>
                    </ul>
                </div>
            </div>
        </div>
    </div>

        <footer class="footer-custom mt-5">
            <div class="container">
                <p>&copy; 2024 by PT Bonet Utama. All rights reserved.</p>
            </div>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
