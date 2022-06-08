<?php

$servername="localhost";
$city="root";
$message="";
$dbname = "myweb";
$conn = mysqli_connect($servername, $city, $message, $dbname) or die("Koneksi gagal dibangun");

$vposted=$_POST['posted'];
$vname=$_POST['name'];
$vemail=$_POST['email'];
$vaddress=$_POST['address'];
$vcity=$_POST['city'];
$vmessage=$_POST['message'];

$sql = "INSERT INTO guestbook SET posted='$vposted',
name='$vname',
email='$vemail',
address='$vaddress', 
city='$vcity',
message='$vmessage'";

mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
header("location:cetak.php");

?>