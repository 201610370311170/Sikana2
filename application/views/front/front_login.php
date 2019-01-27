<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="SIKANA &amp;">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>SIKANA &amp; Sistem Informasi Ibu dan Anak</title>

  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url('assets/img/core-img/ibudananak.png')?>">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="<?php echo base_url('assets/style2.css')?>">


</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="preload-content">
      <div id="dento-load"></div>
    </div>
  </div>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <!-- Top Content -->
          <div class="col-6 col-md-9 col-lg-8">
            <div class="top-header-content">
              <a href="maps.html" data-toggle="tooltip" data-placement="bottom" title="Jl. Tugu No.1, Kiduldalem, Klojen, Kota Malang, Jawa Timur 65119"><i class="fa fa-map-marker"></i> <span>Kota Malang </span></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="info.sikana@gmail.com"><i class="fa fa-envelope"></i> <span>Email</span></a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Top Header End -->

    <!-- Main Header Start -->
    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Classy Menu -->
          <nav class="classy-navbar justify-content-between" id="dentoNav">

            <!-- Logo -->
            <a class="nav-brand" href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/img/core-img/logoo.jpg')?>" alt=""></a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>

              <!-- Nav Start -->
              <div class="classynav">
                <ul id="nav">
                  <li><a href="<?php echo base_url();?>">Beranda</a></li>
                  <li><a href="<?php echo base_url('sikana/tutorial')?>">Tutorial</a></li>
                  <li><a href="<?php echo base_url('sikana/login')?>">Login</a></li>
              </div>
              <!-- Nav End -->
            </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- content -->
  <section class="content" style="padding-bottom:100px;">
    <h3 style="text-align:center; font-family: arial; margin-top:px;"> LOGIN SEBAGAI : </h3>
    <div class="row" style="margin-left:320px;margin-top:160px;">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Admin</h5>
            <p class="card-text">Login sebagai Administrator </p>
            <a href="<?php echo base_url('admin')?>" class="btn btn-outline-primary">Masuk</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Dokter / Bidan</h5>
            <p class="card-text">Login sebagai Petugas</p>
            <a href="<?php echo base_url('pegawai')?>" class="btn btn-outline-primary">Login</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ***** Footer Area Start ***** -->
  <footer class="footer-area bg-img bg-gradient-overlay" style="background-image: url(assets/img/bg-img/homeeee.jpg);">
    <!-- Copywrite Area -->


          <div class="copywrite-content">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
            </p>
          </div>


  </footer>
  <!-- ***** Footer Area End ***** -->

  <!-- ******* All JS ******* -->
  <!-- jQuery js -->
  <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
  <!-- Popper js -->
  <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
  <!-- Bootstrap js -->
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <!-- All js -->
  <script src="<?php echo base_url('assets/js/dento.bundle.js')?>"></script>
  <!-- Active js -->
  <script src="<?php echo base_url('assets/js/default-assets/active.js')?>"></script>

</body>

</html>
