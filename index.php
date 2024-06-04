<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
    <title>Pendaftaran Ibadah Offline</title>

</head>
<body>


<!-- Nav Section First -->
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">ST. MARKUS</a>
                    <a class="nav-link" href="pendaftaran.php">Pendaftaran Ibadah</a>
                    <a class="nav-link" href="kuota.php">Kuota Ibadah</a>
                    <a class="nav-link" href="batal.php">Batalkan Jadwal</a>
                </div>
            </div>
        </div>
        </nav>
    </header>

    <main>
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <img src="img/jumbotron.jpg" width="75%" class="">
                <h1 class="display-4">Gereja Santo Markus Depok Dua Timur</h1>
                <p class="h3">PANDUAN MENDAFTAR & MEMBATALKAN JADWAL IBADAH</p> 
                <p><b>
                1. Tiket tidak dapat dipindahtangankan. <br>
                2. Jika mendaftar atau membatalkan jadwal sebaiknya dilakukan 1 jam sebelum ibadah dimulai. <br>
                3. Check-in tersedia 1 jam sebelum ibadah mulai. <br>
                4. Jika berhalangan, batalkan tiket di halaman BATALKAN JADWAL untuk memberikan kursi ke orang lain. <br>
                5. Kuota setiap jadwal ibadah tersedia 200 kursi. <br>
                6. Screenshot atau simpan formulir pendaftaran setelah mengisi formulir untuk diberikan ke penjaga. <br>
                </b></p>
            </div>
        </div>
    </main>
    <!-- Nav Section End -->
    



    <!-- Bootstrap Bundle with Popper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>