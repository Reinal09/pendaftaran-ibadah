<?php
  session_start();
  include 'koneksi.php';
  
   if(!isset($_SESSION["id_admin"])) {
      header('location: login.php');
      exit;
  } 

  $id = $_GET['id_pendaftaran'];
  $data = mysqli_query($conn, "select * from tb_pendaftaran where id_pendaftaran='$id'");
  while ($pendaftaran = mysqli_fetch_array($data)) {
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

  <!-- <h2>Edit Ibadah</h2> -->
  
  <br />
  <h3></h3


    <main>
      <div id="content">
        <div class="container">
          <h5><strong>
              <center>Edit Data Pendaftaran Ibadah Gereja Santo Markus Depok Timur</center>
            </strong></h5><br>
          <div class="card" style="border-top: 7px solid skyblue;">
            <!-- Form -->
            <!-- <br />
            <a href="pendaftaran.php" class="btn btn-dark bg-light">Pendaftaran</a>
            <br /> -->
            <section id="form" class="form">
              <div class="container">
                <form action="update.php" method="post">
                  <input type="hidden" name="id_pendaftaran" id="id" value="<?= $pendaftaran["id_pendaftaran"]; ?>">
                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nm_umat" id="nama" class="form-control" placeholder="Masukkan Nama Lengkap Anda" value="<?= $pendaftaran["nm_umat"]; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="usia">Usia</label>
                    <input type="number" name="usia" id="usia" class="form-control" placeholder="Masukkan Usia Anda" max=100 value="<?= $pendaftaran["usia"]; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="nohp">No. Handphone <small>(Whatsapp Aktif)</small></label>
                    <input type="number" name="no_telp" id="nohp" class="form-control" pattern="[0-9]{4}-[0-9]{4}-[0-9]{0-5}" value="<?= $pendaftaran["no_telp"]; ?>" placeholder="Masukkan Nomor Handphone Anda" required>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamain</label> <br>
                    <div class="form-check-inline">
                      <?php if ($pendaftaran["jk"] == "Laki-laki") : ?>
                        <input type="radio" class="form-check-input" name="jk" id="jenis_kelamin" value="Laki-Laki" checked required>
                      <?php else : ?>
                        <input type="radio" class="form-check-input" name="jk" id="jenis_kelamin" value="Laki-Laki" required>
                      <?php endif; ?>

                      Laki-laki
                    </div>

                    <div class="form-check-inline">
                      <?php if ($pendaftaran["jk"] == "Perempuan") : ?>
                        <input type="radio" class="form-check-input" name="jk" id="jenis_kelamin" value="Perempuan" checked required>
                      <?php else : ?>
                        <input type="radio" class="form-check-input" name="jk" id="jenis_kelamin" value="Perempuan" required>
                      <?php endif; ?>

                      Perempuan
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="jadwal">Jadwal Ibadah</label>
                    <select name="jd_ibadah" id="jadwal" class="form-control" required>
                      <option value="">--Silahkan Pilih--</option>
                      <?php if ($pendaftaran["jd_ibadah"] == "Sabtu Sore") : ?>
                        <option value="Sabtu Sore" selected>Sabtu Sore</option>
                      <?php else : ?>
                        <option value="Sabtu Sore">Sabtu Sore</option>
                      <?php endif; ?>

                      <?php if ($pendaftaran["jd_ibadah"] == "Minggu Pagi") : ?>
                        <option value="Minggu Pagi" selected>Minggu Pagi</option>
                      <?php else : ?>
                        <option value="Minggu Pagi">Minggu Pagi</option>
                      <?php endif; ?>

                      <?php if ($pendaftaran["jd_ibadah"] == "Minggu Sore") : ?>
                        <option value="Minggu Sore" selected>Minggu Sore</option>
                      <?php else : ?>
                        <option value="Minggu Sore">Minggu Sore</option>
                      <?php endif; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="wilayah">Wilayah</label>
                    <select name="nm_wilayah" id="wilayah" class="form-control" required>
                      <option value="">--Silahkan Pilih--</option>
                      <option value="<?= $pendaftaran['nm_wilayah']; ?>" selected><?= $pendaftaran['nm_wilayah']; ?></option>
                      <option value="fransiskus xaverius">Fransiskus Xaverius</option>
                      <option value="aloysius gonzaga">Aloysius Gonzaga</option>
                      <option value="benedictus">Benedictus</option>
                      <option value="theresia">Theresia</option>
                      <option value="blasius">Blasius</option>
                      <option value="christina">Christina</option>
                      <option value="yustinus">Yustinus</option>
                      <option value="ignatius">Ignatius</option>
                      <option value="bertinus">Bertinus</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="lingkungan">Lingkungan</label>
                    <select name="nm_lingkungan" id="lingkungan" class="form-control" required>
                      <option value="">--Silahkan Pilih--</option>
                      <option value="<?= $pendaftaran['nm_lingkungan']; ?>" selected><?= $pendaftaran['nm_lingkungan']; ?></option>
                      <option value="fransiskus asisi">Fransiskus Asisi</option>
                      <option value="yohanes maria vianney">Yohanes Maria Vianney</option>
                      <option value="brigita">Brigita</option>
                      <option value="lukas">Lukas</option>
                      <option value="bartolomeus">Bartolomeus</option>
                      <option value="bernadeth">Bernadeth</option>
                      <option value="maria immaculata">Maria Immaculata</option>
                      <option value="bonaventura">Bonaventura</option>
                      <option value="anna">Anna</option>
                      <option value="agustinus">Agustinus</option>
                      <option value="maria magdalena">Maria Magdalena</option>
                      <option value="maria margareta">Maria Margareta</option>
                      <option value="thomas">Thomas</option>
                      <option value="ursula">Ursula</option>
                      <option value="lusia">Lusia</option>
                      <option value="cesilia">Cesilia</option>
                      <option value="elisabeth">Elisabeth</option>
                      <option value="gregorius">Gregorius</option>
                      <option value="clara">Clara</option>
                      <option value="stefanus">Stefanus</option>
                      <option value="vincentius">Vincentius</option>
                      <option value="angela">Angela</option>
                    </select>
                  </div>
                  <div class="form-group text-center mt-5">
                    <button type="submit" class="btn">Ubah Data</button>
                  </div>
                </form>
              </div>
            </section>

            <!-- Akhir Form -->
          </div>
        </div>
    </main>
  <?php
  }
  ?>

</body>

</html>