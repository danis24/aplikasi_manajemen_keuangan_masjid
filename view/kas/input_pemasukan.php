<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Input Data Pemasukan</h3>
			</div>
			<div class="module-body">
				<form class="form-horizontal row-fluid" method="POST">
					<div class="control-group">
						<label class="control-label" for="basicinput">Kode Pemasukan</label>
						<div class="controls">
							<input type="text" id="basicinput" name="id_pemasukan" value="<?php echo $hasilkode;?>" class="span3" readonly="readonly">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Tanggal</label>
						<div class="controls">
							<select name="tgl" class="span2">
						  		<?php $this->selectTanggal();?>
							</select> /
							<select name="bln" class="span2">
								<?php $this->selectBulan();?>
							</select> /
							<select name="thn" class="span2">
							<?php $this->selectTahun();?>
							</select>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Keterangan</label>
						<div class="controls">
							<input type="text" id="basicinput" placeholder="Keterangan.." name="ket" class="span8">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Jumlah Pemasukan</label>
						<div class="controls">
							<input type="text" id="basicinput" name="pemasukan" class="span4" value="0" onkeyup="validasiAngka(this);" onblur="validasi_numstring(this);">
						</div>
					</div>

					<div class="control-group">
						<div class="controls">
							<input type="submit" name="tambah" class="btn btn-success" value="Tambah">
							<button type="reset" class="btn btn-danger">Reset</button>
							<a href="?page=kas" class="btn btn-warning">Kembali</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
if(@$_POST['tambah']){
	$main = new kasController();
	$main->insertPemasukan();
}
?>