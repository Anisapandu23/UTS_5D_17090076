    <div class="col-md-4 mx-auto" style="margin-top: 100px;">
        <div class="main-card card">
            <div class="card-body"><h5 class="card-title py-4 text-center">Registrasi</h5>
                <form class="" action="?travel=prosesregist" method="POST">
                    <div class="form-group">
                        <label for="exampleEmail" class="">Nama Lengkap</label>
                        <input name="nama" id="exampleEmail" placeholder="Nama Lengkap" type="text" class="form-control" value="<?=$namaErr?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleEmail" class="">Email</label>
                        <input name="email" id="exampleEmail" placeholder="E-mail" type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="notelp" class="">No.Telp</label>
                        <input name="no_telp" id="notelp" placeholder="No.Telp" autocomplete  type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jalan" class="">Jalan</label>
                        <input name="jalan" id="jalan" placeholder="Jalan" type="text" class="form-control">
                        <div class="row">
                            <div class="col-6">
                                <label for="rt" class="mt-3">RT</label>
                                <input name="rt" id="rt" placeholder="No.RT" type="number" autocomplete class="form-control">
                            </div>      
                            <div class="col-6">
                                <label for="rw" class="mt-3">RW</label>
                                <input name="rw" id="rw" placeholder="No.RW" type="text" autocomplete  class="form-control">
                            </div>  <div class="col-6">
                                <label for="no_rumah" class="mt-3">No.Rumah</label>
                                <input name="no_rumah" id="no_rumah" placeholder="No.Rumah" autocomplete  type="number" class="form-control">
                            </div>      
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="provinsi" class="">Provinsi</label>
                        <select name="provinsi" id="provinsi" class="form-control" single>
                            <option value="1">Nama Provinsi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kotakab" class="">Kota/Kabupaten</label>
                        <select name="kotakab" id="kotakab" class="form-control" single>
                            <option value="1">Nama Kota</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kecamatan" class="">Kecamatan</label>
                        <select name="kecamatan" id="kecamatan" class="form-control" single>
                            <option value="1">Nama kec</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="desa" class="">Desa/Kelurahan</label>
                        <select name="desa" id="desa" class="form-control" single>
                            <option value="1">Nama Desa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password" class="">Password</label>
                        <input name="password" id="password" placeholder="Password" type="password" class="form-control">
                    </div>
                <button class="mt-1 btn btn-primary" type="submit" name="regist">Login</button>
            </form>
        </div>
    </div>
</div>