<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_catatan = $_POST['id_catatan'];
$nik = $_POST['nik'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];

// update data ke database
mysqli_query($koneksi,"update catatan set tanggal='$tanggal', waktu='$waktu', lokasi='$lokasi', suhu='$suhu' where id_catatan='$id_catatan'");

// mengalihkan halaman kembali ke index.php
header("location:user.php");

?>