<?php
    session_start();
    include 'koneksi.php';

    if(isset($_POST['login'])){
        
        // mengecek akun ada atau tidak
        $cek = mysqli_query($conn, "SELECT * FROM tb_admin 
        WHERE username = '".$_POST['user']."' AND password = '".MD5($_POST['pass'])."'");


        if(mysqli_num_rows($cek) > 0){
            $a = mysqli_fetch_object($cek);

            $_SESSION['stat_login'] = true;
            $_SESSION['id_admin'] = $a->id_admin;
            $_SESSION['nama'] = $a->nm_admin;
            echo '<script>window.location="pendaftaran.php"</script>';
        }else{
            echo '<script>alert("Gagal, username atau password salah")</script>';
        }
    }
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
      #content {
        padding: 100px 430px;
      }
      @media screen and (max-width: 1200px) {
        #content {
          padding: 100px 200px;
        }
      }
      @media screen and (max-width: 760px) {
        #content {
          padding: 80px 0;
        }
      }
      a[href] {
        text-decoration: none;
      }
      a[href]:hover {
        color: red;
      }
      .card {
        padding: 16px;
      }
      .alert-danger {
        border: 1px solid white;
        font-weight: 600;
      }
      .btn-daftar {
        color: white !important;
        border: 1px solid lightgray;
        box-shadow: 2px 2px 20px whitesmoke;
        background-color: darkslategray;
      }
    </style> 
    </head>
<body>
        
    

    <!-- bagian main login -->
    <main>
        <div id="content">
            <div class="container"> 
                <h4 style="padding-top:20px;color:darkslategrey;"><strong><center>Masuk Admin</center></strong></h4><br>
                <div class="card"style="border-top: 5px solid darkslategray;">
            <form action="" method="post">
            <label for="email"><strong>Username</strong></label>
            <div class="mb-3 input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fas fa-envelope"></i></span>
                <input type="text" class="form-control" name="user" id="user" placeholder="Masukkan Username" required>
            </div>
            <label for="password">Password</label>
            <div class="mb-3 input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fas fa-key"></i></span>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Masukkan Password" required>
            </div>
            <button type="submit" name="login" class="btn btn-daftar" style="width: 100%;">
                <i class="fas fa-sign-in-alt"></i> Masuk
            </button>
            </form><br>
            </div><br>
            </div>
        </div>
    </main>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
                    
                
            
        


