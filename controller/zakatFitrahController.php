<?php

include "model/modelZakatFitrah.php";
class zakatFitrahController{
	public $model;
	public function __construct(){
		$this->model = new modelZakatFitrah();
	}

	public function viewZakatFitrah(){
		$code = $this->model->genCode('ZF', 'id_zakat_fitrah', 'tbl_zakat_fitrah', '5');
		$data = $this->model->selectPetugas();
		include "view/zakat_fitrah/input_zakat_fitrah.php";
	}

	public function insert(){
		$petugas 			= @$_POST['petugas'];
		$tanggal 			= @$_POST['thn'].'-'.@$_POST['bln'].'-'.@$_POST['tgl'];
		$id_zakat_fitrah 	= @$_POST['id_zakat_fitrah'];
		$nama_pembayar 		= @$_POST['nama_pembayar'];
		$alamat 			= @$_POST['alamat'];
		$telpon 			= @$_POST['telpon'];
		$jenis 				= @$_POST['jenis'];
		$satuan 			= @$_POST['satuan'];
		$jiwa 				= @$_POST['jiwa'];
		$jumlah 			= $satuan * $jiwa;
		$session 			= @$_SESSION['nama'];

		$insert = $this->model->insert($id_zakat_fitrah, $petugas, $tanggal, $nama_pembayar, $alamat, $telpon, $jenis, $satuan, $jiwa, $jumlah, $session);
		if($insert){
			?>
			<script type="text/javascript">
			alert("Data Berhasil di tambahkan!");
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
			alert("Data Gagal di tambahkan!");
			</script>
			<?php
		}
		
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