<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Input Zakat Mal</h3>
			</div>
			<div class="module-body">
				<form class="form-horizontal row-fluid" method="POST">
					<div class="control-group">
						<label class="control-label" for="basicinput">Petugas *</label>
						<div class="controls">
							<select name="petugas" class="span4">
								<?php while($row = $this->model->fetch($data)){
								?>
									<option value="<?php echo $row['kd_petugas'];?>"><?php echo $row['nm_petugas'];?></option>
								<?php }?>
							</select>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Tanggal *</label>
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
						<label class="control-label" for="basicinput">Nomor</label>
						<div class="controls">
							<input type="text" id="basicinput" name="id_zakat_mal" class="span4" value="<?php echo $code?>" readonly="readonly">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Nama Pembayar *</label>
						<div class="controls">
							<input type="text" id="basicinput" name="nama_pembayar" class="span4" placeholder="Nama .." required>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Alamat *</label>
						<div class="controls">
							<textarea class="span8" rows="5" type="text" placeholder="Alamat.." name="alamat" required></textarea>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Nomor Telpon</label>
						<div class="controls">
							<input type="text" id="basicinput" name="telpon" class="span4" placeholder="No Telpon .." onkeyup="validasiAngka(this);" onblur="validasi_numstring(this);">
						</div>
					</div>

					<div class="control-group">
					<label class="control-label" for="basicinput">Tahun *</label>
					<div class="controls">
						<select tabindex="1" class="span3" name="tahun">
							<?php for($i=date('Y');$i>=date('Y')-32;$i-=1){
								echo "<option value='$i'> $i </option>";
								}
							?>
						</select>
					</div>
				</div>

				<div class="control-group">
						<label class="control-label" for="basicinput">Pembayaran *</label>
						<div class="controls">
							<input type="text" id="basicinput" name="jumlah" class="span4" value="0" onkeyup="validasiAngka(this);" onblur="validasi_numstring(this);" required><br><br>
						</div>
					</div>

					<div class="control-group">
						<div class="controls">
							<input type="submit" name="tambah" class="btn btn-success" value="Tambah">
							<button type="reset" class="btn btn-danger">Reset</button>
							<a href="?page=zakat&act=hitung_zakat" class="btn btn-primary">Hitung Zakat Mal</a>
						</div>
					</div>
				</form>
				<?php
				if(@$_POST['tambah']){
					$main = new zakatMalController();
					$main->insert();
				}
				?>
			</div>
		</div>
	</div>
</div>