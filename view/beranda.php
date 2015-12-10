<?php
if(@$_SESSION['level'] == 'admin'){
?>
<div class="module">
	<div class="module-head">
		<h3>Selamat Datang, <?php echo $_SESSION['nama'];?></h3>
		<div class="module-body">
			<div class="btn-box-row row-fluid">
			<a href="?page=struktur_jabatan&act=tambah_jabatan" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Data Jabatan</b>
			</a>
			<a href="?page=data_petugas&act=tambah_petugas" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Data Petugas</b>
			</a>
			<a href="?page=kas&act=pemasukan" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Pemasukan</b>
			</a>
			<a href="?page=kas&act=pengeluaran" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Pengeluaran</b>
			</a>
			<a href="?page=zakat&act=zakat_fitrah" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Zakat Fitrah</b>
			</a>
			<a href="?page=zakat&act=zakat_mal" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Zakat Mal</b>
			</a>
		</div>

		<div class="module-body">
			<div class="btn-box-row row-fluid">
			<a href="?page=zakat&act=hitung_zakat" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Hitung Zakat Mal</b>
			</a>
			<a href="?page=report&act=report_petugas" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Report Petugas</b>
			</a>
			<a href="?page=report&act=report_kas" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Report KAS</b>
			</a>
			<a href="?page=report&act=report_zakat_fitrah" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Report Zakat Fitrah</b>
			</a>
			<a href="?page=report&act=report_zakat_mal" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Report Zakat Mal</b>
			</a>
			<a href="?page=logout" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Logout</b>
			</a>
		</div>
		</div>
	</div>
</div>
<?php
}else if(@$_SESSION['level'] == 'operator'){
?>
<div class="module">
	<div class="module-head">
		<h3>Selamat Datang, <?php echo $_SESSION['nama'];?></h3>
		<div class="module-body">
			<div class="btn-box-row row-fluid">
			<a href="?page=kas&act=pemasukan" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Pemasukan</b>
			</a>
			<a href="?page=kas&act=pengeluaran" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Pengeluaran</b>
			</a>
			<a href="?page=zakat&act=zakat_fitrah" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Zakat Fitrah</b>
			</a>
			<a href="?page=zakat&act=zakat_mal" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Zakat Mal</b>
			</a>
			<a href="?page=zakat&act=hitung_zakat" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Hitung Zakat Mal</b>
			</a>
			<a href="?page=report&act=report_petugas" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Report Petugas</b>
			</a>
		</div>

		<div class="module-body">
			<div class="btn-box-row row-fluid">
			<a href="?page=report&act=report_kas" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Report KAS</b>
			</a>
			<a href="?page=report&act=report_zakat_fitrah" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Report Zakat Fitrah</b>
			</a>
			<a href="?page=report&act=report_zakat_mal" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Report Zakat Mal</b>
			</a>
			<a href="?page=logout" class="btn-box small span2">
				<i class="icon-edit"></i>
				<b>Logout</b>
			</a>
		</div>
		</div>
	</div>
</div>
<?php
}else{
	?>
	<script type="text/javascript">
	alert("Session Salah");
	</script>
	<?php
}
?>