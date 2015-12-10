<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Input Data Jabatan</h3>
			</div>
			<div class="module-body">
				<form class="form-horizontal row-fluid" method="POST">	
					<div class="control-group">
						<label class="control-label" for="basicinput">Kode User</label>
						<div class="controls">
							<input type="text" id="basicinput"  name="id_operator" value="<?php echo $row['id_operator']?>" class="span3" readonly="readonly">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Nama</label>
						<div class="controls">
							<select name="nama">
								<option value="">--Pilih--</option>
								<?php
								while($row = $this->model->fetch($data2)){
								?>
								<option value="<?php echo $row['nm_petugas']?>"><?php echo $row['nm_petugas']?></option>
								<?php
								}
								?>
							</select>	
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Username</label>
						<div class="controls">
							<input name="username" type="text" value="<?php echo $row['username']?>" class="span4 tip">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Password</label>
						<div class="controls">
							<input data-title="A tooltip for the input" name="password1" type="password" placeholder="Password .." data-original-title="" class="span5 tip">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Ulangi Password</label>
						<div class="controls">
							<input data-title="A tooltip for the input" name="password2" type="password" placeholder="Ulangi Password .." data-original-title="" class="span5 tip">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Level</label>
						<div class="controls">
							<select name="level">
								<option value="admin">Admin</option>
								<option value="operator" <?php if($row['level'] == 'operator'){echo "selected";}?>>Operator</option>
							</select>
						</div>
					</div>

					<div class="control-group">
						<div class="controls">
							<input type="submit" name="tambah" class="btn btn-success" value="Tambah">
							<button type="reset" class="btn btn-danger">Reset</button>
							<a href="?page=user" class="btn btn-warning">Kembali</a>
						</div>
					</div>
				</form>
			</div>
		</div>		
	</div>
</div>
<?php
	if(@$_POST['tambah']){
		$main = new userController();
		$main->insert();
	}
?>