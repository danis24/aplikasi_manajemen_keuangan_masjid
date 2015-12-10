<html>
<head>
<style type="text/css" media="print">

	table {border: solid 1px #000; border-collapse: collapse; width: 100%}
	tr { border: solid 1px #000; page-break-inside: avoid;}
	td { padding: 7px 5px; font-size: 10px}
	th {
		font-family:Arial;
		color:black;
		font-size: 11px;
		background-color: #999;
	}
	thead {
		display:table-header-group;
	}
	tbody {
		display:table-row-group;
	}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
<style type="text/css" media="screen">
	table {border: solid 1px #000; border-collapse: collapse; width: 100%}
	tr { border: solid 1px #000}
	th {
	font-family: "Times New Roman", Times, serif;
	color: black;
	font-size: 11px;
	background-color: #999;
	padding: 8px 0;
	}
	td { padding: 7px 5px;font-size: 10px}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
<title>Laporan KAS</title>
</head>

<body onLoad="window.print()">
	<center>
	<div align="center">
	  <center>
	  <b style="font-size: 20px">MASJID JAMIE  AT-TAQWIM</b></div>
	<center><p style="font-size: 16px">Sekretariat : Kp. Cibiru Tonggoh RT 01 RW 07 Desa. Cibiru Wetan Kec. Cileunyi<br>Tlp. 022-7809838 Kab. Bandung 40625</p>
	  <hr align="center" size="3" noshade="noshade">
	  <div align="left"><strong>Laporan KAS</strong></div><br>
	</center>
	<table border="1" cellspacing="0" cellpadding="0">
		<thead>
			<tr>
			  <th width="3%">No</td>
		  	  <th width="5%">ID KAS</th>
				<th width="5%">Tanggal</td>
				<th width="15%">Keterangan</td>
				<th width="15%">Pemasukan</td>
				<th width="20%">Pengeluaran</td>
			</tr>
		</thead>
	  <tbody>
			<?php
				$no = 1;
				while($row = $this->model->fetch($data)){
				?>
					<tr class="odd gradeX">
						<td align="center"><?php echo $no++?></td>
						<td align="center"><?php echo $row['id_kas'];?></td>
						<td align="center"><?php echo $row['tanggal'];?></td>
						<td><?php echo $row['ket'];?></td>
						<td>Rp. <?php $harga=number_format($row['pemasukan'],0,",","."); echo $harga; ?>.00,-</td>
						<td>Rp. <?php $harga=number_format($row['pengeluaran'],0,",","."); echo $harga; ?>.00,-</td>
					</tr>
				<?php
				}
				?>
				<tr>
				<b><td align="center" colspan="4" valign="top">Jumlah</td></b>
				<td><strong>
				<strong>Rp. <?php $harga=number_format($hitungPem['hitungPemasukan'],0,",","."); echo $harga; ?>.00,-</strong>
				</strong></td>
						<td><strong>
				<strong>Rp. <?php $harga=number_format($hitungPen['hitungPengeluaran'],0,",","."); echo $harga; ?>.00,-</strong>
				</strong></td>
		</tr>
					<tr>
			            <td align="center" colspan="4" valign="top">Saldo</td>
			            <td align="center" colspan="2" valign="top"><strong>
				<strong>Rp. <?php $harga=number_format($hitungPem['hitungPemasukan']-$hitungPen['hitungPengeluaran'],0,",","."); echo $harga; ?>.00,-</strong>
				</strong></td>
        	</tr>
	  </tbody>
</table><br><br>
<div style="width:100%;float:center">
<div style="width:200px;float:left">
  <div align="center"><br/>
    Ketua DKM Masjid Jamie At-Taqwim
  </div>
  <p align="center">&nbsp;</p>
        <p align="center"><br/>
        (.................................)</p>
</div>
	
  <div style="width:200px;float:right">
		<div align="left">Bandung, <?php
date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("Y"));
$tglsekarang = date("d-m-Y", $tanggal);
echo $tglsekarang;
?><br/>
		Bendahara,
    </div>
		<p align="left">&nbsp;</p>
    <p align="left"><br/><br/>
    (.................................)</p>
  </div>
</body>
</html>

