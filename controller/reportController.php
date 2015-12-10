<?php
include "model/modelReport.php";
class reportController{
	public $model;
	public function __construct(){
		$this->model = new modelReport();
	}

	public function viewReportKas(){
		include "view/report/view_report_kas.php";
	}

	public function viewReportPetugas(){
		$data = $this->model->selectAllPetugas();
		include "view/report/view_report_petugas.php";
	}

	public function viewReportZakatFitrah(){
		include "view/report/view_report_zakat_fitrah.php";
	}

	public function viewReportZakatMal(){
		include "view/report/view_report_zakat_mal.php";
	}

	public function reportKasAll(){
		$data = $this->model->selectAllKas();
		$pemasukan = $this->model->jumlahPemasukan();
		$pengeluaran = $this->model->jumlahPengeluaran();
		$hitungPem = $this->model->fetch($pemasukan);
		$hitungPen = $this->model->fetch($pengeluaran);
		include "view/report/report_kas.php";
	}

	public function reportKasPer(){
		$tgl_start	= @$_POST['thn'].'-'.@$_POST['bln'].'-'.@$_POST['tgl'];
		$tgl_end 	= @$_POST['thn2'].'-'.@$_POST['bln2'].'-'.@$_POST['tgl2'];

		$data = $this->model->selectPerKas($tgl_start, $tgl_end);
		$pemasukan = $this->model->jumlahPemasukanPer($tgl_start, $tgl_end);
		$pengeluaran = $this->model->jumlahPengeluaranPer($tgl_start, $tgl_end);
		$hitungPem = $this->model->fetch($pemasukan);
		$hitungPen = $this->model->fetch($pengeluaran);
		include "view/report/report_kas.php";
	}

	public function reportPetugasAll(){
		$data = $this->model->selectAllPetugas();
		include "view/report/report_petugas.php";
	}

	public function reportPetugas(){
		$data = $this->model->selectAllPetugas();
		include "view/report/report_per_petugas.php";
	}

	public function reportPerPetugas(){
		$petugas = @$_POST['petugas'];

		$data = $this->model->selectPerPetugas($petugas);
		include "view/report/report_per_petugas.php";
	}

	public function reportZakatFitrahAll(){
		$data = $this->model->selectAllZakatFitrah();
		include "view/report/report_per_zakat_fitrah.php";
	}

	public function reportZakatFitrahPer(){
		$tgl_start	= @$_POST['thn'].'-'.@$_POST['bln'].'-'.@$_POST['tgl'];
		$tgl_end 	= @$_POST['thn2'].'-'.@$_POST['bln2'].'-'.@$_POST['tgl2'];

		$data = $this->model->selectPerZakatFitrah($tgl_start, $tgl_end);
		include "view/report/report_per_zakat_fitrah.php";
	}

	public function reportZakatFitrah(){
		$id_zakat_fitrah = @$_POST['id_zakat_fitrah'];

		$data = $this->model->selectZakatFitrah($id_zakat_fitrah);
		include "view/report/report_zakat_fitrah.php";
	}

	public function reportZakatMalAll(){
		$data = $this->model->selectAllZakatMal();
		include "view/report/report_per_zakat_mal.php";
	}

	public function reportZakatMalPer(){
		$tgl_start	= @$_POST['thn'].'-'.@$_POST['bln'].'-'.@$_POST['tgl'];
		$tgl_end 	= @$_POST['thn2'].'-'.@$_POST['bln2'].'-'.@$_POST['tgl2'];

		$data = $this->model->selectPerZakatMal($tgl_start, $tgl_end);
		include "view/report/report_per_zakat_mal.php";
	}

	public function reportZakatMal(){
		$id_zakat_mal = @$_POST['id_zakat_mal'];

		$data = $this->model->selectZakatMal($id_zakat_mal);
		include "view/report/report_zakat_mal.php";
	}

	public function selectTanggal(){
		for ($i=1; $i<=31; $i++){
	    $lebar=strlen($i);
	    switch($lebar){
	      case 1:
	      {
	        $g="0".$i;
	        break;     
	      }
	      case 2:
	      {
	        $g=$i;
	        break;     
	      }      
	    }  
	    if ($i==date("d"))
	      echo "<option value=$g selected>$g</option>";
	    else
	      echo "<option value=$g>$g</option>";
	  }
	}

	public function selectBulan(){
		$nama_bln = array(1=>"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
		  for ($bln=1; $bln<=12; $bln++){
		      if ($bln==date("m"))
		         echo "<option value=$bln selected>$nama_bln[$bln]</option>";
		      else
		        echo "<option value=$bln>$nama_bln[$bln]</option>";
		  }
	}

	public function selectTahun(){
		$thun = date("Y");
		for($t=$thun; $t>=1970; $t--){
			echo "<option value='$t'>$t</option>";
		}
	}

	public function __destruct(){

	}
}
?>