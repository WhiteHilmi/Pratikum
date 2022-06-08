<?php
$servername="localhost";
$city="root";
$message="";
$dbname = "myweb";
$conn = mysqli_connect($servername, $city, $message, $dbname) or die("Koneksi gagal dibangun");

$vid = $_POST['id'];
$vposted=date('y-m-d', strtotime($_POST['posted']));
$vname=$_POST['name'];
$vemail=$_POST['email'];
$vaddress=$_POST['address'];
$vcity=$_POST['city'];
$vmessage=$_POST['message'];

$sql = "UPDATE guestbook SET posted='$vposted',
name='$vname',
email='$vemail',
address='$vaddress', 
city='$vcity',
message='$vmessage' WHERE `guestbook`.`id` = '$vid'" ;

mysqli_query($conn, $sql) or die("Proses update ke database gagal");
header("location:cetak.php");

 ?>