<?php @include_once('./model/dataprovinsi.php');?>
<h4 class="text-center">Provinsi</h4>
<div class="row p-3">
  <div class="col-sm-6 text-white">
    <a href="?travel=tambahProvinsi" class="btn btn-primary">Add</a>
  </div>
</div>
<table class="table table-bordered" id="table_id" class="display">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Provinsi</th>
                <th>Provinsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php $n=1; foreach ($data as $val): ?>
            <tr>
                <th><?=$n;?></th>
                <th><?=$val->id;?></th>
                <th><?=$val->nama;?></th>
                <th>
                  <a href="?travel=editprov&id=<?=$val->id;?>" class="btn btn-primary">Edit</a>
                  <a href="?travel=hapusprov&idhapus=<?=$val->id;?>" class="btn btn-danger">Hapus</a>
                </th>
            </tr>
          <?php $n++; endforeach; ?>
        </tbody>
</table>

<script>
    $(document).ready(function() {
    $('#table_id').DataTable({
      "pageLength": 15
    });
} );
</script>