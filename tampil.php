<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "myweb";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun");

$sql ="SELECT * FROM guestbook";
$sqy = mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
echo "<h2 style='text-align:center;'>Daftar Orang yang Terdaftar di GuestBook</h2>
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
";
$no=1;
while($hasil=mysqli_fetch_row($sqy)){
echo "<tr>
<td>$hasil[0]</td>
<td>$hasil[1]</td>
<td>$hasil[2]</td>
<td>$hasil[3]</td>
<td>$hasil[4]</td>
<td>$hasil[5]</td>
<td>$hasil[6]</td>
<td><button type='' style='width: 60px; background-color:green;'>
<a href='tampil.php' style='text-decoration: none; color:white;'>Update</a>
</button> | <button type='submit' style='width: 60px; background-color:red;'>
<a href='delete.php' style='text-decoration: none; color:white;'>Delete</a>
</button> | <a>p</a></td>
</tr>";
$no++;
}
echo "</table>";
?>