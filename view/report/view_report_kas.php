<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>REPORT KAS</h3>
			</div>
			<div class="module-body">
				<div class="module-head">
					<h3>Cetak Semua</h3>
				</div>
				<div class="module-body">
					<form class="form-horizontal row-fluid" action="report.php?page=report_all_kas" method="POST" target="blank">
					<div class="control-group">
						<div class="controls">
							<input type="submit" name="cetaksemua" class="btn btn-success" value="Cetak PDF">
						</div>
					</div>
					</form>
				</div>

				<div class="module-head">
					<h3>Cetak Laporan Periodik</h3>
				</div>
				<div class="module-body">
					<form class="form-horizontal row-fluid" action="report.php?page=report_per_kas" method="POST" target="blank">
					<div class="control-group">
						<label class="control-label" for="basicinput">Dari Tanggal</label>
						<div class="controls">
							<select name="tgl" class="span2">
						  		<?php $this->selectTanggal();?>
							</select> /
							<select name="bln" class="span3">
								<?php $this->selectBulan();?>
							</select> /
							<select name="thn" class="span2">
							<?php $this->selectTahun();?>
							</select>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Sampai Tanggal</label>
						<div class="controls">
							<select name="tgl2" class="span2">
						  		<?php $this->selectTanggal();?>
							</select> /
							<select name="bln2" class="span3">
								<?php $this->selectBulan();?>
							</select> /
							<select name="thn2" class="span2">
							<?php $this->selectTahun();?>
							</select>
						</div>
					</div>

					<div class="control-group">
						<div class="controls">
							<input type="submit" name="cetakper" class="btn btn-success" value="Cetak PDF">
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>		
	</div>
</div>