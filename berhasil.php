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
    <main>
        <div id="content">
        <div class="container">

    <!-- box form first -->
    <div class="card" style="border-top: 7px solid skyblue;">

        <h2>Pendaftaran Berhasil</h2>

            <h4>Kode pendaftaran Anda adalah <?php echo $_GET['id'] ?></h4>
            <a href="cetak-bukti.php?id_pendaftaran=<?php echo $_GET['id'] ?>" target="_blank" class="btn-cetak">Cetak Bukti Pendaftaran</a>
        
        </div>
        </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>>