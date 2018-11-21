<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Jejesewa.com | Sewa Mudah dan murah</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta charset utf="8">
		<link href="<?php echo base_url('assets/css/font-awesome.css');?>" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome css -->     
<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
<!-- css for banner slider -->  
<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.maximage.css?v=1.2');?>" type="text/css" media="screen" />
<!-- //css for banner slider -->      
<!-- online-fonts-->
<link href="//fonts.googleapis.com/css?family=Lobster+Two:400,400i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Abel" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<!--//online-fonts-->   
</head>
<!-- //head -->
  <!-- body -->
  <body>
  <!-- top-strip -->
  <div class="w3layouts-top-strip">
    <div class="container-fluid">
      <div class="w3ls-subscribe">
        <a href="<?php echo base_url('daftaragen')?>">Jadi Partner Kami</a>
      </div>
      <div class="agileinfo-contact-info">
        <ul>
          <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Call : 082135251697</li>
          <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Mail : <a href="mailto:sulton85@yahoo.co.id">info@jejesewa.com</a></li>
        </ul>
      </div>
      <!-- Large modal -->      
            </div>
              </div>   
      
      <div class="clearfix"></div>
    </div>
  </div>  
  <!-- //top-strip -->
    
    <!-- navigation -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
          <li><a class="active" href="<?php echo base_url();?>">Home</a></li>
          <li><a href="<?php echo base_url('produk');?>">Sewa Produk</a></li>
          <li><a href="<?php echo base_url('jasa');?>">Paket Jasa</a></li>  
          <li><a href="<?php echo base_url('agen');?>">Cari Agen</a></li>
         
          <?php if (empty($this->session->userdata('is_login'))){ ?>
                      <li><a href="<?php echo base_url('daftar')?>" role="button">Daftar</a></li>
                      <li><a href="<?php echo base_url('login')?>" role="button">Masuk</a></li>
                    <?php }else{ ?>
                      <li class="dropdown"><a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo ucfirst($this->session->userdata('nama'));?><span class="caret"></span></a><ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url('akun')?>">Akunku</a></li>
                                                <li><a href="<?php echo base_url('sewa')?>">Cart Sewa</a></li>
                                                </ul></li>
                      <li><a href="<?php echo base_url('login/logout')?>" role="button">Logout</a></li>
                    <?php } ?>
          </ul>
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    <!-- //navigation -->
