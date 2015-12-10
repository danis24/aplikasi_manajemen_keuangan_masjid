<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Detail Petugas</h3>
			</div>
		<div class="module-body">
			<div class="module">
            	<div class="module-body">
                	<div class="profile-head media">
                    	<a href="#" class="media-avatar pull-left">
                         	<img src="assets/images/foto/<?php echo $row['foto']?>">
                        </a>
                    	<div class="media-body">
                      		<h4>
                       		<?php echo $row['nm_petugas'];?>
                       		</h4>
                        		<p class="profile-brief">
	                         		<div class="control-group">
										<label class="control-label" for="basicinput"><strong>Kode Petugas</strong></label>
										<div class="controls">
											<input data-title="A tooltip for the input" type="text" Value="<?php echo $row['kd_petugas'];?>" readonly="readonly" data-original-title="" class="span6 tip">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="basicinput"><strong>No KTP</strong></label>
										<div class="controls">
											<input data-title="A tooltip for the input" type="text" Value="<?php echo $row['no_ktp'];?>" readonly="readonly" data-original-title="" class="span6 tip">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="basicinput"><strong>Jenis Kelamin</strong></label>
										<div class="controls">
											<input data-title="A tooltip for the input" type="text" Value="<?php echo $row['jk'];?>" readonly="readonly" data-original-title="" class="span6 tip">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="basicinput"><strong>Tempat Lahir</strong></label>
										<div class="controls">
											<input data-title="A tooltip for the input" type="text" Value="<?php echo $row['tmpt_lahir'];?>" readonly="readonly" data-original-title="" class="span6 tip">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="basicinput"><strong>Tanggal Lahir</strong></label>
										<div class="controls">
											<input data-title="A tooltip for the input" type="text" Value="<?php echo $row['tgl_lahir'];?>" readonly="readonly" data-original-title="" class="span6 tip">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="basicinput"><strong>Alamat</strong></label>
										<div class="controls">
											<input data-title="A tooltip for the input" type="text" Value="<?php echo $row['alamat'];?>" readonly="readonly" data-original-title="" class="span6 tip">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="basicinput"><strong>Jabatan</strong></label>
										<div class="controls">
											<input data-title="A tooltip for the input" type="text" Value="<?php echo $row['jabatan'];?>" readonly="readonly" data-original-title="" class="span6 tip">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="basicinput"><strong>No Telpon</strong></label>
										<div class="controls">
											<input data-title="A tooltip for the input" type="text" Value="<?php echo $row['no_telpon'];?>" readonly="readonly" data-original-title="" class="span6 tip">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="basicinput"><strong>Status</strong></label>
										<div class="controls">
											<input data-title="A tooltip for the input" type="text" Value="<?php echo $row['status'];?>" readonly="readonly" data-original-title="" class="span6 tip">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="basicinput"><strong>Tahun Jabatan</strong></label>
										<div class="controls">
											<input data-title="A tooltip for the input" type="text" Value="<?php echo $row['thn_jabatan'];?>" readonly="readonly" data-original-title="" class="span6 tip">
										</div>
									</div>

									<div class="control-group">
										<div class="controls">
											<a href="?page=data_petugas&act=edit_petugas&id=<?php echo $row['kd_petugas'];?>"><button class="btn btn-primary">Update</button></a>
											<a href="?page=data_petugas"><button class="btn btn-danger">Kembali</button></a>
										</div>
									</div>
                                </p>
                        </div>
                    </div>
                </div>
           </div>
		</div>
		</div>		
	</div>
</div>