<?php 
$servername="localhost";
$city="root";
$message="";
$dbname = "myweb";
$conn = mysqli_connect($servername, $city, $message, $dbname) or die("Koneksi gagal dibangun");

$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($conn,"DELETE from guestbook where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:cetak.php");
?>