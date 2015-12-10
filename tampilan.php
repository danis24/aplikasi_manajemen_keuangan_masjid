<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aplikasi Manajemen Keuangan Masjid</title>
	<link type="text/css" href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="assets/css/theme.css" rel="stylesheet">
	<link type="text/css" href="assets/images/icons/css/font-awesome.css" rel="stylesheet">
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		APLIKASI MANAJEMEN KEUANGAN MASJID (AMKM)
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav pull-right">
						<li class="nav-user dropdown">
							
							<ul class="dropdown-menu">
								<li><a href="#">Profile</a></li>
								<li><a href="#">Pengaturan Akun</a></li>
								<li class="divider"></li>
								<li><a href="?page=logout">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<ul class="widget widget-menu unstyled">
	<li class="active">
		<a href="index.php">
			<i class="menu-icon icon-dashboard"></i>
			Beranda
		</a>
	</li>

	<li>
		<a class="collapsed" data-toggle="collapse" href="#togglePages1">
			<i class="menu-icon icon-file"></i>
			<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
			Master Data
		</a>
		<ul id="togglePages1" class="collapse unstyled">
			<li>
				<a href="?page=tambah_jabatan">
					<i class="icon-inbox"></i>
					Tambah Jabatan
				</a>
			</li>
			<li>
				<a href="?page=struktur_jabatan">
					<i class="icon-inbox"></i>
					Struktur Jabatan
				</a>
			</li>
			<li>
				<a href="?page=tambah_petugas">
					<i class="icon-inbox"></i>
					Tambah Petugas
				</a>
			</li>
			<li>
				<a href="?page=data_petugas">
					<i class="icon-inbox"></i>
					Data Petugas
				</a>
			</li>
		</ul>
	</li>

	<li>
		<a class="collapsed" data-toggle="collapse" href="#togglePages2">
			<i class="menu-icon icon-money"></i>
			<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
			Data KAS Masjid
		</a>
		<ul id="togglePages2" class="collapse unstyled">
			<li>
				<a href="?page=pemasukan">
					<i class="icon-inbox"></i>
					Pemasukan
				</a>
			</li>
			<li>
				<a href="?page=pengeluaran">
					<i class="icon-inbox"></i>
					Pengeluaran
				</a>
			</li>
			<li>
				<a href="?page=pemasukanpengeluaran">
					<i class="icon-inbox"></i>
					Pemasukan & Pengeluaran
				</a>
			</li>
		</ul>
	</li>

	<li>
		<a class="collapsed" data-toggle="collapse" href="#togglePages3">
			<i class="menu-icon icon-paste"></i>
			<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
			Data Zakat
		</a>
		<ul id="togglePages3" class="collapse unstyled">
			<li>
				<a href="?page=zakat_fitrah">
					<i class="icon-inbox"></i>
					Zakat Fitrah
				</a>
			</li>
			<li>
				<a href="?page=zakat_mal">
					<i class="icon-inbox"></i>
					Zakat Mal
				</a>
			</li>
		</ul>
	</li>

	<li>
		<a class="collapsed" data-toggle="collapse" href="#togglePages4">
			<i class="menu-icon icon-tasks"></i>
			<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
			View & Export
		</a>
		<ul id="togglePages4" class="collapse unstyled">
			<li>
				<a href="?page=report_petugas">
					<i class="icon-inbox"></i>
					Report Petugas
				</a>
			</li>
			<li>
				<a href="?page=report_kas">
					<i class="icon-inbox"></i>
					Report KAS
				</a>
			</li>
			<li>
				<a href="?page=report_zakat">
					<i class="icon-inbox"></i>
					Report Zakat
				</a>
			</li>
		</ul>
	</li>

	<li>
		<a class="collapsed" data-toggle="collapse" href="#togglePages5">
			<i class="menu-icon icon-cog"></i>
			<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
			Tools
		</a>
		<ul id="togglePages5" class="collapse unstyled">
			<li>
				<a href="?page=hitung_zakat_mal">
					<i class="icon-inbox"></i>
					Hitung Zakat Mal
				</a>
			</li>
			<li>
				<a href="?page=backuprestore">
					<i class="icon-inbox"></i>
					Backup & Restore
				</a>
			</li>
			<li>
				<a href="?page=about">
					<i class="icon-inbox"></i>
					About
				</a>
			</li>
		</ul>
	</li>

	<li>
		<a href="?page=logout">
			<i class="menu-icon icon-signout"></i>
			Logout
		</a>
	</li>
</ul>
</body>
</html>