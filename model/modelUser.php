<?php
class modelUser{
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
		$query = "SELECT * FROM operator";
		return $this->execute($query);
	}

	public function select($id){
		$query = "SELECT * FROM operator WHERE id_operator = '$id'";
		return $this->execute($query);
	}

	public function insert($id_operator, $nama, $username, $password, $level){
		$query = "INSERT INTO operator VALUES ('$id_operator', '$nama', '$username', '$password', '$level')";
		return $this->execute($query);
	}

	public function update($id_operator, $nama, $username, $password, $level){
		$query = "UPDATE operator SET nama = '$nama', username = '$username', password = '$password', level = '$level' WHERE id_operator = '$id_operator'";
		return $this->execute($query);
	}

	public function delete($id){
		$query = "DELETE FROM operator WHERE id_operator = '$id'";
		return $this->execute($query);
	}

	public function cariCode(){
		$query = "SELECT MAX(id_operator) FROM operator";
		return $this->execute($query);
	}

	public function selectPetugas(){
		$query = "SELECT * FROM tbl_petugas";
		return $this->execute($query);
	}
}
?>