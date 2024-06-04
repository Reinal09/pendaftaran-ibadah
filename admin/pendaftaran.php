<?php
session_start();
include 'koneksi.php';

if(!isset($_SESSION["id_admin"])) {
  header('location: login.php');
  exit;
} 

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
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
            <a class="nav-link active" aria-current="page" href="#">Data Pendaftaran</a>
            <a class="nav-link" href="kuota-update.php">Kuota Ibadah</a>
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
            <center>Data Pendaftaran Ibadah Gereja Santo Markus Depok Timur</center>
          </strong></h5><br>
          <div class="card" style="border-top: 7px solid skyblue;">
          <center> <a target="_blank" href="cetak.php" class="btn">Cetak Pendaftaran <i class="fa-solid fa-print"></i></a></center>
        <div class="table-responsive">
          <table id="tabel-data" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Usia</th>
                <th>Jenis Kelamin</th>
                <th>No Telp</th>
                <th>Jadwal</th>
                <th>Lingkungan</th>
                <th>Wilayah</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              $cari = mysqli_query($conn, "select * from tb_pendaftaran");
              while ($row = mysqli_fetch_array($cari)) {
                echo "<tr>
                <td>" . $i . "</td>
                <td>" . $row['nm_umat'] . "</td>
                <td>" . $row['usia'] . "</td>
                <td>" . $row['jk'] . "</td>
                <td>" . $row['no_telp'] . "</td>
                <td>" . $row['jd_ibadah'] . "</td>
                <td>" . $row['nm_lingkungan'] . "</td>
                <td>" . $row['nm_wilayah'] . "</td>
                <td>
                      <a href='edit.php?id_pendaftaran=" . $row['id_pendaftaran'] . "' class='btn'>EDIT</a>
                      <a href='hapus.php?id_pendaftaran=" . $row['id_pendaftaran'] . "' class='btn'>DELETE</a>
                </td>
                
            </tr>";
                $i++;
              }
              ?>
            </tbody>

            <script>
              $(document).ready(function() {
                $('#tabel-data').DataTable();
              });
            </script>

          </table>
        </div>
        </div>
      </div>
        </main>

        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>