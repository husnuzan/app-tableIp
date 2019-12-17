<?php 

require 'koneksi.php';

session_start();

if (!isset($_SESSION["loging"])) {
	header("Location:login.php");
	exit;
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>dashboard</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/colors/main.css" id="colors">
</head>
<body>

<div class="dashboard-nav">
		<div class="dashboard-nav-inner" style="max-height: 661px;">

			<ul data-submenu-title="Main">
				<li class="active"><a href="dashboard.php"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
				<li><a href="Logout.php"><i class="sl sl-icon-power"></i> Logout</a></li>
			</ul>			
		</div>
	</div>


<div id="dashboard">
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2><i class="sl sl-icon-doc"></i>Data Ip</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="dashboard.php">Dashboard</a></li>
							<li>Tambah data</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
						<form action="add.php" method="post" name="form1">
						<div class="row with-forms">
							<div class="col-md-3">
								<h5>Ip pertama</h5>
								<input class="text" type="text" placeholder="contoh 192.168.8.1" name="ippertama" maxlength="15">
							</div>

							<div class="col-md-3">
								<h5>Ip terakhir </h5>
								<input class="text" type="text" placeholder="contoh 192.168.8.1" name="ipterakhir" maxlength="15">
							</div>
								<div class="col-md-2">
								<br>
								<input class="button add-pricing-list-item" type="submit" name="ping" value="ping" onclick="ping()">
							</div>
							</div>

							<div class="row">
								<div class="col-md-3">
									<h5>Masa sewa</h5>
									<input type="date" name="lamasewa">
								</div>
								<div class="col-md-3">
									<h5>Tanggal beli</h5>
									<input type="date" name="tglbeli">
								</div>
							</div>
							<input class="button add-pricing-list-item" type="submit" name="kirim" value="kirim" onclick="kirim()" >
						</form>
							<?php 
							$ippertama  = $_POST['ippertama'];
							$ipterakhir = $_POST['ipterakhir'];
							$tglbeli = $_POST['tglbeli'];
							$lamasewa = $_POST['lamasewa'];

							$date = date_create($lamasewa); 
							date_modify ($date, '+'. '1' .'week');
							$tglperemajaan = date_format($date, "Y-m-d");
							
							include_once 'fungsi/kirim.php' ?>
							 	
</div>
</div>
</body>
</html>


