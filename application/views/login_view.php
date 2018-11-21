<?php $this->load->view('header') ?>
<!-- inner banner -->
        <div class="w3layouts-inner-banner">
            <a href="index.html" id="logo"><h1>JEJE SEWA . COM</h1></a>
        </div>
        <!-- //inner banner -->

                     <div class="but_list">
                        <ol class="breadcrumb">
                          <li><a href="#">Home</a></li>
                          <li class="active">Login</li>
                        </ol>
                      </div>
                     <div class="agileits contact">
                        <div class="w3-agileits-contact-section" id="contact-section">
          
                       <div class="wthree-contact-section-grids">
                        <div class="container">
                            <h3>Silahkan <span>Login Dulu</span></h3>
                            <p>Jika belum punya akun, silahkan <a href="<?php echo base_url('daftar')?>">klik disini</a></p>
                        </div>
                       <div class="container">
                            <div class="col-md-8 w3ls-contact-section-left-grid">
                                <form data-parsley-validate action="<?php echo base_url('login/aksi_login')?>" method="post">   
                                    <input type="text" data-parsley-type="email" class="text" name="email" placeholder="e-mail" required />
                                    <input type="password" class="text" name="password" placeholder="password" required />
                                    <input type="submit" value="Login">
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

</div>
</div>
                        </div>
</div>
                   </div>

<?php $this->load->view('footer') ?>
