<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Bootstrap 5 Login Page</title>
    <!-- import bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname = "myweb";
        $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun");

    ?>


    <div class="card-body">
        <div class="alert alert-primary text-center mt-0">
            <h3>Selamat Datang</h3>
        </div>
        <div class="card-body text-center">
            <h5 class="card-title">
                <?php
                date_default_timezone_set("Asia/Jakarta");
                echo 'Kamu Berhasil Login Pada ';
                echo "\t".date("l,m-F-Y, g:i:s A");
                echo '<br>';
                echo '<br>';
                ?>
            </h5>
        </div>
        <button type="" class="btn btn-primary" style="width: 350px; margin-left:640px; margin-top:5rem;">
            <a href="GuestBook.php" style="text-decoration: none; color:white;">Guest Book</a>
        </button>
    </div>

</body>

</html>