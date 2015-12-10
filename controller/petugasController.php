<?php
include "model/modelPetugas.php";

class petugasController{
	public $model;

	public function __construct(){
		$this->model = new modelPetugas();
	}

	public function view(){
		$data = $this->model->selectAll();
		include "view/data_petugas/lihat_petugas.php";
	}

	public function detailPetugas($id){
		$data = $this->model->select($id);
		$row = $this->model->fetch($data);
		include "view/data_petugas/detail_petugas.php";
	}

	public function viewInsert(){
		$carikode = $this->model->cariCode();
		$datakode = $this->model->fetch($carikode);
		if($datakode){
			$nilaikode = substr($datakode[0], 1);
			$kode = (int) $nilaikode;
			$kode = $kode + 1;
			$hasilkode = "P".str_pad($kode, 5, "0", STR_PAD_LEFT);
		}else{
			$hasilkode = "P00001";
		}
		$data = $this->model->selectJabatan();
		include "view/data_petugas/tambah_petugas.php";
	}

	public function viewEdit($id){
		$data = $this->model->select($id);
		$row = $this->model->fetch($data);
		$jab = $this->model->selectJabatan();
		include "view/data_petugas/edit_petugas.php";
	}

	public function insert(){
		$kd_petugas 		= @$_POST['kd_petugas'];
		$no_ktp 			= @$_POST['no_ktp'];
		$nm_petugas 		= @$_POST['nm_petugas'];
		$tmpt_lahir 		= @$_POST['tmpt_lahir'];
		$tgl_lahir 			= @$_POST['thn'].'-'.@$_POST['bln'].'-'.@$_POST['tgl'];
		$alamat				= @$_POST['alamat'];
		$jk					= @$_POST['jk'];
		$jabatan 			= @$_POST['jabatan'];
		$no_telpon 			= @$_POST['no_telpon'];
		$status 			= @$_POST['status'];
		$thn_jabatan 		= @$_POST['thn_jabatan'];

		$sumber				= @$_FILES['foto']['tmp_name'];
		$target				= 'assets/images/foto/';
		$nama_gambar		= @$_FILES['foto']['name'];

		$data = $this->model->cekJab($jabatan);
		$cekJab = $this->model->numRow($data);

		if($cekJab > 0){
			?>
			<script type="text/javascript">alert("Jabatan Sudah Ada yang Menempati");</script>
			<?php
		}else{
			$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
			if($pindah){
				$insert = $this->model->insert($kd_petugas, $no_ktp, $nm_petugas, $tmpt_lahir, $tgl_lahir, $alamat, $jk, $jabatan, $no_telpon, $status, $thn_jabatan, $nama_gambar);
				if($insert){
					?>
					<script type="text/javascript">
					alert("Data Petugas Berhasil di Tambahkan!");
					window.location.href="?page=data_petugas";
					</script>
					<?php
				}else{
					?>
					<script type="text/javascript">
					alert("Data Petugas Gagal di Tambahkan!");
					</script>
					<?php
				}
			}else{
				?>
				<script type="text/javascript">
				alert("Foto Gagal di Upload !");
				</script>
				<?php
			}
		}
		
	}

	public function update(){
		$kd_petugas 		= @$_POST['kd_petugas'];
		$no_ktp 			= @$_POST['no_ktp'];
		$nm_petugas 		= @$_POST['nm_petugas'];
		$tmpt_lahir 		= @$_POST['tmpt_lahir'];
		$tgl_lahir 			= @$_POST['thn'].'-'.@$_POST['bln'].'-'.@$_POST['tgl'];
		$alamat				= @$_POST['alamat'];
		$jk					= @$_POST['jk'];
		$jabatan 			= @$_POST['jabatan'];
		$no_telpon 			= @$_POST['no_telpon'];
		$status 			= @$_POST['status'];
		$thn_jabatan 		= @$_POST['thn_jabatan'];

		$data = $this->model->cekJab($jabatan);
		$cekJab = $this->model->numRow($data);

		if($no_ktp == ""){
			?>
			<script type="text/javascript">
			alert("Nomor KTP Tidak Boleh Kosong!");
			</script>
			<?php
		}else if($nm_petugas == ""){
			?>
			<script type="text/javascript">
			alert("Nama Tidak Boleh Kosong!");
			</script>
			<?php
		}else if($cekJab > 1){
			?>
			<script type="text/javascript">alert("Jabatan Sudah Ada yang Menempati");</script>
			<?php
		}else{
			$update = $this->model->update($kd_petugas, $no_ktp, $nm_petugas, $tmpt_lahir, $tgl_lahir, $alamat, $jk, $jabatan, $no_telpon, $status, $thn_jabatan);
			if($update){
				?>
				<script type="text/javascript">
				alert("Data Petugas Berhasil di Di Edit!");
				window.location.href="?page=data_petugas"
				</script>
				<?php
			}else{
				?>
				<script type="text/javascript">
				alert("Data Petugas Gagal di Di Edit!");
				</script>
				<?php
			}
		}
	}

	public function delete($id){
		$this->model->delete($id);
		?>
		<script type="text/javascript">alert("Data Berhasil di Hapus");
		window.location.href="?page=data_petugas";
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

	function __destruct(){

	}
}
?>