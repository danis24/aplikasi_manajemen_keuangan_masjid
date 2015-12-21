<?php
class hitungZakatController{
	public $h_emas;
	public $h_perak;
	public $uang;
	public $saham;
	public $piutang;
	public $hutang;
	public $out;
	
	public function nisabEmas($h_emas = 511000, $uang = 0, $saham = 0, $piutang = 0, $hutang = 0){
		$nisab = $h_emas * 85;
		$totalharta = $uang+$saham+$piutang;
		$kewajiban = $hutang;
		$selisih = $totalharta - $kewajiban;
		$zakat = ($selisih * 2.5) / 100;
		$out = "";

		if($selisih >= $nisab){
			$out =  $zakat;
		}else{
			$out = "Tidak Wajib Zakat";
		}

		return $out;
	}

	public function nisabPerak($h_perak = 11000, $uang = 0, $saham = 0, $piutang = 0, $hutang = 0){
		$nisab = $h_perak * 595;
		$totalharta = $uang+$saham+$piutang;
		$kewajiban = $hutang;
		$selisih = $totalharta - $kewajiban;
		$zakat = ($selisih * 2.5) / 100;

		$out = "";

		if($selisih >= $nisab){
			$out =  $zakat;
		}else{
			$out =  "Tidak Wajib Zakat";
		}

		return $out;
	}			

}
?>