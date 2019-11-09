<?php 
@require_once './model/function.php';
if(isset($_POST['edit'])){
}
$id=$_GET['id'];
$data=querydata('provinsi','id',$id);
 ?>
 <?php $n=1; foreach ($data as $val): ?>
<div class="card p-4">
	<h4 class="text-center mt-3">Edit Provinsi</h4>
	<form action="?travel=prosesedtprov" method="POST">
		<div class="form-group">
			<label>ID Provinsi</label>
			<input type="text" name="id" maxlength="3" class="form-control form-control-sm" placeholder="Masukkan ID Provinsi" value="<?=$val->id?>">
		</div>
		<div class="form-group">
			<label>Nam Provinsi</label>
			<input type="text" name="nama" maxlength="100" class="form-control form-control-sm" placeholder="Masukkan Nama Provinsi" value="<?=$val->nama?>">
		</div>
		<div class="form-group row">
			<div class="col-sm-10">
				<button type="submit" class="btn btn-primary" name="edit">Tambah Provinsi</button>
			</div>
		</div>
	</form>
</div>
<?php endforeach;?>