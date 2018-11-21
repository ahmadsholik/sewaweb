<?php $this->load->view('header'); ?>
<style media="screen">
div textarea {
  border: none;
  border: 1px solid #e6e6e6;
  margin-top: 20px;
  width: 50%;
  padding: 15px;
  font-weight: 100;
  font-family: sans-serif;
  color: #747779;
  resize: none;
  height: 200px;
  outline: none;
}
</style>
<div class="w3layouts-inner-banner">
            <a href="index.html" id="logo"><h1>JEJE SEWA . COM</h1></a>
        </div>
        <!-- //inner banner -->

                     <div class="but_list">
                        <ol class="breadcrumb">
                          <li><a href="#">Home</a></li>
                          <li><a href="#">Login</a></li>
                          <li class="active">Pendaftaran Agen</li>
                        </ol>
                      </div>
</div>
<div class="agileits contact">
      <div class="w3-agileits-contact-section" id="contact-section">
          
          <div class="wthree-contact-section-grids">
            <div class="container">
              <h3>Daftarkan Usaha Anda Sekarang</h3>
      <p>Selamat datang, silahkan melakukan pendaftaran.<p>
      <?php echo $this->session->flashdata('msg');?>
              <div class="col-md-8 w3ls-contact-section-left-grid">
                <form data-parsley-validate action="<?php echo base_url('daftaragen/simpan')?>" method="post">
                  <input type="text" class="text" name="nama_agen" placeholder="Nama Agen" required />
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
                  <textarea type="text" name="keterangan" placeholder="Deskripsi Usaha Anda" ></textarea>
                  <input type="text" class="text" name="no_hp" placeholder="Nomer Telpon" required />
                  <textarea type="text" name="alamat" placeholder="Alamat Anda" ></textarea>
                  <input type="text" class="text" name="kota" placeholder="kota" required />
                  <input type="text" class="text" name="provinsi" placeholder="Provinsi" required />
                  <input type="text" class="text" name="latitude" placeholder="latitude" required />
                  <input type="text" class="text" name="longitude" placeholder="longitude" required />
                  <input type="submit" value="Submit">
                </form>
              </div>
              <div class="col-md-4 w3ls-contact-section-right-grid">
                <h4>Contact Details</h4>
                <p>Mauris interdum tortor et eleifend adipiscing. Nullam congue sodales fermentum. Nullam pulvinar gravida aliquam. Quisque nec lorem nec lacus semper cursus. Suspendisse potenti. Mauris nec vehicula nibh.</p>
                <ul class="w3l-contact-section-list">
                  <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i></li>
                  <li>18A, Polo Street (Yellow Door)</li>
                </ul>
                <ul class="w3l-contact-section-list">
                  <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i></li>
                  <li>1234567890</li>
                </ul>
                <ul class="w3l-contact-section-list">
                  <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></li>
                  <li><a href="mailto:info@gmail.com">info@example.com</a></li>
                </ul>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
    </div>
<?php $this->load->view('footer'); ?>
