<?php
class modelZakatMal{
	public function execute($query){
		return mysql_query($query);
	}

	public function fetch($var){
		return mysql_fetch_array($var);
	}

	public function selectPetugas(){
		$query = "SELECT * FROM tbl_petugas";
		return $this->execute($query);
	}

	public function insert($id_zakat_mal, $petugas, $tanggal, $nama_pembayar, $alamat, $telpon, $tahun, $jumlah, $session){
		$query = "INSERT INTO tbl_zakat_mal VALUES ('$id_zakat_mal', '$petugas', '$tanggal', '$nama_pembayar', '$alamat', '$telpon', '$tahun', '$jumlah', '$session')";
		return $this->execute($query);
	}

	public function genCode($first, $field, $table, $char){

			$query = "SELECT MAX(RIGHT($field, $char)) as maxID FROM $table ORDER BY $field";
			$get = $this->execute($query);
			$code = $this->fetch($get);
			$genKode = $code['maxID'];
			$getCode = (int) substr($genKode, 1, $char);
			$getCode++;
			$theCode = $first.sprintf("%0".$char."s", $getCode);
			return $theCode;

	}
}
?>