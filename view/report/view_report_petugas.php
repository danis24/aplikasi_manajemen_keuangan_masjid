<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>REPORT PETUGAS</h3>
			</div>
			<div class="module-body">
				<div class="module-head">
					<h3>Cetak Daftar Petugas</h3>
				</div>
				<div class="module-body">
					<form class="form-horizontal row-fluid" action="report.php?page=report_all_petugas" method="POST" target="blank">
					<div class="control-group">
						<div class="controls">
							<input type="submit" name="cetakdaftar" class="btn btn-success" value="Cetak PDF">
						</div>
					</div>
					</form>
				</div>

				<div class="module-head">
					<h3>Cetak Semua</h3>
				</div>
				<div class="module-body">
					<form class="form-horizontal row-fluid" action="report.php?page=report_petugas" method="POST" target="blank">
					<div class="control-group">
						<div class="controls">
							<input type="submit" name="cetaksemua" class="btn btn-success" value="Cetak PDF">
						</div>
					</div>
					</form>
				</div>

				<div class="module-head">
					<h3>Cetak Perorang</h3>
				</div>
				<div class="module-body">
					<form class="form-horizontal row-fluid" action="report.php?page=report_per_petugas" method="POST" target="blank">
					<div class="control-group">
						<label class="control-label" for="basicinput">Nama Petugas</label>
						<div class="controls">
							<select name="petugas" class="span6">
								<option value="">--Pilih--</option>
								<?php
								while($row = $this->model->fetch($data)){
								?>
						  		<option value="<?php echo $row['kd_petugas']?>"><?php echo $row['nm_petugas']?></option>
								<?php
								}
								?>		
							</select>
						</div>
					</div>

					<div class="control-group">
						<div class="controls">
							<input type="submit" name="cetakorang" class="btn btn-success" value="Cetak PDF">
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>		
	</div>
</div>