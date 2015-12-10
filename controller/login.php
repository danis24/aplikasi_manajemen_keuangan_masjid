<?php
@session_start();
include "model/modelLogin.php";

class login{
	public $model;
	function __construct(){
		$this->model = new modelLogin();
	}

	function login(){
		$username = @$_POST['username'];
		$password = @$_POST['password'];

		$sql = $this->model->select($username, $password);
		$data = $this->model->fetch($sql);
		$cek = mysql_num_rows($sql);

		if($cek > 0){
			session_start();
			@$_SESSION['nama'] 			= $data['nama'];
			@$_SESSION['username'] 		= $data['username'];
			@$_SESSION['level'] 		= $data['level'];
			header("location:index.php");
		}else{
			?>
			<script type="text/javascript">
				alert("Username / Password Salah, Silahkan Coba Lagi!");
			</script>
			<?php
		}
	}

	function logout(){
		session_destroy();
		?>
		<script type="text/javascript">
			alert("Logout Berhasil!");
			window.location.href="login.php";
		</script>
		<?php
	}

	function __destruct(){

	}
}
?>