<?php

	include "controller/login.php";
	include "controller/jabatanController.php";
	include "controller/petugasController.php";
	include "controller/kasController.php";
	include "controller/zakatFitrahController.php";
	include "controller/zakatMalController.php";
	include "controller/reportController.php";
	include "controller/userController.php";
	include "controller/hitungZakatController.php";

	$login 			= new login();
	$jabatan 		= new jabatanController();
	$petugas 		= new petugasController();
	$kas 			= new kasController();
	$zakatFitrah 	= new zakatFitrahController();
	$zakatMal 		= new zakatMalController();
	$report 		= new reportController();
	$user 			= new userController();
	$hitung 		= new hitungZakatController();

	$page 	= @$_GET['page'];
	$act 	= @$_GET['act'];
	$id 	= @$_GET['id'];

	if(@$_SESSION['level'] == 'admin'){
		if($page == ''){
			include "view/beranda.php";
		}else if($page == 'logout'){
			$login->logout();
		}else if($page == 'struktur_jabatan'){ //Struktur Jabatan
			if($act == ''){
				$jabatan->view();
			}else if($act == 'tambah_jabatan'){
				$jabatan->viewInsert();
			}else if($act == 'edit_jabatan'){
				$jabatan->viewEdit($id);
			}else if($act == 'hapus_jabatan'){
				$jabatan->delete($id);
			}else{
				echo "Halaman Tidak Tersedia";
			}	
		}else if($page == 'data_petugas'){ //Data Petugas
			if($act == ''){
				$petugas->view();
			}else if($act == 'tambah_petugas'){
				$petugas->viewInsert();
			}else if($act == 'detail_petugas'){
				$petugas->detailPetugas($id);
			}else if($act == 'edit_petugas'){
				$petugas->viewEdit($id);
			}else if($act == 'hapus_petugas'){
				$petugas->delete($id);
			}else{
				echo "Halaman Tidak Tersedia";
			}
		}else if($page == 'kas'){ //Data KAS
			if($act == ''){
				$kas->viewKas();
			}else if($act == 'pemasukan'){
				$kas->viewPemasukan();
			}else if($act == 'pengeluaran'){
				$kas->viewPengeluaran();
			}else if($act == 'edit_kas'){
				$data = mysql_query("SELECT * FROM tbl_kas_masjid WHERE id_kas = '$id'");
				$row = mysql_fetch_array($data);
				$cek = $row['pemasukan'];
				if($cek == '0'){
					$kas->viewEditPengeluaran($id);
				}else{
					$kas->viewEditPemasukan($id);
				}
			}else if($act == 'hapus_kas'){
				$kas->delete($id);
			}else{
				echo "Halaman Tidak Tersedia";
			}
		}else if($page == 'zakat'){ 
			if($act == 'zakat_fitrah'){
				$zakatFitrah->viewZakatFitrah();
			}else if($act == 'zakat_mal'){
				$zakatMal->viewZakatMal();
			}else if($act == 'hitung_zakat'){
				$hitung->hitungZakat();
			}else{
				echo "Halaman Tidak Tersedia";
			}
		}else if($page == 'report'){
			if($act == 'report_kas'){
				$report->viewReportKas();
			}else if($act == 'report_petugas'){
				$report->viewReportPetugas();
			}else if($act == 'report_zakat_fitrah'){
				$report->viewReportZakatFitrah();
			}else if($act == 'report_zakat_mal'){
				$report->viewReportZakatMal();
			}else{
				echo "Halaman Tidak Tersedia";
			}
		}else if($page == 'user'){
			if($act == ''){
				$user->view();
			}else if($act == 'tambah_user'){
				$user->viewInsert();
			}else if($act == 'edit_user'){
				$user->viewEdit($id);
			}else if($act == 'hapus_user'){
				$user->delete($id);
			}else{
				echo "Halaman Tidak Tersedia";
			}
		}else if($page == 'about'){
			include "view/about.php";
		}else{
			echo "Halaman Tidak Tersedia";
		}
	}else if(@$_SESSION['level'] == 'operator'){
		if($page == ''){
			include "view/beranda.php";
		}else if($page == 'logout'){
			$login->logout();
		}else if($page == 'kas'){ //Data KAS
			if($act == ''){
				$kas->viewKas();
			}else if($act == 'pemasukan'){
				$kas->viewPemasukan();
			}else if($act == 'pengeluaran'){
				$kas->viewPengeluaran();
			}else if($act == 'edit_kas'){
				$data = mysql_query("SELECT * FROM tbl_kas_masjid WHERE id_kas = '$id'");
				$row = mysql_fetch_array($data);
				$cek = $row['pemasukan'];
				if($cek == '0'){
					$kas->viewEditPengeluaran($id);
				}else{
					$kas->viewEditPemasukan($id);
				}
			}else if($act == 'hapus_kas'){
				$kas->delete($id);
			}else{
				echo "Halaman Tidak Tersedia";
			}
		}else if($page == 'zakat'){ 
			if($act == 'zakat_fitrah'){
				$zakatFitrah->viewZakatFitrah();
			}else if($act == 'zakat_mal'){
				$zakatMal->viewZakatMal();
			}else if($act == 'hitung_zakat'){
				$hitung->hitungZakat();
			}else{
				echo "Halaman Tidak Tersedia";
			}
		}else if($page == 'report'){
			if($act == 'report_kas'){
				$report->viewReportKas();
			}else if($act == 'report_petugas'){
				$report->viewReportPetugas();
			}else if($act == 'report_zakat_fitrah'){
				$report->viewReportZakatFitrah();
			}else if($act == 'report_zakat_mal'){
				$report->viewReportZakatMal();
			}else{
				echo "Halaman Tidak Tersedia";
			}
		}else{
			echo "Halaman Tidak Tersedia";
		}
	}else if($page == 'about'){
			include "view/about.php";
	}else{
		?>
		<script type="text/javascript">
		alert("Session Salah");
		</script>
		<?php
	}
?>