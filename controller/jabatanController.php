<?php

	include "model/jabatanModel.php";

	class jabatanController{

		public $model;

		function __construct(){
			$this->model = new jabatanModel();
		}

		function view(){
			$data = $this->model->selectAll();
			include "view/data_jabatan/lihat_jabatan.php";
		}

		function viewInsert(){
			$carikode = $this->model->cariCode();
			$datakode = mysql_fetch_array($carikode);
			if($datakode){
				$nilaikode = substr($datakode[0], 1);
				$kode = (int) $nilaikode;
				$kode = $kode + 1;
				$hasilkode = "J".str_pad($kode, 5, "0", STR_PAD_LEFT);
			}else{
				$hasilkode = "J00001";
			}
			
			include "view/data_jabatan/tambah_jabatan.php";
		}

		function viewEdit($id){
			$data = $this->model->select($id);
			$row = mysql_fetch_array($data);
			include "view/data_jabatan/edit_jabatan.php";
		}

		function insert(){
			$kd_jab = @$_POST['kd_jab'];
			$nm_jab = @$_POST['nm_jab'];
			$ket = @$_POST['ket'];

			$data = $this->model->cekData($nm_jab);
			$cek_data = mysql_num_rows($data);
			
			if($cek_data > 0){
				?>
				<script type="text/javascript">
				alert("Data Jabatan Sudah Ada!");
				</script>
				<?php
			}else{
				$insert = $this->model->insert($kd_jab, $nm_jab, $ket);
				if($insert){
					?>
					<script type="text/javascript">
					alert("Data Jabatan Berhasil di Tambahkan!");
					window.location.href="?page=struktur_jabatan";
					</script>
					<?php
				}else{
					?>
					<script type="text/javascript">
					alert("Data Jabatan Gagal di Tambahkan!");
					</script>
					<?php
				}
			}
		}

		function update(){
			$kd_jab = @$_POST['kd_jab'];
			$nm_jab = @$_POST['nm_jab'];
			$ket = @$_POST['ket'];

			$data = $this->model->cekData($nm_jab);
			$cek_data = mysql_num_rows($data);
			
			if($cek_data > 1){
				?>
				<script type="text/javascript">
				alert("Data Jabatan Sudah Ada!");
				</script>
				<?php
			}else{
				$update = $this->model->update($kd_jab, $nm_jab, $ket);
				if($update){
					?>
					<script type="text/javascript">
					alert("Data Jabatan Berhasil di Edit!");
					window.location.href="?page=struktur_jabatan";
					</script>
					<?php
				}else{
					?>
					<script type="text/javascript">
					alert("Data Jabatan Gagal di Edit!");
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
					window.location.href="?page=struktur_jabatan";
				</script>
			<?php
		}

		function __destruct(){

		}

	}
?>