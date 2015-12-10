<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Edit Data Petugas</h3>
			</div>
		<div class="module-body">
			<form class="form-horizontal row-fluid" method="POST">							
				<div class="control-group">
					<label class="control-label" for="basicinput">Kode Petugas</label>
					<div class="controls">
						<input type="text" id="basicinput"  name="kd_petugas" value="<?=$row['kd_petugas']?>" class="span3" readonly="readonly">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="basicinput">Nomor KTP *</label>
					<div class="controls">
						<input data-title="A tooltip for the input" name="no_ktp" type="text" value="<?=$row['no_ktp']?>" data-original-title="" class="span8 tip" onkeyup="validasiAngka(this);" onblur="validasi_numstring(this);">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="basicinput">Nama *</label>
					<div class="controls">
						<input data-title="A tooltip for the input" name="nm_petugas" type="text" value="<?=$row['nm_petugas']?>" data-original-title="" class="span6 tip">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="basicinput">Tempat Lahir</label>
					<div class="controls">
						<input data-title="A tooltip for the input" name="tmpt_lahir" type="text" value="<?=$row['tmpt_lahir']?>" data-original-title="" class="span4 tip">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="basicinput">Tanggal Lahir</label>
					<div class="controls">
						<select name="tgl" class="span2">
					   	<?php $this->selectTanggal();?>
					   	</select> /
					   	<select name="bln" class="span3">
					   	<?php $this->selectBulan();?>
					   	</select> /
					   	<select name="thn" class="span3">
					   	<?php $this->selectTahun();?>
					   	</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="basicinput">Alamat</label>
					<div class="controls">
						<input class="span8" type="text" value="<?=$row['alamat']?>" name="alamat">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="basicinput">Jenis Kelamin</label>
					<div class="controls">
						<select tabindex="1" data-placeholder="-- Pilih --" class="span2" name="jk">
							<option value="Laki - Laki">Laki - Laki</option>
							<option value="Perempuan" <?php if($row['jk'] == 'Perempuan'){echo "selected";}?>>Perempuan</option>
						</select>
						</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="basicinput">Jabatan</label>
					<div class="controls">
							<select tabindex="1" class="span4" name="jabatan">
								<?php while($row2 = $this->model->fetch($jab)){
								?>
									<option value="<?php echo $row2['kd_jab'];?>"><?php echo $row2['nm_jab'];?></option>
								<?php }?>
							</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="basicinput">Nomor Telpon</label>
					<div class="controls">
						<input name="no_telpon" type="text" value="<?=$row['no_telpon']?>" class="span6 tip">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="basicinput">Status</label>
					<div class="controls">
						<select tabindex="1" class="span2" name="status">
							<option value="Aktif">Aktif</option>
							<option value="Tidak Aktif">Tidak Aktif</option>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="basicinput">Tahun Jabatan</label>
					<div class="controls">
						<select tabindex="1" class="span3" name="thn_jabatan">
							<?php for($i=date('Y');$i>=date('Y')-32;$i-=1){
								echo "<option value='$i'> $i </option>";
								}
							?>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="basicinput">Foto</label>
					<div class="controls">
						<input data-title="A tooltip for the input" name="foto" type="file" data-original-title="" class="span6 tip">
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
						<input type="submit" name="tambah" class="btn btn-success" value="Update">
							<a href="?page=data_petugas" class="btn btn-warning">Kembali</a>
					</div>
				</div>
				</form>
			</div>
		</div>		
	</div>
</div>
<?php
	if(@$_POST['tambah']){
		$main = new petugasController();
		$main->update();
	}
?>