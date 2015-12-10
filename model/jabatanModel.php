<?php

	class jabatanModel{

		public function selectAll(){
			$query = "SELECT * FROM tbl_struk_jabatan";
			return mysql_query($query);
		}

		public function select($id){
			$query = "SELECT * FROM tbl_struk_jabatan WHERE kd_jab = '$id'";
			return mysql_query($query);
		}

		public function cekData($nm_jab){
			$query = "SELECT * FROM tbl_struk_jabatan WHERE nm_jab='$nm_jab'";
			return mysql_query($query);
		}


		public function insert($kd_jab, $nm_jab, $ket){
			$query = "INSERT INTO tbl_struk_jabatan VALUES ('$kd_jab', '$nm_jab', '$ket')";
			return mysql_query($query);
		}

		public function update($kd_jab, $nm_jab, $ket){
			$query = "UPDATE tbl_struk_jabatan SET nm_jab='$nm_jab', ket='$ket' WHERE kd_jab='$kd_jab'";
			return mysql_query($query);
		}

		public function delete($id){
			$query = "DELETE FROM tbl_struk_jabatan WHERE kd_jab='$id'";
			return mysql_query($query);
		}

		public function cariCode(){
			$query = "SELECT MAX(kd_jab) FROM tbl_struk_jabatan";
			return mysql_query($query);
		}
	}
?>