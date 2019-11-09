<div class="card p-4">
	<h4 class="text-center mt-3">Tambah Provinsi</h4>
	<?php 
                if(isset($_SESSION['tambah_success'])){
                    echo '<div class=`alert alert-success`>'.$_SESSION['regist_success'].'</div>';
                    unset($_SESSION['regist_success']);
                }
     ?>
	<form action="?travel=prosesprov" method="POST">
		<div class="form-group">
			<label>ID Provinsi</label>
			<input type="text" name="id" maxlength="3" class="form-control form-control-sm" placeholder="Masukkan ID Provinsi">
		</div>
		<div class="form-group">
			<label>Nam Provinsi</label>
			<input type="text" name="nama" maxlength="100" class="form-control form-control-sm" placeholder="Masukkan Nama Provinsi">
		</div>
		<div class="form-group row">
			<div class="col-sm-10">
				<button type="submit" class="btn btn-primary" name="tambah">Tambah Provinsi</button>
			</div>
		</div>
	</form>
</div>