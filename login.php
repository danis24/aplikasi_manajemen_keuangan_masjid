<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aplikasi Manajemen Keuangan Masjid</title>
	<link type="text/css" href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="assets/css/tampilan.css" rel="stylesheet">
	<link type="text/css" href="assets/images/icons/css/font-awesome.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png">
	<script type="text/javascript" src="assets/scripts/validasi.js"></script>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		APLIKASI MANAJEMEN KEUANGAN MASJID
			  	</a>
			</div>
		</div>
	</div>



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" method="POST" onSubmit="return validasi(this)">
						<div class="module-head">
							<h3>Sign In</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputEmail" placeholder="Username" name="username">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="inputPassword" placeholder="Password" name="password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<input type="submit" class="btn btn-primary pull-right" value="Login" name="login">
								</div>
							</div>
						</div>
					</form>
					<?php
					if(@$_POST['login']){
						include "controller/login.php";
						$main = new login();
						$main->login();
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="container">
			<b class="copyright">&copy; 2014 Danis Yogaswara </b> All rights reserved.
		</div>
	</div>
</body>
<?php
}else{
	header("location:index.php");
}
?>
