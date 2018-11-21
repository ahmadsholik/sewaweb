<?php $this->load->view('header'); ?>
<style media="screen">
li.qty {
  width: 100%;
  float: left;
   margin: 0;
}
button.btn{
  width: 100%;
    background: #100b0b;
    color: #fff;
    font-family: 'Pathway Gothic One';
    font-size: 18px;
    border: none;
    border-radius: 0;
}
</style>
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
  <div class="w3layouts-inner-banner">
            <a href="index.html" id="logo"><h1>JEJE SEWA . COM</h1></a>
        </div>
        <!-- //inner banner -->

                     <div class="but_list">
                        <ol class="breadcrumb">
                          <li><a href="#">Home</a></li>
                          <li><a href="#">Produk</a></li>
                          <li class="active">Detail</li>
                        </ol>
                      </div>

  
      <div class="container">
          <div class="col-md-8 showcase">
              <div class="flexslider">
                    <ul class="slides">
                          <div class="thumb-image"> <img src="<?php echo base_url('upload/'.$detail[0]->gambar);?>" data-imagezoom="true" class="img-responsive"> </div>
                    </ul>
                  <div class="clearfix"></div>
              </div>
          </div>
          <div class="col-md-4 w3ls-contact-section-right-grid">
              <div class="showcase-rt-top">
                  <div class="pull-left shoe-name">
                      <h3><?php echo $detail[0]->nama_produk;?></h3>
                      <h4><?php echo $this->all_model->format_harga($detail[0]->harga);?> / hari</h4>
                  </div>
                  <div class="clearfix"></div>
              </div>
              <hr class="featurette-divider">
              <div class="shocase-rt-bot">
                  <form class="" action="<?php echo base_url('sewa/tambah_sewa')?>" method="post">
                    <div class="float-qty-chart">
                    <ul>
                       
                            <h4>Dari Tanggal</h4>
                            <input type="hidden" name="produk_id" value="<?php echo $detail[0]->produk_id;?>" required>
                            <input type="hidden" name="nama_produk" value="<?php echo $detail[0]->nama_produk;?>" required>
                            <input type="hidden" name="harga" value="<?php echo $detail[0]->harga;?>" required>
                            <input type="date" name="dari" class="form-control" required>
                      
                            <h4>Sampai Tanggal</h4>
                            <input type="date" name="sampai" class="form-control" required>
                      
                        
                            <h4>QTY</h4>
                            <select class="form-control qnty-chrt" name="qty" required>
                              <?php for ($i=1; $i <= $detail[0]->stok; $i++) {
                                echo '<option value="'.$i.'">'.$i.'</option>';
                              } ?>
                            </select>
                       
                    </ul>
                    <div class="clearfix"></div>
                    </div>
                    <ul>
                        
                            <button type="submit" role="button" class="btn" >Sewa</button>
                        
                    </ul>
                  </form>
              </div>
              <div class="showcase-last">
                  <h3>Detail</h3>
                  <ul>
                    <?php echo $detail[0]->deskripsi;?>
                  </ul>
              </div>
          </div>
  <div class="clearfix"></div>
      </div>
 
<?php $this->load->view('footer');?>
