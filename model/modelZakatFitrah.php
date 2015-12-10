<?php
class modelZakatFitrah{
	public function execute($query){
		return mysql_query($query);
	}

	public function fetch($var){
		return mysql_fetch_array($var);
	}

	public function selectAll(){
		$query = "SELECT * FROM tbl_zakat_fitrah";
		return $this->execute($query);
	}

	public function selectPetugas(){
		$query = "SELECT * FROM tbl_petugas";
		return $this->execute($query);
	}

	public function insert($id_zakat_fitrah, $petugas, $tanggal, $nama_pembayar, $alamat, $telpon, $jenis, $satuan, $jiwa, $jumlah, $session){
		$query = "INSERT INTO tbl_zakat_fitrah VALUES ('$id_zakat_fitrah', '$petugas', '$tanggal', '$nama_pembayar', '$alamat', '$telpon', '$jenis', '$satuan', '$jiwa', '$jumlah', '$session')";
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