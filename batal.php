<?php
session_start();
include_once 'koneksi.php';

if(isset($_POST['delete'])) {

    $id = $_POST['id'];
    $query = mysqli_query($conn, "DELETE FROM tb_pendaftaran WHERE id_pendaftaran ='$id' "); 

    if ($query){
        echo '<script> alert("Data Delete") </script>';
    } else {
        echo '<script> alert ("Data Not Delete" </script>)';
    }

}

?>


<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
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
                    <a class="nav-link"  href="index.php">ST. MARKUS</a>
                    <a class="nav-link" href="pendaftaran.php">Pendaftaran Ibadah</a>
                    <a class="nav-link" href="kuota.php">Kuota Ibadah</a>
                    <a class="nav-link active" aria-current="page" href="batal.php">Batalkan Jadwal</a>
                </div>
            </div>
        </div>
        </nav>
    </header>
    <!-- Nav Section End -->

      <main>
        <div id="content">
          <div class="container">
            <h5><strong><center>Pembatalan Jadwal Ibadah Gereja Santo Markus Depok Timur</center></strong></h5><br>
            <form action="" method="POST">
              <div class="card" style="border-top: 7px solid skyblue;">
                <label for="" class="form-label">Masukkan Kode Pendaftaran</label>
                <input type="text" name="id" class="form-control">
            </form>
                <center><input type="submit" name="delete" class="btn btn-danger" value="Batalkan Pendaftaran"></input></center>
          </div>
        </div>
      </main>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>