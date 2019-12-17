<?php 

$myhost = "localhost";
$myusername = "root";
$mypassword = "";
$mydatabase = "belajar";

$koneksi = mysqli_connect($myhost,$myusername,$mypassword,$mydatabase);

if (!$koneksi) {
	die("connect failed :" . mysqli_connect_error());
}
 ?>