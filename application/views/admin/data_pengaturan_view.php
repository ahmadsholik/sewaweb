<?php $this->load->view('admin/header') ?>
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Pengaturan Sistem</h3>
      </div>
      <div class="box-body">
        <form  action="<?php echo base_url('pengaturan/simpan')?>" method="post" enctype="multipart/form-data">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Nama Sistem</label>
              <input class="form-control" type="hidden" name="pengaturan_id" value="<?php echo (!empty($pengaturan[0]->pengaturan_id)) ? $pengaturan[0]->pengaturan_id : ''?>" >
              <input class="form-control" type="text" name="judul" value="<?php echo (!empty($pengaturan[0]->judul)) ? $pengaturan[0]->judul : ''?>" required>
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
             <textarea class="form-control" type="text" name="isi" required><?php echo (!empty($pengaturan[0]->isi)) ? $pengaturan[0]->isi : ''?></textarea>
            </div>
            <div class="form-group">
              <label>Title Web Sistem</label>
              <input class="form-control" type="text" name="header_text"  value="<?php echo (!empty($pengaturan[0]->header_text)) ? $pengaturan[0]->header_text : ''?>" required>
            </div>
            <div class="form-group">
              <label></label>
              <button class="btn btn-info" type="submit">Simpan</button>
              <a class="btn btn-default" href="<?php echo base_url('pengaturan')?>">Kembali</a>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>Gambar</label>
              <input type="file" name="gambar" accept="image/*" ><br>
              <?php if (!empty($pengaturan[0]->gambar)): ?>
                <img src="<?php echo base_url('upload/'.$pengaturan[0]->gambar);?>" width="100" alt="">
              <?php endif; ?>
            </div>
          </div>


        </form>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('admin/footer') ?>