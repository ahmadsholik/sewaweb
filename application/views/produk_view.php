<?php $this->load->view('header') ?>
 <div class="w3layouts-inner-banner">
            <a href="index.html" id="logo"><h1>JEJE SEWA . COM</h1></a>
        </div>
        <!-- //inner banner -->

                     <div class="but_list">
                        <ol class="breadcrumb">
                          <li><a href="#">Home</a></li>
                          <li class="active">Produk</li>
                        </ol>
                      </div>

<div class="agileits gallery">
        <div class="container">
          <h2 class="agile-inner-title">Produk Sewa</h2>
          <?php if(!empty($produk)){
         foreach ($produk as $key => $p) {
           echo '
          <div class="gallery"> 
            <a href="'.base_url('produk/detail/'.$p->produk_id).'"><img src="'.base_url('upload/'.$p->gambar).'" alt="/" title="'.$p->nama_produk.'"/></a>
            <!-- while using big image css <div class="clearfix"></div> -->       
          </div>';
          }
       } ?>  
        </div>      
      </div>
</div>

<?php $this->load->view('footer') ?>
