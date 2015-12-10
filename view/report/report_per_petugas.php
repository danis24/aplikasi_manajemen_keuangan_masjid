<?php
while($row = $this->model->fetch($data)){
?>
<html>
<head>
<style type="text/css" media="print">

	table {border: solid 1px #000; border-collapse: collapse; width: 100%}
	tr { border: solid 1px #000; page-break-inside: avoid;}
	td { padding: 7px 5px; font-size: 16px}
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
	td { padding: 7px 5px;font-size: 16px}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
<title>Laporan Petugas</title>
</head>

<body onLoad="window.print()">


	<center>
	<div align="center">
	  <center>
	  <b style="font-size: 20px">MASJID JAMIE  AT-TAQWIM</b></div>
<center><p style="font-size: 16px">Sekretariat : Kp. Cibiru Tonggoh RT 01 RW 07 Desa. Cibiru Wetan Kec. Cileunyi<br>Tlp. 022-7809838 Kab. Bandung 40625</p>
	  <hr align="center" size="3" noshade="noshade">
  <div align="left"><strong>Laporan Petugas</strong></div><br>
  <table width="100%" border="1">
    <tr>
      <td width="21%" rowspan="6"><img src="assets/images/foto/<?php echo $row['foto']?>" width="180px" height="240"></td>
      <td width="23%">Kode</td>
      <td width="2%">:</td>
      <td width="54%"><?php echo $row['kd_petugas']?></td>
    </tr>
    <tr>
      <td>Nomor KTP</td>
      <td>:</td>
      <td><?php echo $row['no_ktp']?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><?php echo $row['nm_petugas']?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td><?php echo $row['jk']?></td>
    </tr>
    <tr>
      <td>Tempat Lahir</td>
      <td>:</td>
      <td><?php echo $row['tmpt_lahir']?></td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td>:</td>
      <td><?php echo $row['tgl_lahir']?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Alamat</td>
      <td>:</td>
      <td><?php echo $row['alamat']?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Jabatan</td>
      <td>:</td>
      <td><?php echo $row['nm_jab']?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>No Telpon</td>
      <td>:</td>
      <td><?php echo $row['no_telpon']?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Status</td>
      <td>:</td>
      <td><?php echo $row['status']?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Tahun Jabatan</td>
      <td>:</td>
      <td><?php echo $row['thn_jabatan']?></td>
    </tr>
  </table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </center>
  </center>
</body>
</html>
<?php
}
?>