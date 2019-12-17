<?php 
session_start();

if (!isset($_SESSION["loging"])) {
	header("Location:login.php");
	exit;
}


require "koneksi.php";

$id = $_GET['id'];

$result=mysqli_query($koneksi, "DELETE FROM iptable WHERE id=$id");

header("Location:dashboard.php");

?>