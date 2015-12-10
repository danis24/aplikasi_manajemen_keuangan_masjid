<?php
class modelReport{

	function __construct(){
		$connect = mysql_connect("localhost","root","");
		$db = mysql_select_db("aplikasi_masjid");
	}
	public function execute($query){
		return mysql_query($query);
	}

	public function fetch($var){
		return mysql_fetch_array($var);
	}

	public function selectAllKas(){
		$query = "SELECT * FROM tbl_kas_masjid";
		return $this->execute($query);
	}

	public function selectPerKas($tgl_start, $tgl_end){
		$query = "SELECT * FROM tbl_kas_masjid WHERE tanggal >= '$tgl_start' AND tanggal <= '$tgl_end'";
		return $this->execute($query);
	}

	public function jumlahPemasukan(){
		$query = "SELECT sum(pemasukan) as hitungPemasukan FROM tbl_kas_masjid";
		return $this->execute($query);
	}

	public function jumlahPengeluaran(){
		$query = "SELECT sum(pengeluaran) as hitungPengeluaran FROM tbl_kas_masjid";
		return $this->execute($query);
	}

	public function jumlahPemasukanPer($tgl_start, $tgl_end){
		$query = "SELECT sum(pemasukan) as hitungPemasukan FROM tbl_kas_masjid WHERE tanggal >= '$tgl_start' AND tanggal <= '$tgl_end'";
		return $this->execute($query);
	}

	public function jumlahPengeluaranPer($tgl_start, $tgl_end){
		$query = "SELECT sum(pengeluaran) as hitungPengeluaran FROM tbl_kas_masjid WHERE tanggal >= '$tgl_start' AND tanggal <= '$tgl_end'";
		return $this->execute($query);
	}

	public function selectAllPetugas(){
		$query = "SELECT * FROM tbl_petugas INNER JOIN tbl_struk_jabatan ON kd_jab = jabatan";
		return $this->execute($query);
	}

	public function selectPerPetugas($id){
		$query = "SELECT * FROM tbl_petugas INNER JOIN tbl_struk_jabatan ON kd_jab = jabatan WHERE kd_petugas = '$id'";
		return $this->execute($query);
	}

	public function selectAllZakatFitrah(){
		$query = "SELECT * FROM tbl_zakat_fitrah INNER JOIN tbl_petugas ON kd_petugas = petugas";
		return $this->execute($query);
	}

	public function selectPerZakatFitrah($tgl_start, $tgl_end){
		$query = "SELECT * FROM tbl_zakat_fitrah INNER JOIN tbl_petugas ON kd_petugas = petugas WHERE tanggal >= '$tgl_start' AND tanggal <= '$tgl_end'";
		return $this->execute($query);
	}

	public function selectZakatFitrah($id){
		$query = "SELECT * FROM tbl_zakat_fitrah INNER JOIN tbl_petugas ON kd_petugas = petugas WHERE id_zakat_fitrah = '$id'";
		return $this->execute($query);
	}

	public function selectAllZakatMal(){
		$query = "SELECT * FROM tbl_zakat_mal INNER JOIN tbl_petugas ON kd_petugas = petugas";
		return $this->execute($query);
	}

	public function selectPerZakatMal($tgl_start, $tgl_end){
		$query = "SELECT * FROM tbl_zakat_mal INNER JOIN tbl_petugas ON kd_petugas = petugas WHERE tanggal >= '$tgl_start' AND tanggal <= '$tgl_end'";
		return $this->execute($query);
	}

	public function selectZakatMal($id){
		$query = "SELECT * FROM tbl_zakat_mal INNER JOIN tbl_petugas ON kd_petugas = petugas WHERE id_zakat_mal = '$id'";
		return $this->execute($query);
	}

	function __destruct(){

	}
}
?>