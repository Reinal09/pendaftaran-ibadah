<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_pendaftaran'];
$nama = $_POST['nm_umat'];
$usia = $_POST['usia'];
$nohp = $_POST['no_telp'];
$jenis_kelamin = $_POST['jk'];
$jadwal = $_POST['jd_ibadah'];
$wilayah = $_POST['nm_wilayah'];
$lingkungan = $_POST['nm_lingkungan'];


// update data ke database
$sql = "UPDATE tb_pendaftaran SET nm_umat='$nama', usia='$usia' , no_telp='$nohp', jk='$jenis_kelamin', jd_ibadah='$jadwal', nm_wilayah='$wilayah', nm_lingkungan='$lingkungan' WHERE id_pendaftaran='$id'";
// echo "<pre>";
// print_r($sql);
// echo "</pre>";
mysqli_query($conn, $sql);


// mengalihkan halaman kembali ke index.php
header("location:pendaftaran.php");

//