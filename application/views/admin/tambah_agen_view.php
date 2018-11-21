<?php $this->load->view('admin/header') ?>
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Tambah Agen</h3>
      </div>
      <div class="box-body">
        <form data-parsley-validate action="<?php echo base_url('data_agen/simpan')?>" method="post" enctype="multipart/form-data">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Nama Agen</label>
              <input class="form-control" type="text" name="nama_agen" value="<?php echo (!empty($agen[0]->nama_agen)) ? $agen[0]->nama_agen : ''?>" required>
            </div>
            <div class="form-group">
              <label>Kategori</label>
              <select class="form-control" name="kategori" required>
                <option value="" selected>Pilih Kategori</option>
                <?php foreach ($kategori as $key => $k):
                  $kid = (!empty($agen[0]->kategori)) ? $agen[0]->kategori : '';
                  if ($kid == $k->kategori_id) {
                    echo '<option value="'.$kid.'" selected>'.$k->nama_kategori.'</option>';
                  }else {
                    echo '<option value="'.$k->kategori_id.'">'.$k->nama_kategori.'</option>';
                  }
                 endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <textarea class="form-control" type="text" name="keterangan"  value="<?php echo (!empty($agen[0]->keterangan)) ? $agen[0]->keterangan : ''?>"></textarea>
            </div>
            <div class="form-group">
              <label>No. Telp</label>
              <input class="form-control" type="text" name="no_hp" data-parsley-type="number" value="<?php echo (!empty($agen[0]->no_hp)) ? $agen[0]->no_hp : ''?>" required>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" type="text" name="alamat"  value="<?php echo (!empty($agen[0]->alamat)) ? $agen[0]->alamat : ''?>"></textarea>
            </div>
            <div class="form-group">
              <label>Kota</label>
              <input class="form-control" type="text" name="kota"  value="<?php echo (!empty($agen[0]->kota)) ? $agen[0]->kota : ''?>" required>
            </div>
            <div class="form-group">
              <label>Provinsi</label>
              <input class="form-control" type="text" name="provinsi"  value="<?php echo (!empty($agen[0]->provinsi)) ? $agen[0]->provinsi : ''?>" required>
            </div>
            <div class="form-group">
              <label>Latitude</label>
              <input class="form-control" type="text" name="latitude" data-parsley-type="number" value="<?php echo (!empty($agen[0]->latitude)) ? $agen[0]->latitude : ''?>" required>
            </div>
            <div class="form-group">
              <label>Longitude</label>
              <input class="form-control" type="text" name="longitude" data-parsley-type="number" value="<?php echo (!empty($agen[0]->longitude)) ? $agen[0]->longitude : ''?>" required>
            </div>
            <div class="form-group">
              <label></label>
              <button class="btn btn-info" type="submit">Simpan</button>
              <a class="btn btn-default" href="<?php echo base_url('data_agen')?>">Kembali</a>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>Gambar</label>
              <input type="file" name="gambar" accept="image/*" required><br>
              <?php if (!empty($agen[0]->gambar)): ?>
                <img src="<?php echo base_url('upload/'.$agen[0]->gambar);?>" width="100" alt="">
              <?php endif; ?>
            </div>
          </div>


        </form>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('admin/footer') ?>
