<div class="row">
  <div class="col-sm-6 text-white">
    <a href="?travel=tambahTravel" class="btn btn-primary">Add</a>
    <a class="btn btn-primary">Edit</a>
    <a class="btn btn-primary">Hapus</a>
  </div>
</div>
<table class="table table-bordered" id="table_id">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama Wisata</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Jogja</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Bali</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Malang</td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
<script>
  $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>