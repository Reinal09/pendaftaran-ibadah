<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$sabtu_sore = $_POST['sabtu_sore'];
$minggu_pagi = $_POST['minggu_pagi'];
$minggu_sore = $_POST['minggu_sore'];


// update data ke database
$sql = "UPDATE kuota SET sabtu_sore='$sabtu_sore', minggu_pagi='$minggu_pagi' , minggu_sore='$minggu_sore' WHERE id='$id'";
// echo "<pre>";
// print_r($sql);
// echo "</pre>";
mysqli_query($conn, $sql);


// mengalihkan halaman kembali ke index.php
header("location:kuota.php");

//