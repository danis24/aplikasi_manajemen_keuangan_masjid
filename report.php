<?php
@session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
header("location:login.php");
} else {
	include "controller/reportController.php";

	$page = @$_GET['page'];
	$report = new reportController();

	if(@$_SESSION['level'] == 'admin'){
		if($page == 'report_all_kas'){
			$report->reportKasAll();
		}else if($page == 'report_per_kas'){
			$report->reportKasPer();
		}else if($page == 'report_all_petugas'){
			$report->reportPetugasAll();
		}else if($page == 'report_per_petugas'){
			$report->reportPerPetugas();
		}else if($page == 'report_petugas'){
			$report->reportPetugas();
		}else if($page == 'report_all_zakat_fitrah'){
			$report->reportZakatFitrahAll();
		}else if($page == 'report_per_zakat_fitrah'){
			$report->reportZakatFitrahPer();
		}else if($page == 'report_zakat_fitrah'){
			$report->reportZakatFitrah();
		}else if($page == 'report_all_zakat_mal'){
			$report->reportZakatMalAll();
		}else if($page == 'report_per_zakat_mal'){
			$report->reportZakatMalPer();
		}else if($page == 'report_zakat_mal'){
			$report->reportZakatMal();
		}else{
			echo "Halaman Tidak Tersedia";
		}
	}else if(@$_SESSION['level'] == 'operator'){
		if($page == 'report_all_kas'){
			$report->reportKasAll();
		}else if($page == 'report_per_kas'){
			$report->reportKasPer();
		}else if($page == 'report_all_petugas'){
			$report->reportPetugasAll();
		}else if($page == 'report_per_petugas'){
			$report->reportPerPetugas();
		}else if($page == 'report_petugas'){
			$report->reportPetugas();
		}else if($page == 'report_all_zakat_fitrah'){
			$report->reportZakatFitrahAll();
		}else if($page == 'report_per_zakat_fitrah'){
			$report->reportZakatFitrahPer();
		}else if($page == 'report_zakat_fitrah'){
			$report->reportZakatFitrah();
		}else if($page == 'report_all_zakat_mal'){
			$report->reportZakatMalAll();
		}else if($page == 'report_per_zakat_mal'){
			$report->reportZakatMalPer();
		}else if($page == 'report_zakat_mal'){
			$report->reportZakatMal();
		}else{
			echo "Halaman Tidak Tersedia";
		}
	}else{
		echo "Halaman Tidak Tersedia";
	}
}
?>