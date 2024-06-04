<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])){

        // mengambil 1 id terbesar di kolom id_pendaftaran, lalu mengambil 5 karakter saja dari sebelah kanan
        $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");
        $d = mysqli_fetch_object($getMaxId);
        $generateId = 'P'.date('md'). sprintf("%05s", $d->id + 1);
        
        // proses insert
        $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES (
                '".$generateId."',
                '".date('Y-m-d')."',
                '".$_POST['nm']."',
                '".$_POST['us']."',
                '".$_POST['jk']."',
                '".$_POST['jd_ibadah']."',
                '".$_POST['wilayah']."',
                '".$_POST['lingkungan']."',
                '".$_POST['phone']."'
            )");

        if($insert){
            echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
        }else{
            echo 'salah'.mysqli_error($conn);
        }


    }

    $kuota_pendaftaran = mysqli_query($conn, "SELECT * FROM kuota");
foreach ($kuota_pendaftaran as $kuota) {}

$sabtu_sore = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE jd_ibadah = 'Sabtu Sore'");
$total_sabtu_sore = mysqli_num_rows($sabtu_sore);

$minggu_pagi = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE jd_ibadah = 'Minggu Pagi'");
$total_minggu_pagi = mysqli_num_rows($minggu_pagi);

$minggu_sore = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE jd_ibadah = 'Minggu Sore'");
$total_minggu_sore = mysqli_num_rows($minggu_sore);
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
                    <a class="nav-link active" aria-current="page" href="pendaftaran.php">Pendaftaran Ibadah</a>
                    <a class="nav-link" href="kuota.php">Kuota Ibadah</a>
                    <a class="nav-link" href="batal.php">Batalkan Jadwal</a>
                </div>
            </div>
        </div>
        </nav>
    </header>
    <!-- Nav Section End -->

    <!-- TITLE -->
    <main>
        <div id="content">
            <div class="container">
                <h5><strong><center>Form Pendaftaran Ibadah Gereja Santo Markus Depok Timur</center></strong></h5><br>
                <h5><strong><center>Sebelum mengikuti ibadah, seluruh umat diwajibkan untuk mengisi segala bentuk informasi yang dibutuhkan secara <b>JUJUR</b> dan <b>AKURAT</b>. Seluruh informasi dalam proses pendaftaran akan menjadi database yang dimiliki dan dikelola oleh pihak gereja.</center></strong></h5><br>
                <h5><strong><center>Terima kasih.</center></strong></h5><br>
            <div class="card" style="border-top: 7px solid skyblue;">
    <!-- TITLE END -->
    
    <!-- Box Form Section -->
    <section id="form" class="form">

        <!-- Form section First -->
        <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nm" id="nama" class="form-control" placeholder="Masukkan Nama Lengkap Anda" required>
            </div>
            <div class="form-group">
                <label for="usia">Usia</label>
                <input type="number" name="us" id="usia" class="form-control" placeholder="Masukkan Usia Anda" max=100 required>
            </div>
            <div class="form-group">
                <label for="nohp">No. Handphone <small>(Whatsapp Aktif)</small></label>
                <input type="number" name="phone" id="nohp" class="form-control" pattern="[0-9]{4}-[0-9]{4}-[0-9]{0-5}" placeholder="Masukkan Nomor Handphone Anda" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamain</label> <br>
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" name="jk" id="jenis_kelamin" value="Laki-Laki" required> Laki-laki
                </div>

                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" name="jk" id="jenis_kelamin" value="Perempuan" required> Perempuan
                </div>
            </div>
            <div class="form-group">
                <label for="jadwal">Jadwal Ibadah</label>
                <?php if ($kuota["sabtu_sore"] <=  $total_sabtu_sore) : ?>
                <div class="alert alert-warning" role="alert">
                    <small>Jadwal di hari <b>Sabtu Sore</b> sudah penuh.</small>
                </div>
                <?php endif; ?>

                <?php if ($kuota["minggu_pagi"] <=  $total_minggu_pagi) : ?>
                <div class="alert alert-warning" role="alert">
                    <small>Jadwal di hari <b>Minggu Pagi</b> sudah penuh.</small>
                </div>
                <?php endif; ?>

                <?php if ($kuota["minggu_sore"] <=  $total_minggu_sore) : ?>
                <div class="alert alert-warning" role="alert">
                    <small>Jadwal di hari <b>Minggu Sore</b> sudah penuh.</small>
                </div>
                <?php endif; ?>

                <select name="jd_ibadah" id="jadwal" class="form-control" required>
                    <option value="">--Silahkan Pilih--</option>
                    <?php if ($kuota["sabtu_sore"] <=  $total_sabtu_sore) : ?>
                    <option value="Sabtu Sore" disabled>Sabtu Sore</option>
                    <?php else: ?>
                    <option value="Sabtu Sore">Sabtu Sore</option>
                    <?php endif; ?>

                    <?php if ($kuota["minggu_pagi"] <=  $total_minggu_pagi) : ?>
                    <option value="Minggu Pagi" disabled>Minggu Pagi</option>
                    <?php else: ?>
                    <option value="Minggu Pagi">Minggu Pagi</option>
                    <?php endif; ?>

                    <?php if ($kuota["minggu_sore"] <=  $total_minggu_sore) : ?>
                    <option value="Minggu Sore" disabled>Minggu Sore</option>
                    <?php else: ?>
                    <option value="Minggu Sore">Minggu Sore</option>
                    <?php endif; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="wilayah">Wilayah</label>
                <select name="wilayah" id="wilayah" class="form-control" required>
                    <option value="">--Silahkan Pilih--</option>
                    <option value="Fransiskus Xaverius">Fransiskus Xaverius</option>
                    <option value="Aloysius Gonzaga">Aloysius Gonzaga</option>
                    <option value="Benedictus">Benedictus</option>
                    <option value="Theresia">Theresia</option>
                    <option value="Blasius">Blasius</option>
                    <option value="Christina">Christina</option>
                    <option value="Yustinus">Yustinus</option>
                    <option value="Ignatius">Ignatius</option>
                    <option value="Bertinus">Bertinus</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lingkungan">Lingkungan</label>
                <select name="lingkungan" id="lingkungan" class="form-control" required>
                    <option value="">--Silahkan Pilih--</option>
                    <option value="Fransiskus Asisi">Fransiskus Asisi</option>
                    <option value="Yohanes Maria Vianney">Yohanes Maria Vianney</option>
                    <option value="Brigita">Brigita</option>
                    <option value="Lukas">Lukas</option>
                    <option value="Bartolomeus">Bartolomeus</option>
                    <option value="Bernadeth">Bernadeth</option>
                    <option value="Maria Immaculata">Maria Immaculata</option>
                    <option value="Bonaventura">Bonaventura</option>
                    <option value="Anna">Anna</option>
                    <option value="Agustinus">Agustinus</option>
                    <option value="Maria Magdalena">Maria Magdalena</option>
                    <option value="maria margareta">Maria Margareta</option>
                    <option value="Thomas">Thomas</option>
                    <option value="Ursula">Ursula</option>
                    <option value="Lusia">Lusia</option>
                    <option value="Cesilia">Cesilia</option>
                    <option value="Elisabeth">Elisabeth</option>
                    <option value="Gregorius">Gregorius</option>
                    <option value="Clara">Clara</option>
                    <option value="Stefanus">Stefanus</option>
                    <option value="Vincentius">Vincentius</option>
                    <option value="Angela">Angela</option>
                </select>
            </div>
            <div class="form-group">
                <input type="checkbox" name="agree" class="checkbox" required> Saya akan mematuhi seluruh protokol "new normal" / Adaptasi Kebiasaan Baru selama mengikuti misa di Gereja Katolik St. Markus Depok Timur. *
            </div>
            <div class="form-group text-center mt-5">
                <button type="submit" name="submit" class="btn">Daftar Sekarang</button>
            </div>
        </form>
        </div>
        </section>
    </div>
    </div>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>