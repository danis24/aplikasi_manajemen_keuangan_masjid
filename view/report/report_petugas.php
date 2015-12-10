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
		background-color:lightgrey;
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
	</center>
	<table border="1" cellspacing="0" cellpadding="0">
		<thead>
			<tr>
			  <th width="3%">No</td>
		  	  <th width="5%">Kode</th>
				<th width="20%">Nama</td>
				<th width="10%">JK</td>
				<th width="15%">Jabatan</td>
				<th width="15%">No Telpon</td>
				<th width="5%">Status</td>
				<th width="5%">Tahun Jabatan</td>
			</tr>
		</thead>
	  <tbody>
			<?php
				$no = 1;
				while($row = $this->model->fetch($data)){
				?>
					<tr class="odd gradeX">
						<td align="center"><?php echo $no++?></td>
						<td align="center"><?php echo $row['kd_petugas'];?></td>
						<td><?php echo $row['nm_petugas'];?></td>
						<td><?php echo $row['jk'];?></td>
						<td><?php echo $row['nm_jab'];?></td>
						<td><?php echo $row['no_telpon'];?></td>
						<td align="center"><?php echo $row['status'];?></td>
						<td align="center"><?php echo $row['thn_jabatan'];?></td>
					</tr>
				<?php
				}
				?>
	  </tbody>
</table><br><br>
</body>
</html>

