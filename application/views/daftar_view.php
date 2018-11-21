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
                          <li class="active">Pendaftaran</li>
                        </ol>
                      </div>
</div>
<div class="agileits contact">
      <div class="w3-agileits-contact-section" id="contact-section">
          
          <div class="wthree-contact-section-grids">
            <div class="container">
              <h3>Daftar Sekarang</h3>
      <p>Selamat datang, silahkan melakukan pendaftaran.<p>
      <p>Jika anda sudah punya akun, selahkan <a href="<?php echo base_url('login')?>">Klik Disini</a></p>
      <?php echo $this->session->flashdata('msg');?>
              <div class="col-md-8 w3ls-contact-section-left-grid">
                <form data-parsley-validate action="<?php echo base_url('daftar/simpan')?>" method="post">
                  <input type="text" class="text" name="nama" placeholder="your name" required />
                  <input type="email" class="text" name="email" placeholder="e-mail" required />
                  <input type="password" class="text" name="password" placeholder="password" required />
                  <input type="text" class="text" name="notelp" placeholder="Telp Number" required />
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
