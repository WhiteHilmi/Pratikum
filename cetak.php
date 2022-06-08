<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Gusetbook</title>
</head>

<body>

    <?php
$servername="localhost";
$username="root";
$password="";
$dbname = "myweb";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun");

?>
    <h2 style='text-align:center;'>Daftar Orang yang Terdaftar di GuestBook</h2>
    <br>
    <table width='75%' cellpadding='2' cellspacing='0' border='1' style='margin:auto;'>
        <tr>
            <th>ID</th>
            <th>Posted</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
        <?php
        $no=1;       
        $sql ="SELECT * FROM guestbook";
        $sqy = mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
        while($hasil=mysqli_fetch_row($sqy)){
        
         ?>
        <tr>
            <td><?php echo $hasil[0];?></td>
            <td><?php echo $hasil[1]; ?></td>
            <td><?php echo $hasil[2]; ?></td>
            <td><?php echo $hasil[3]; ?></td>
            <td><?php echo $hasil[4]; ?></td>
            <td><?php echo $hasil[5]; ?></td>
            <td><?php echo $hasil[6]; ?></td>
            <td><button type='' style='width: 60px; background-color:green;'>
                    <a href='update.php?id=<?php echo $hasil['0']; ?>'
                        style='text-decoration: none; color:white;'>Update</a>
                </button> | <button type='submit' style='width: 60px; background-color:red;'>
                    <a href='delete.php?id=<?php echo $hasil['0']; ?>'
                        style='text-decoration: none; color:white;'>Delete</a>
                </button></td>
        </tr>
        <?php
    } ?>
    </table>
    <button type="" class="btn btn-primary"
        style="width: 350px; margin-left:620px; margin-top:3rem; background-color:red;">
        <a href="login.php" style="text-decoration: none; color:white;">Logout</a>
    </button>

</body>

</html>