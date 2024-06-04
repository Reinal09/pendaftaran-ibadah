<?php
session_start();
include 'koneksi.php';

 if(!isset($_SESSION["id_admin"])) {
    header('location: login.php');
    exit;
} 

$kuota_pendaftaran = mysqli_query($conn, "SELECT * FROM kuota");

?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
    <title>Pendaftaran Ibadah Offline</title>
  <style>
    main {
      padding: 10px;
      overflow: auto;
    }

    #content {
      width: 100%;
      margin-top: 50px;
    }

    .card {
      padding: 20px;
    }

    .btn {
      color: black !important;
      box-shadow: 1px 1px 10px #E5E5E5;
      border: 1px solid #C3C3C3;
      margin: 20px 0;
      color: white;
    }

    .form-group {
      margin: 20px 0;
    }
  </style>

</head>

<body>
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="pendaftaran.php">Data Pendaftaran</a>
            <a class="nav-link active" aria-current="page" href="#">Kuota Ibadah</a>
            <a class="nav-link" href="logout.php" style="color: red;">Logout</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div id="content">
      <div class="container">
        <h5><strong>
            <center>Kuota Pendaftaran Ibadah Gereja Santo Markus Depok Timur</center>
          </strong></h5><br>
        <div class="card" style="border-top: 7px solid skyblue;">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Sabtu Sore</th>
                  <th scope="col">Minggu Pagi</th>
                  <th scope="col">Minggu Sore</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($kuota_pendaftaran as $kuota) : ?>
                  <tr>
                    <td><?= $kuota["sabtu_sore"]; ?></td>
                    <td><?= $kuota["minggu_pagi"]; ?></td>
                    <td><?= $kuota["minggu_sore"]; ?></td>
                    <td>
                      <a href="edit-kuota.php?id=<?= $kuota["id"]; ?>" class="btn" style="margin: 0;">Edit</a>
                    </td>
                  </tr>
                  <?php $i++; ?>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </main>



  <!-- Bootstrap Bundle with Popper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>