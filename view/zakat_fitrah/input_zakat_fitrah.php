<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Input Zakat Fitrah</h3>
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
							<input type="text" id="basicinput" name="id_zakat_fitrah" class="span4" value="<?php echo $code?>" readonly="readonly">
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
						<label class="control-label" for="basicinput">Jenis Zakat *</label>
						<div class="controls">
							<label class="radio inline">
								<input name="jenis" id="optionsRadios1" value="Uang" type="radio">Uang (Rp.)
							</label> 

							<label class="radio inline">
								<input name="jenis" id="optionsRadios2" value="Beras(Liter)" type="radio">Beras (Liter)
							</label> 

							<label class="radio inline">
								<input name="jenis" id="optionsRadios3" value="Beras(Kilogram)" type="radio">Beras (Kilogram)
							</label> 
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Satuan</label>
						<div class="controls">
							<input type="text" id="basicinput" name="satuan" class="span4" placeholder="Satuan ..">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Jiwa *</label>
						<div class="controls">
							<input type="text" id="basicinput" name="jiwa" class="span4" placeholder="Jiwa .." onkeyup="validasiAngka(this);" onblur="validasi_numstring(this);"> Orang
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Jumlah</label>
						<div class="controls">
							<input type="text" id="basicinput" name="jumlah" class="span4" readonly="readonly" >
						</div>
					</div>

			
					<div class="control-group">
						<div class="controls">
							<input type="submit" name="tambah" class="btn btn-success" value="Tambah">
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
					</div>
				</form>
				<?php
				if(@$_POST['tambah']){
					$main = new zakatFitrahController();
					$main->insert();
				}
				?>
			</div>
		</div>
	</div>
</div>