<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id_pendaftaran'];


// menghapus data dari database
mysqli_query($conn, "delete from tb_pendaftaran where id_pendaftaran='$id'");

// mengalihkan halaman kembali ke index.php
header("location:pendaftaran.php");
