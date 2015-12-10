<?php
include "model/modelUser.php";
class userController{
	public $model;
	public function __construct(){
		$this->model = new modelUser();
	}

	public function view(){
		$data = $this->model->selectAll();
		include "view/data_user/lihat_user.php";
	}

	public function viewInsert(){
		$carikode = $this->model->cariCode();
		$datakode = $this->model->fetch($carikode);
		if($datakode){
			$nilaikode = substr($datakode[0], 1);
			$kode = (int) $nilaikode;
			$kode = $kode + 1;
			$hasilkode = "U".str_pad($kode, 5, "0", STR_PAD_LEFT);
		}else{
			$hasilkode = "U00001";
		}
		$data = $this->model->selectPetugas();
		include "view/data_user/tambah_user.php";
	}

	public function viewEdit($id){
		$data = $this->model->select($id);
		$row = $this->model->fetch($data);
		$data2 = $this->model->selectPetugas();
		include "view/data_user/edit_user.php";
	}

	public function insert(){
		$id_operator 	= @$_POST['id_operator'];
		$nama 			= @$_POST['nama'];
		$username		= @$_POST['username'];
		$password1 		= md5(@$_POST['password1']);
		$password2		= md5(@$_POST['password2']);
		$level			= @$_POST['level'];

		if($password1 != $password2){
			?>
			<script type="text/javascript">
			alert("Password Harus Sama!");
			</script>
			<?php
		}else if($nama == '' || $username == '' || $password1 == '' || $password2 == '' || $level == ''){
			?>
			<script type="text/javascript">
			alert("Inputan Tidak Boleh Kosong!");
			</script>
			<?php
		}else{
			$insert = $this->model->insert($id_operator, $nama, $username, $password1, $level);
			if($insert){
				?>
				<script type="text/javascript">
				alert("Data Berhasil Di Tambahkan!");
				window.location.href="?page=user";
				</script>
				<?php
			}else{
				?>
				<script type="text/javascript">
				alert("Data Gagal Di Tambahkan!");
				</script>
				<?php
			}
			
		}
	}

	public function edit(){

	}

	public function delete($id){
		$delete = $this->model->delete($id);
		?>
		<script type="text/javascript">
		alert("Data Berhasil Di Hapus!");
		window.location.href="?page=user";
		</script>
		<?php
	}

	public function __destruct(){

	}
}
?>