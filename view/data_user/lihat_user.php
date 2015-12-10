<div class="module">
							<div class="module-head">
								<h3>Data User</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Kode</th>
											<th>Nama</th>
											<th>Level</th>
											<th>Opsi</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$no = 1;
											while($row = $this->model->fetch($data)){
										?>
										<tr class="odd gradeX">
											<td align="center"><?php echo $no++?></td>
											<td align="center"><?php echo $row['id_operator'];?></td>
											<td><?php echo $row['nama'];?></td>
											<td><?php echo $row['level'];?></td>
											<td align="center">
												<a href="?page=user&act=edit_user&id=<?php echo $row['id_operator'];?>"><i class="btn btn-success icon-edit"></i></a>
												<a onclick="return confirm('Yakin akan menghapus data ?');" href="?page=user&act=hapus_user&id=<?php echo $row['id_operator'];?>"><i class="btn btn-danger icon-trash"></i></a>
											</td>
										</tr>
										<?php
										}
										?>
									</tbody>
								</table>
							</div>
						</div>