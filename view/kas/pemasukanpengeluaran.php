<div class="module">
	<div class="module-head">
		<h3>Data Pemasukan & Pengeluaran</h3>
	</div><br>
	<div class="module-head">
		<tr><strong>
			<td>Saldo</td>
			<td>:</td>
			<td>Rp. <?php $harga=number_format($total,0,",","."); echo $harga; ?>.00,-</td></strong>
		</tr><br>
		<tr><strong>
			<td>Jumlah Pemasukan</td>
			<td>:</td>
			<td>Rp. <?php $harga=number_format($rowPemasukan,0,",","."); echo $harga; ?>.00,-</td></strong>
		</tr><br>
		<tr><strong>
			<td>Jumlah Pengeluaran</td>
			<td>:</td>
			<td>Rp. <?php $harga=number_format($rowPengeluaran,0,",","."); echo $harga; ?>.00,-</td></strong>
		</tr>
	</div>
		<div class="module-body table">
			<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Keterangan</th>
						<th>Pemasukan</th>
						<th>Pengeluaran</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody><?php
				$no = 1;
				while($row = $this->model->fetch($data)){
				?>
					<tr class="odd gradeX">
						<td align="center"><?php echo $no++?></td>
						<td align="center"><?php echo $row['tanggal'];?></td>
						<td><?php echo $row['ket'];?></td>
						<td>Rp. <?php $harga=number_format($row['pemasukan'],0,",","."); echo $harga; ?>.00,-</td>
						<td>Rp. <?php $harga=number_format($row['pengeluaran'],0,",","."); echo $harga; ?>.00,-</td>
						<td align="center">
							<a href="?page=kas&act=edit_kas&id=<?php echo $row['id_kas'];?>"><i class="btn btn-success icon-edit"></i></a>
							<a onclick="return confirm('Yakin akan menghapus data ?');" href="?page=kas&act=hapus_kas&id=<?php echo $row['id_kas'];?>"><i class="btn btn-danger icon-trash"></i></a>
						</td>
					</tr>
				<?php
				}
				?>
				</tbody>
			</table>
		</div>
</div>