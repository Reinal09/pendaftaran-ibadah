<?php 
session_start();
include 'koneksi.php';

 if(!isset($_SESSION["id_admin"])) {
    header('location: login.php');
    exit;
} 

  $id = $_GET['id'];
  $data = mysqli_query($conn, "select * from kuota where id='$id'");
  while ($d = mysqli_fetch_array($data)) {

    if (isset($_POST["submit"])) {
      if (($_POST) > 0 ) {
        echo "
          <script>
            alert('Kuota Berhasil Diubah!');
            document.location.href = 'kuota.php';
          </script>
        ";
      } else {
        echo "
          <script>
            alert('Kuota Gagal Diubah!');
            document.location.href = 'kuota.php';
          </script>
        ";
      }
    }

?>
<!DOCTYPE html>
<html>

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
      padding: 50px;
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

<body>

<br/>
  <h3></h3

    <main>
    <div id="content">
      <div class="container">
      <h5><strong>
        <center>Edit Kuota Pendaftaran Ibadah Gereja Santo Markus Depok Timur</center>
      </strong></h5><br>
      <div class="card" style="border-top: 7px solid skyblue;">
        <section id="form" class="form">
          <div class="container">
          <!-- <form method="post" action="kuota-update.php">
      <table>
        <tr>
          <td>Sabtu Sore</td>
          <td>
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
            <input type="text" name="sabtu_sore" value="<?php echo $d['sabtu_sore']; ?>">
          </td>
        </tr>
        <tr>
          <td>Minggu Pagi</td>
          <td><input type="number" name="minggu_pagi" value="<?php echo $d['minggu_pagi']; ?>"></td>
        </tr>
        <tr>
          <td>Minggu Sore</td>
          <td><input type="text" name="minggu_sore" value="<?php echo $d['minggu_sore']; ?>"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="SIMPAN"></td>
        </tr>
      </table>
    </form> -->

    <section id="form" class="form">
        <div class="container">
            <form action="kuota-update.php" method="post">
                <input type="hidden" name="id" id="id" value="<?= $d["id"]; ?>">
                <div class="form-group">
                    <label for="sabtu_sore">Sabtu Sore</label>
                    <input type="text" name="sabtu_sore" id="sabtu_sore" class="form-control" placeholder="Masukkan Nama Lengkap Anda" value="<?= $d["sabtu_sore"]; ?>" required>
                </div>
                <div class="form-group">
                    <label for="minggu_pagi">Minggu Pagi</label>
                    <input type="text" name="minggu_pagi" id="minggu_pagi" class="form-control" placeholder="Masukkan Nama Lengkap Anda" value="<?= $d["minggu_pagi"]; ?>" required>
                </div>
                <div class="form-group">
                    <label for="minggu_sore">Minggu Sore</label>
                    <input type="text" name="minggu_sore" id="minggu_sore" class="form-control" placeholder="Masukkan Nama Lengkap Anda" value="<?= $d["minggu_sore"]; ?>" required>
                </div>
                <div class="form-group text-center mt-5">
                    <button type="submit" name="submit" class="btn">Ubah Kuota</button>
                </div>
            </form>
        </div>
    </section>

          </div>
        </section>
      </div>
    </div>
    </div>
    </main>
  <?php
  }
  ?>

</body>

</html>