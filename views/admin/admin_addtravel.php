<div class="card p-4">
	<h4 class="text-center mt-3">Tambah Tour</h4>
	<form>
		<div class="form-group">
			<label>Nama Paket</label>
			<input type="text" name="namaPaket" class="form-control form-control-sm" placeholder="Masukkan Nama Paket">
		</div>
		<div class="form-group">
			<label>Deskripsi Paket</label>
			<input type="text" name="deskripsiPaket" class="form-control form-control-sm" placeholder="Masukkan Deskripsi Paket">
		</div>
		<div class="form-group">
			<label>Lokasi Jalan</label>
			<input type="text" name="lokasijalan" class="form-control form-control-sm" placeholder="Masukkan Lokasi">
		</div>
		<div class="form-group col-md-8">
			<div class="row">
			<div class="col-sm-4">
			<label for="inputProvinsi">Provinsi</label>
			<select name="provinsi" id="inputProvinsi" class="form-control form-control-sm">
				<option>Choose...</option>
			</select>
			</div>
			<div class="col-sm-4">
			<label for="inputKota">Kota</label>
			<select name="kotakab" id="inputKota" class="form-control form-control-sm">
				<option>Choose...</option>
			</select>
			</div>
			<div class="col-sm-4">
			<label for="inputDesa">Desa/Kelurahan</label>
			<select name="desa" id="inputDesa" class="form-control form-control-sm">
				<option>Choose...</option>
			</select>
			</div>
			</div>
		</div>
		<div class="form-group">
			<label>Harga Paket</label>
			<input type="number" name="hargaPaket" class="form-control form-control-sm" placeholder="Masukkan Harga">
		</div>
		<div class="form-group row">
			<div class="col-sm-10">
				<button type="submit" class="btn btn-primary">Tambah Tour</button>
			</div>
		</div>
	</form>
</div>