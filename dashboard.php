<?php 
require 'koneksi.php';

session_start();

if (!isset($_SESSION["loging"])) {
	header("Location:login.php");
	exit;
}

$result = mysqli_query($koneksi,"SELECT * FROM iptable ORDER BY id DESC");
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

<!-- datatable -->
	
	<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> 
	
	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>

	<script src="js/jquery-3.1.0.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>


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

		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2><i class="sl sl-icon-doc"></i>Data Ip</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li>Dashboard</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

						<div class="row">
							<a href="add.php" class="button add-pricing-list-item">Tambahkan data</a>
							<div class="col-md-15">
								<table id="tabel-data" class="basic-table" width="100%" cellspacing="0">

									<thead>
										<tr>
										
											<th>no</th>
											<th>ip pertama</th>
											<th>ip terakhir</th>
											<th>tanggal beli</th>
											<th>jatuh tempo</th>
											<th>tanggal peremajaan</th>
											<th>keterangan</th>

										</tr>
									</thead>

									<tbody>

										<?php 
										$a=1;
										while ($user_data = mysqli_fetch_array($result)) : ?>
											
										<tr>
											<td> <?= $a++; ?> </td> ;
											<td> <?= $user_data['ippertama']; ?> 		</td>
											<td> <?= $user_data['ipterakhir']; ?> 		</td>
											<td> <?= $user_data['tglbeli']; ?> 			</td>
											<td> <?= $user_data['lamasewa']; ?> 		</td>
											<td> <?= $user_data['tglperemajaan'];?>		</td>
											 

											<td>
											
											<a href="delete.php?id=<?=$user_data['id']; ?>" > <i class='sl sl-icon-trash'> </i> </a>
											<a href="change.php?id=<?=$user_data['id']; ?>" > <i class='sl sl-icon-note'>  </i> </a>

											</td>
										
										 <?php endwhile; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>


                        </div>
                    </div>

           <!-- script datatable -->
           <script>
    		$(document).ready(function(){
       		 $('#tabel-data').DataTable();});
			</script>

			<script>$(document).ready(function() {
    $('#table-data').DataTable( {
        columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]}); 
		});</script>

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