<?php $this->load->view('header'); ?>
<?php $this->load->view('slider'); ?>

<!--about-->
  <div id="about" class="about">
    <div class="container">
      <div class="title">
        <h3>Bagaimana Cara Kerjanya </h3>
        <p>JeJeSewa.com mempermudah semua acara terlaksana dengan mudah </p>
      </div>
      <div class="about-row">
        <div class="col-md-4 about-grids">
          <span class="glyphicon glyphicon-indent-right effect-1" aria-hidden="true"></span>
          <h4>Pilih Barang / Jasa</h4>
          <p>Pilih peralatan pesta yang anda butuhkan</p>
          
        </div>
        <div class="col-md-4 about-grids">
          <span class="glyphicon glyphicon-list-alt effect-1" aria-hidden="true"></span>
          <h4>Input Form Sewa</h4>
          <p>Beritahu Kami DetailKebutuhan Sewa Anda</p>
          
        </div>
        <div class="col-md-4 about-grids">
          <span class="glyphicon glyphicon-tent effect-1" aria-hidden="true"></span>
          <h4>Pasang dilokasi</h4>
          <p>Perlengkapan yang anda sewa kami pasang</p>
          
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <!--//about-->
  
  <!-- info section -->
  <div class="where">
    <div class="container">
      <div class="col-md-4 where-left"></div>
      <div class="col-md-8 where-right">
        <div class="wel-left">
          <div class="welcome-info wel-grid">
            <figure class="icon">
              <span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span>
            </figure>
            <ul>
              <li><a href="#"><span class="glyphicon glyphicon-globe"></span>Paket Pesta</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-map-marker"></span>Perlengkapan Pesta</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-move"></span>Event Tools</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-glass"></span>Konsultasi Acara</a></li>
            </ul>
          </div>
        </div>
        <div class="wel-right">
          <div class="content-item">
            <div class="overlay"></div>
              <div class="corner-overlay-content">Info</div>
              <div class="overlay-content">
              <h4>Riding</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been it to make a type specimen book. It has survived not only five centuries.</p>
              </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
  <!-- //info section --> 
  
  <!--featured tours-->
  <div id="features" class="features">
    <div class="container">
      <div class="title">
        <h3>Produk Populer Kami</h3>
        <p>Silahkan memilih produk yang kami sewakan yang kami miliki terpopuler saat ini </p>
      </div>
      <?php ;if (!empty($produk)) {
          foreach ($produk as $key => $p) {
            echo '
      <div class="features-row">
        <div class="col-md-4"><a href="'.base_url('produk/detail/'.$p->produk_id).'"><img src="'.base_url('upload/'.$p->gambar).'" alt="/" title="'.$p->deskripsi.'" class="img-responsive gri-wid"></a>
          <div class="features-left">
            <h4><a href="'.base_url('produk/detail/'.$p->produk_id).'">'.$p->nama_produk.'</h4>
            <h5>'.$this->all_model->format_harga($p->harga).'</a></h5>
            <p></p>
          </div>
           </div>';
           }
        } ?>
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>
  </div>
  <!--//featured tours-->

<?php $this->load->view('footer'); ?>
