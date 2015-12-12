<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Hitung Zakat Mal</h3>
			</div>
			<div class="module-body">
				<table>
					<tr>
						<td>Nisab</td>
						<td>:</td>
						<td>Rp. <?php $harga=number_format($nisab,0,",","."); echo $harga; ?>.00,-</td>
					</tr>

					<tr>
						<td>Total Harta</td>
						<td>:</td>
						<td>Rp. <?php $harga=number_format($totalharta,0,",","."); echo $harga; ?>.00,-</td>
					</tr>

					<tr>
						<td>Kewajiban</td>
						<td>:</td>
						<td>Rp. <?php $harga=number_format($kewajiban,0,",","."); echo $harga; ?>.00,-</td>
					</tr>

					<tr>
						<td>Selisih Harta dan Kewajiban</td>
						<td>:</td>
						<td>Rp. <?php $harga=number_format($selisih,0,",","."); echo $harga; ?>.00,-</td>
					</tr>
				</table>
				<div class="module-head">
				<h3>ZAKAT MAL</h3>
			</div>
			<div class="module-body">
			</div>
				<div align="center">
					<h1><?php echo $out?></h1>
				</div>
			</div>
		</div>		
	</div>
</div>