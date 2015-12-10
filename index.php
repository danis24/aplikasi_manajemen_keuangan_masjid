<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
header("location:login.php");
} else {
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
	<script language="javascript" type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script language="javascript" type="text/javascript" src="assets/js/format.js"></script>
	<script language="javascript" type="text/javascript" src="assets/js/main.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png">
</head>
<body>

	<?php include "navbar.php";?>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<?php include "menu.php";?>

					</div>
				</div>


				<div class="span9">
					<?php include "isi.php";?>	
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2015 Danis Yogaswara </b> All rights reserved.
		</div>
	</div>

	<script src="assets/scripts/jquery-1.9.1.min.js"></script>
	<script src="assets/scripts/jquery-ui-1.10.1.custom.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
<?php
}
?>
