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
							<li>Edit data</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

					<form name="update_user" method="post" action="change.php">
						<div class="row with-forms">
							<div class="col-md-3">
								<h5>Ip pertama</h5>
								<input class="text" type="text" placeholder="contoh 192.168.8.1" name="ippertama" maxlength="15" value="<?php $ippertama; ?>">
							</div>

							<div class="col-md-3">
								<h5>Ip terakhir </h5>
								<input class="text" type="text" placeholder="contoh 192.168.8.1" name="ipterakhir" maxlength="15" value="<?php $ipterakhir; ?>">
							</div>

							<div class="col-md-2">
								<br>
								<input type="submit" name="ping" value="ping">
							</div>
						</div>

							<div class="row">
								<div class="col-md-3">
									<h5>Masa sewa</h5>
									<input type="date" name="lamasewa" value="<?php $lamasewa; ?>">
								</div>
								<div class="col-md-3">
									<h5>Tanggal beli</h5>
									<input type="date" name="tglbeli" value="<?php $tglbeli; ?>">
								</div>
							</div>
							<td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
							<input type="submit" name="ubah" value="ubah" onclick="ubah()">
	</div>
</div>
</form>
<?php 
$id = $_POST['id'];
			$date = date_create($lamasewa); 
			date_modify($date, '+'. 1 .'week');
			$tglperemajaan = date_format($date, "Y-m-d");
			$ippertama = $_POST['ippertama'];
			$ipterakhir = $_POST['ipterakhir'];
			$tglbeli = $_POST['tglbeli'];
			$lamasewa = $_POST['lamasewa'];
include_once 'fungsi/ubah.php'; ?>

<!-- Scripts
================================================== -->
<script type="text/javascript" src="../scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="../scripts/mmenu.min.js"></script>
<script type="text/javascript" src="../scripts/chosen.min.js"></script>
<script type="text/javascript" src="../scripts/slick.min.js"></script>
<script type="text/javascript" src="../scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="../scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="../scripts/waypoints.min.js"></script>
<script type="text/javascript" src="../scripts/counterup.min.js"></script>
<script type="text/javascript" src="../scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="../scripts/tooltips.min.js"></script>
<script type="text/javascript" src="../scripts/custom.js"></script>

<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
</body>
</html>