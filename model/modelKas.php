<?php
class modelKas{

	public function execute($query){
		return mysql_query($query);
	}

	public function fetch($var){
		return mysql_fetch_array($var);
	}

	public function selectAll(){
		$query = "SELECT * FROM tbl_kas_masjid";
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

	public function select($id){
		$query = "SELECT * FROM tbl_kas_masjid WHERE id_kas = '$id'";
		return $this->execute($query);
	}

	public function insert($id_kas, $tanggal, $ket, $pemasukan, $pengeluaran, $session){
		$query  = "INSERT INTO tbl_kas_masjid (id_kas, tanggal, ket, pemasukan, pengeluaran, session) VALUES ('$id_kas', '$tanggal', '$ket', '$pemasukan', '$pengeluaran', '$session')";
		return $this->execute($query);
	}

	public function update($id_kas, $tanggal, $ket, $pemasukan, $pengeluaran, $session){
		$query  = "UPDATE tbl_kas_masjid SET tanggal = '$tanggal', ket = '$ket', pemasukan = '$pemasukan', pengeluaran = '$pengeluaran' session = '$session' WHERE id_kas = 'id_kas'";
		return $this->execute($query);
	}

	public function delete($id){
		$query = "DELETE FROM tbl_kas_masjid WHERE id_kas = '$id'";
		return $this->execute($query);
	}

	public function cariCode(){
			$query = "SELECT MAX(id_kas) FROM tbl_kas_masjid";
			return $this->execute($query);
	}
}
?>