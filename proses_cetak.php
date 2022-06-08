<?php 
$servername="localhost";
$city="root";
$message="";
$dbname = "myweb";
$conn = mysqli_connect($servername, $city, $message, $dbname) or die("Koneksi gagal dibangun");

$posted=date('Y-m-d', strtotime($_POST['posted']));
$nama = $_POST['nama'];
$address = $_POST['addres'];
$email = $_POST['email'];
$city = $_POST['city'];
$message = $_POST['Message'];
// input ke db
$q = mysqli_query($conn,"INSERT INTO `guestbook` (`id`, `posted`, `name`, `email`, `address`, `city`, `message`) VALUES (NULL, '$posted', '$nama', '$email', '$address', '$city', '$message');");
//kembali ke index atau halaman awal
if($q){

    header("location:guestbookindex.php");
}else{
    echo "Galat";
}
 ?>