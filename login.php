<?php 
session_start();
require 'koneksi.php';

//cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];
	
	//ambil user name berdasarkan id
	$result = mysqli_query($koneksi,"SELECT username FROM masuk WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	//cek cookie dan username
	if ($key === hash('sha256',$row['username'])) {		
		$_SESSION['loging']=true;
	}
	
}

if (isset($_SESSION["loging"])) {
	header("Location:dashboard.php");	
	exit();
}



if (isset($_POST["login"])) {
	
	$username = $_POST['username'];
	$pwd = $_POST['pwd'];

	$result=mysqli_query($koneksi, "SELECT * FROM masuk WHERE username = '$username' "); 

	if (mysqli_num_rows($result) === 1) {
		
		$row = mysqli_fetch_assoc($result);
		if ( $pwd === $row['pwd'] ) {
			//set session
			$_SESSION["loging"]=true;

			//cek remember me
			if (isset($_POST['remember'])) {
				
				//set cookie
				setcookie('id',$row['id'],time()+600);
				setcookie('key',hash('sha256',$row['username']),time()+600);
			}

			header("location:dashboard.php");
			exit;
			}
	}

	$error = true;

}

?>

<?php if (isset($error)) : ?> 
	<script>
	  	alert("Username/password Salah");	
	</script>		
<?php endif; ?>

<?php if (isset($error)) : ?> 
	<script>
	  	alert("Username/password Salah");	
	</script>		
<?php endif; ?>


<!DOCTYPE html>
<html>
<head>
	<title>halaman utama</title>

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/colors/main.css" id="colors">

</head>
<body>
<div id="sign-in-dialog" class="zoom-anim-dialog">

				<div class="small-dialog-header">
					<h3>Sign in</h3>
				</div>

				<!--Tabs -->
				<div class="sign-in-form style-1">

					<ul class="tabs-nav">
						<li class="active"><a href="index.php">Log In</a></li>
					</ul>

					<div class="tabs-container alt">

						<!-- Login -->
						<div class="tab-content" id="tab1" style="display: inline-block;">
							<form method="post" class="login">

								<p class="form-row form-row-wide">
									<label for="username">Username:
										<i class="im im-icon-Male"></i>
										<input type="text" class="input-text" name="username" id="username" value="" maxlength="16">
									</label>
								</p>

								<p class="form-row form-row-wide">
									<label for="password">password:
										<i class="im im-icon-Lock-2"></i>
										<input class="input-text" type="password" name="pwd" id="password" maxlength="16">
									</label>
									<!-- <span class="lost_pwd">
										<a href="#">Lost Your pwd?</a>
									</span> -->
								</p>

								<div class="form-row">
									<input type="submit" class="button border margin-top-5" name="login" value="Login">
									<!-- <div class="checkboxes margin-top-10">
										<input id="remember-me" type="checkbox" name="check">
										<label for="remember-me">Remember Me</label>
									</div> -->
								</div>
								
							</form>
						</div>
					</div>
				</div>
			<!-- <button title="Close (Esc)" type="button" class="mfp-close"></button></div> -->
</body>
</html>