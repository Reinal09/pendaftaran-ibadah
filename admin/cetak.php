<?php
session_start();
include 'koneksi.php';

if(!isset($_SESSION["id_admin"])) {
  header('location: login.php');
  exit;
} 

//  if(!isset($_SESSION["admin"])) {
//     header('location: login.php');
//     exit;
// } 

$pendaftaran = mysqli_query($conn, "SELECT * FROM tb_pendaftaran"); 

?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
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
          <main>
            <div id="content">
                <div class="container">
                <h5><strong><center>Data Pendaftaran Ibadah Gereja Santo Markus Depok Timur</center></strong></h5><br>
              <div class="card" style="border-top: 7px solid skyblue;">
                <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Usia</th>
                      <th scope="col">Nomor HP</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Jadwal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pendaftaran as $pendaftar) : ?>
                    <tr>
                      <th scope="row"><?= $i; ?></th>
                      <td><?= $pendaftar["nm_umat"]; ?></td>
                      <td><?= $pendaftar["usia"]; ?></td>
                      <td><?= $pendaftar["no_telp"]; ?></td>
                      <td><?= $pendaftar["jk"]; ?></td>
                      <td><?= $pendaftar["jd_ibadah"]; ?></td>
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
     <script>
      window.print();
    </script>
</body>
</html>