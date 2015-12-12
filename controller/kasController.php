<?php
include "model/modelkas.php";
class kasController{
	public $model;
	public function __construct(){
		$this->model = new modelKas();
	}
	
	public function viewPemasukan(){
		$carikode = $this->model->cariCode();
			$datakode = $this->model->fetch($carikode);
			if($datakode){
				$nilaikode = substr($datakode[0], 1);
				$kode = (int) $nilaikode;
				$kode = $kode + 1;
				$hasilkode = "K".str_pad($kode, 5, "0", STR_PAD_LEFT);
			}else{
				$hasilkode = "K00001";
			}
		include "view/kas/input_pemasukan.php";
	}

	public function viewPengeluaran(){
		$carikode = $this->model->cariCode();
			$datakode = $this->model->fetch($carikode);
			if($datakode){
				$nilaikode = substr($datakode[0], 1);
				$kode = (int) $nilaikode;
				$kode = $kode + 1;
				$hasilkode = "K".str_pad($kode, 5, "0", STR_PAD_LEFT);
			}else{
				$hasilkode = "K00001";
			}
		include "view/kas/input_pengeluaran.php";
	}

	public function viewKas(){
		$data = $this->model->selectAll();
		$pemasukan = $this->model->jumlahPemasukan();
		$pengeluaran = $this->model->jumlahPengeluaran();
		$hitungPem = $this->model->fetch($pemasukan);
		$hitungPen = $this->model->fetch($pengeluaran);
		$rowPemasukan = $hitungPem['hitungPemasukan'];
		$rowPengeluaran = $hitungPen['hitungPengeluaran'];
		$total = ($rowPemasukan - $rowPengeluaran);
		include "view/kas/pemasukanpengeluaran.php";
	}

	public function viewEditPemasukan($id){
		$data = $this->model->select($id);
		$row = $this->model->fetch($data);
		include "view/kas/edit_pemasukan.php";
	}

	public function viewEditPengeluaran($id){
		$data = $this->model->select($id);
		$row = $this->model->fetch($data);
		include "view/kas/edit_pengeluaran.php";
	}

	public function insertPemasukan(){
		$id_pemasukan 	= @$_POST['id_pemasukan'];
		$tanggal 		= @$_POST['thn'].'-'.@$_POST['bln'].'-'.@$_POST['tgl'];
		$ket			= @$_POST['ket'];
		$pemasukan 		= @$_POST['pemasukan'];
		$session 		= @$_SESSION['nama'];

		if($ket == "" || $pemasukan == ""){
				?>
				<script type="text/javascript">
				alert("Inputan Tidak Boleh Kosong!");
				</script>
				<?php
		}else{
				$insert 	= $this->model->insert($id_pemasukan, $tanggal, $ket, $pemasukan, 0, $session);
				if($insert){
					?>
					<script type="text/javascript">
					alert("Data Pemasukan Berhasil di Tambahkan!");
					window.location.href="?page=kas";
					</script>
					<?php
				}else{
					?>
					<script type="text/javascript">
					alert("Data Pemasukan Gagal di Tambahkan!");
					</script>
					<?php
				}
				
		}
	}

	public function insertPengeluaran(){
		$id_pengeluaran = @$_POST['id_pengeluaran'];
		$tanggal 		= @$_POST['thn'].'-'.@$_POST['bln'].'-'.@$_POST['tgl'];
		$ket			= @$_POST['ket'];
		$pengeluaran	= @$_POST['pengeluaran'];
		$session 		= @$_SESSION['nama'];

		if($ket == "" || $pengeluaran == ""){
				?>
				<script type="text/javascript">
				alert("Inputan Tidak Boleh Kosong!");
				</script>
				<?php
		}else{
				$insert = $this->model->insert($id_pengeluaran, $tanggal, $ket, 0, $pengeluaran, $session);
				if($insert){
					?>
					<script type="text/javascript">
					alert("Data Pemasukan Berhasil di Tambahkan!");
					window.location.href="?page=kas";
					</script>
					<?php
				}else{
					?>
					<script type="text/javascript">
					alert("Data Pemasukan Gagal di Tambahkan!");
					</script>
					<?php
				}
		}
	}

	public function editPemasukan(){
		$id_pemasukan 	= @$_POST['id_pemasukan'];
		$tanggal 		= @$_POST['thn'].'-'.@$_POST['bln'].'-'.@$_POST['tgl'];
		$ket			= @$_POST['ket'];
		$pemasukan 		= @$_POST['pemasukan'];
		$session 		= @$_SESSION['nama'];

		if($ket == "" || $pemasukan == ""){
				?>
				<script type="text/javascript">
				alert("Inputan Tidak Boleh Kosong!");
				</script>
				<?php
		}else{
				$update 	= $this->model->update($id_pemasukan, $tanggal, $ket, $pemasukan, 0, $session);
				if($update){
					?>
					<script type="text/javascript">
					alert("Data Pemasukan Berhasil di Edit!");
					window.location.href="?page=kas";
					</script>
					<?php
				}else{
					?>
					<script type="text/javascript">
					alert("Data Pemasukan Gagal di Edit!");
					</script>
					<?php
				}
		}
	}

	public function editPengeluaran(){
		$id_pengeluaran = @$_POST['id_pengeluaran'];
		$tanggal 		= @$_POST['thn'].'-'.@$_POST['bln'].'-'.@$_POST['tgl'];
		$ket			= @$_POST['ket'];
		$pengeluaran	= @$_POST['pengeluaran'];
		$session 		= @$_SESSION['nama'];

		if($ket == "" || $pengeluaran == ""){
				?>
				<script type="text/javascript">
				alert("Inputan Tidak Boleh Kosong!");
				</script>
				<?php
		}else{
				$update = $this->model->update($id_pengeluaran, $tanggal, $ket, 0, $pengeluaran, $session);
				if($update){
					?>
					<script type="text/javascript">
					alert("Data Pemasukan Berhasil di Edit!");
					window.location.href="?page=kas";
					</script>
					<?php
				}else{
					?>
					<script type="text/javascript">
					alert("Data Pemasukan Gagal di Edit!");
					</script>
					<?php
				}
		}
	}

	function delete($id){
			$delete = $this->model->delete($id);
			?>
				<script type="text/javascript">
					alert("Data Berhasil Di Hapus!");
					window.location.href="?page=kas";
				</script>
			<?php
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