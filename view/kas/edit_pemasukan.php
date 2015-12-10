<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Edit Data Pemasukan</h3>
			</div>
			<div class="module-body">
				<form class="form-horizontal row-fluid" method="POST">
					<div class="control-group">
						<label class="control-label" for="basicinput">Kode Pemasukan</label>
						<div class="controls">
							<input type="text" id="basicinput" name="id_pemasukan" value="<?php echo $row['id_kas']?>" class="span3" readonly="readonly">
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
							<input type="text" id="basicinput" value="<?php echo $row['ket']?>" name="ket" class="span8">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Jumlah Pemasukan</label>
						<div class="controls">
							<input type="text" id="basicinput" name="pemasukan" value="<?php echo $row['pemasukan']?>" class="span4" onkeyup="validasiAngka(this);" onblur="validasi_numstring(this);">
						</div>
					</div>

					<div class="control-group">
						<div class="controls">
							<input type="submit" name="edit" class="btn btn-success" value="Edit">
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
if(@$_POST['edit']){
	$main = new kasController();
	$main->editPemasukan();
}
?>