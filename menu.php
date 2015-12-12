<?php
if(@$_SESSION['level'] == 'admin'){
?>
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
					<a href="?page=struktur_jabatan&act=tambah_jabatan">
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
					<a href="?page=data_petugas&act=tambah_petugas">
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
					<a href="?page=kas&act=pemasukan">
						<i class="icon-inbox"></i>
						Pemasukan
					</a>
				</li>
				<li>
					<a href="?page=kas&act=pengeluaran">
						<i class="icon-inbox"></i>
						Pengeluaran
					</a>
				</li>
				<li>
					<a href="?page=kas">
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
					<a href="?page=zakat&act=zakat_fitrah">
						<i class="icon-inbox"></i>
						Zakat Fitrah
					</a>
				</li>
				<li>
					<a href="?page=zakat&act=zakat_mal">
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
				Report
			</a>
			<ul id="togglePages4" class="collapse unstyled">
				<li>
					<a href="?page=report&act=report_petugas">
						<i class="icon-inbox"></i>
						Report Petugas
					</a>
				</li>
				<li>
					<a href="?page=report&act=report_kas">
						<i class="icon-inbox"></i>
						Report KAS
					</a>
				</li>
				<li>
					<a href="?page=report&act=report_zakat_fitrah">
						<i class="icon-inbox"></i>
						Report Zakat Fitrah
					</a>
				</li>
				<li>
					<a href="?page=report&act=report_zakat_mal">
						<i class="icon-inbox"></i>
						Report Zakat Mal
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
					<a href="?page=zakat&act=hitung_zakat">
						<i class="icon-inbox"></i>
						Hitung Zakat Mal
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
			<a class="collapsed" data-toggle="collapse" href="#togglePages6">
				<i class="menu-icon icon-file"></i>
				<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
				Data User
			</a>
			<ul id="togglePages6" class="collapse unstyled">
				<li>
					<a href="?page=user&act=tambah_user">
						<i class="icon-inbox"></i>
						Tambah User
					</a>
				</li>
				<li>
					<a href="?page=user">
						<i class="icon-inbox"></i>
						Lihat User
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
<?php
}else if(@$_SESSION['level'] == 'operator'){
?>
	<ul class="widget widget-menu unstyled">
		<li class="active">
			<a href="index.php">
				<i class="menu-icon icon-dashboard"></i>
				Beranda
			</a>
		</li>

		<li>
			<a class="collapsed" data-toggle="collapse" href="#togglePages2">
				<i class="menu-icon icon-money"></i>
				<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
				Data KAS Masjid
			</a>
			<ul id="togglePages2" class="collapse unstyled">
				<li>
					<a href="?page=kas&act=pemasukan">
						<i class="icon-inbox"></i>
						Pemasukan
					</a>
				</li>
				<li>
					<a href="?page=kas&act=pengeluaran">
						<i class="icon-inbox"></i>
						Pengeluaran
					</a>
				</li>
				<li>
					<a href="?page=kas">
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
					<a href="?page=zakat&act=zakat_fitrah">
						<i class="icon-inbox"></i>
						Zakat Fitrah
					</a>
				</li>
				<li>
					<a href="?page=zakat&act=zakat_mal">
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
				Report
			</a>
			<ul id="togglePages4" class="collapse unstyled">
				<li>
					<a href="?page=report&act=report_kas">
						<i class="icon-inbox"></i>
						Report KAS
					</a>
				</li>
				<li>
					<a href="?page=report&act=report_zakat_fitrah">
						<i class="icon-inbox"></i>
						Report Zakat Fitrah
					</a>
				</li>
				<li>
					<a href="?page=report&act=report_zakat_mal">
						<i class="icon-inbox"></i>
						Report Zakat Mal
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
					<a href="?page=zakat&act=hitung_zakat">
						<i class="icon-inbox"></i>
						Hitung Zakat Mal
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
<?php
}else{
	?>
	<script type="text/javascript">
	alert("Session Salah");
	</script>
	<?php
}
?>