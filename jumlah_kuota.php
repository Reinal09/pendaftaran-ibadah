<?php
    include 'koneksi.php';

$kuota_pendaftaran = mysqli_query($conn, "SELECT * FROM kuota");
foreach ($kuota_pendaftaran as $kuota) {}

$sabtu_sore = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE jadwal = 'Sabtu Sore'");
$total_sabtu_sore = mysqli_num_rows($sabtu_sore);

$minggu_pagi = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE jadwal = 'Minggu Pagi'");
$total_minggu_pagi = mysqli_num_rows($minggu_pagi);

$minggu_sore = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE jadwal = 'Minggu Sore'");
$total_minggu_sore = mysqli_num_rows($minggu_sore);


?>