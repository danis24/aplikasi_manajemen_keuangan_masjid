<?php

	class modelPetugas{

		public function execute($query){
			return mysql_query($query);
		}

		public function fetch($var){
			return mysql_fetch_array($var);
		}

		public function numRow($data){
			return mysql_num_rows($data);
		}

		public function selectAll(){
			$query = "SELECT * FROM tbl_petugas INNER JOIN tbl_struk_jabatan ON kd_jab = jabatan";
			return $this->execute($query);
		}

		public function selectJabatan(){
			$query = "select * from tbl_struk_jabatan";
			return $this->execute($query);
		}

		public function select($id){
			$query = "SELECT * FROM tbl_petugas WHERE kd_petugas = '$id'";
			return $this->execute($query);
		}


		public function insert($kd_petugas, $no_ktp, $nm_petugas, $tmpt_lahir, $tgl_lahir, $alamat, $jk, $jabatan, $no_telpon, $status, $thn_jabatan, $nama_gambar){
			$query = "INSERT INTO tbl_petugas VALUES ('$kd_petugas', '$no_ktp', '$nm_petugas', '$tmpt_lahir', '$tgl_lahir', '$alamat', '$jk', '$jabatan', '$no_telpon', '$status', '$thn_jabatan', '$nama_gambar')";
			return $this->execute($query);
		}

		public function update($kd_petugas, $no_ktp, $nm_petugas, $tmpt_lahir, $tgl_lahir, $alamat, $jk, $jabatan, $no_telpon, $status, $thn_jabatan){
			$query = "UPDATE tbl_petugas SET no_ktp='$no_ktp', nm_petugas='$nm_petugas', tmpt_lahir='$tmpt_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat', jk='$jk', jabatan='$jabatan', no_telpon='$no_telpon', status='$status', thn_jabatan='$thn_jabatan' WHERE kd_petugas='$kd_petugas'";
			return $this->execute($query);
		}

		public function delete($id){
			$query = "DELETE FROM tbl_petugas WHERE kd_petugas='$id'";
			return $this->execute($query);
		}

		public function cekJab($jabatan){
			$query = "SELECT * FROM tbl_petugas WHERE jabatan = '$jabatan'";
			return $this->execute($query);
		} 

		public function cariCode(){
			$query = "SELECT MAX(kd_petugas) FROM tbl_petugas";
			return $this->execute($query);
		}

		// public function genCode($first, $field, $table, $char){

		// 	$query = "SELECT MAX(RIGHT($field, $char)) as maxID FROM $table ORDER BY $field";
		// 	$get = $this->execute($query);
		// 	$code = $this->fetch($get);
		// 	$genKode = $code['maxID'];
		// 	$getCode = (int) substr($genKode, 1, $char);
		// 	$getCode++;
		// 	$theCode = $first.sprintf("%0".$char."s", $getCode);
		// 	return $theCode;

		// }
	}
?>