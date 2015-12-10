<?php
class hitungZakatController{
	public $h_emas;
	public $h_perak;
	public $uang;
	public $saham;
	public $piutang;
	public $hutang;

	public function hitungZakat(){
		include "view/hitung_zakat/hitung.php";
	}
	
	public function nisabEmas($h_emas, $uang = 0, $saham = 0, $piutang = 0, $hutang = 0){
		$nisab = $h_emas * 85;
		$totalharta = $uang+$saham+$piutang;
		$kewajiban = $hutang;
		$selisih = $totalharta - $kewajiban;
		$zakat = ($selisih * 2.5) / 100;

		if($selisih >= $nisab){
			echo "$zakat";
		}else{
			echo "Tidak Wajib Zakat";
		}
	}

	public function nisabPerak($h_perak, $uang = 0, $saham = 0, $piutang = 0, $hutang = 0){
		$nisab = $h_perak * 595;
		$totalharta = $uang+$saham+$piutang;
		$kewajiban = $hutang;
		$selisih = $totalharta - $kewajiban;
		$zakat = ($selisih * 2.5) / 100;

		if($selisih >= $nisab){
			echo "$zakat";
		}else{
			echo "Tidak Wajib Zakat";
		}
	}	

}
?>