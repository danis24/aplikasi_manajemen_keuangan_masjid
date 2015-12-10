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
<title>Laporan Zakat Mal</title>
</head>

<body onLoad="window.print()">


	<center>
	<div align="center">
	  <center>
	  <b style="font-size: 20px">MASJID JAMIE  AT-TAQWIM</b></div>
<center><p style="font-size: 16px">Sekretariat : Kp. Cibiru Tonggoh RT 01 RW 07 Desa. Cibiru Wetan Kec. Cileunyi<br>Tlp. 022-7809838 Kab. Bandung 40625</p>
	  <hr align="center" size="3" noshade="noshade">
  <div align="left"><strong>Laporan Zakat Mal</strong></div><br>
  <table width="100%" border="1">
    <tr>
      <td width="30%">Kode</td>
      <td width="2%">:</td>
      <td width="68%"><?php echo $row['id_zakat_mal']?></td>
    </tr>
    <tr>
      <td>Petugas</td>
      <td>:</td>
      <td><?php echo $row['nm_petugas']?></td>
    </tr>
    <tr>
      <td>Tanggal Bayar</td>
      <td>:</td>
      <td><?php echo $row['tanggal']?></td>
    </tr>
    <tr>
      <td>Nama Pembayar</td>
      <td>:</td>
      <td><?php echo $row['nama_pembayar']?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><?php echo $row['alamat']?></td>
    </tr>
    <tr>
      <td>No Telpon</td>
      <td>:</td>
      <td><?php echo $row['telpon']?></td>
    </tr>
    <tr>
      <td>Tahun Bayar</td>
      <td>:</td>
      <td><?php echo $row['tahun']?></td>
    </tr>
    <tr>
      <td>Jumlah Bayar</td>
      <td>:</td>
      <td><strong>Rp. <?php $harga=number_format($row['jumlah'],0,",","."); echo $harga; ?>.00,-</strong></td>
    </tr>
  </table>
  </center>
  </center>
</body>
</html>
<?php
}
?>