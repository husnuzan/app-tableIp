<?php
							
							if (isset($_POST['ping'])) {
								if (! $ippertama && ! $ipterakhir) {
									echo 'error';
								}
								elseif (! $ippertama) {
									echo 'error';
								}
								elseif (! $ipterakhir) {
									echo 'error';
								}
								include_once 'ping.php';
								}

							if (isset($_POST['kirim'])) {	
								if (! $ippertama && ! $ipterakhir && ! $tglbeli && ! $lamasewa) {
									echo 'isilah semua form yang tersedia';
								}
								elseif (! $ippertama && ! $ipterakhir && ! $tglbeli) {
									echo 'isilah semua form yang tersedia';
								}
								elseif (! $ippertama && ! $ipterakhir) {
									echo 'isilah semua form yang tersedia';
								}
								elseif (! $ippertama) {
									echo 'isilah semua form yang tersedia';
								}
								elseif (! $ipterakhir) {
									echo 'isilah semua form yang tersedia';
								}
								elseif (! $tglbeli) {
									echo 'isilah semua form yang tersedia';
								}
								elseif (! $lamasewa) {
									echo 'isilah semua form yang tersedia';
								}
								elseif (! $lamasewa && ! $ipterakhir) {
									echo 'isilah semua form yang tersedia';
								}
								else{
									$result = mysqli_query($koneksi, "INSERT INTO iptable(ippertama,ipterakhir,tglbeli,tglperemajaan,lamasewa) VALUES ('$ippertama','$ipterakhir','$tglbeli','$tglperemajaan','$lamasewa')");
								header("location:dashboard.php");
								}
	
							}
							 ?>
