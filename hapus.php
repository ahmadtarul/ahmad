<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id_catatan = $_GET['id_catatan'];


// menghapus data dari database
mysqli_query($koneksi,"delete from catatan where id_catatan='$id_catatan'");

// mengalihkan halaman kembali ke index.php
header("location:user.php");

?>