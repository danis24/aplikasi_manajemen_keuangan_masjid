<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Hitung Zakat Mal</h3>
			</div>
			<div class="module-body">
				<form method="POST" class="form-horizontal row-fluid" action="?page=hitung">
				<h2>Zakat Uang dan Surat Berharga Lainnya</h2>
				Untuk menghitung zakat harta yang telah tersimpan selama <strong>1 tahun hijriyah</strong>. Metode perhitungannya sama dengan zakat emas atau perak. Yaitu, dengan nisab senilai <strong>85 gram emas atau 595 gram perak</strong>. Sedangkan zakatnya adalah sebesar <strong>2,5%</strong>.
				<br /><br />
				<div class="module-head">
					<h3>NISAB</h3>
				</div>
				<div class="module-body">
					
					
					<div class="control-group">
						<label class="control-label" for="basicinput">Nisab yang di gunakan</label>
						<div class="controls">
							<select tabindex="1" class="span2" name="opsi_nisab" id="opsi_nisab" onchange="zc_mal_nisab(); zc_mal_hitung();">
								<option value="emas" selected="selected">Emas</option>
								<option value="perak">Perak</option>
							</select>	
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Harga 1 gram emas</label>
						<div class="controls">
							Rp <input type="text" id="harga_emas" name ="h_emas" class="input_angka" onkeyup="validasiAngka(this); zc_mal_nisab(); zc_mal_hitung();" onblur="validasi_numstring(this);" value="511000" />	
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Harga 1 gram perak</label>
						<div class="controls">
							Rp <input type="text" id="harga_perak" name="h_perak" class="input_angka" onkeyup="validasiAngka(this); zc_mal_nisab(); zc_mal_hitung();" onblur="validasi_numstring(this);" value="11000" disabled="disabled" />	
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Nisab</label>
						<div class="controls">
							Rp <input type="text" id="nisab" class="input_angka" disabled="disabled" value="43.435.000,00" /> <input type="hidden" id="nisab_float" value="43435000.00" />	
						</div>
					</div>
				
				</div>

				<div class="module-head">
					<h3>Harta</h3>
				</div>
				<div class="module-body">
					
					<div class="control-group">
						<label class="control-label" for="basicinput">Uang Tunai dan tabungan</label>
						<div class="controls">
							Rp <input type="text" id="uang_tabungan" name="uang" class="input_angka" onkeyup="validasiAngka(this); zc_mal_total_harta();" onblur="validasi_numstring(this);" value="0"/>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Sahan dan Surat berharga lainnya</label>
						<div class="controls">
							Rp <input type="text" id="saham" class="input_angka" name="saham" onkeyup="validasiAngka(this); zc_mal_total_harta();" onblur="validasi_numstring(this);" value="0"/>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Piutang</label>
						<div class="controls">
							Rp <input type="text" id="piutang" class="input_angka" name="piutang" onkeyup="validasiAngka(this); zc_mal_total_harta();" onblur="validasi_numstring(this);" value="0" />		
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Total Harta</label>
						<div class="controls">
							Rp <input type="text" id="total_harta" class="input_angka" disabled="disabled" /> <input type="hidden" id="total_harta_float" />	
						</div>
					</div>
					
				</div>

				<div class="module-head">
					<h3>Kewajiban</h3>
				</div>
				<div class="module-body">
					

					<div class="control-group">
						<label class="control-label" for="basicinput">Hutang</label>
						<div class="controls">
							Rp <input type="text" id="hutang" class="input_angka" name="hutang" onkeyup="validasiAngka(this); zc_mal_total_kewajiban();" onblur="validasi_numstring(this);" value="0" />	
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Total Kewajiban</label>
						<div class="controls">
							Rp <input type="text" id="total_kewajiban" class="input_angka" disabled="disabled" /> <input type="hidden" id="total_kewajiban_float" />
						</div>
					</div>

					<div class="control-group">
						<div class="controls">
							<input type="submit" name="hitung" class="btn btn-success" value="Hitung">
						</div>
					</div>
					
					</form>
				</div>
			</div>
		</div>		
	</div>
</div>