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
            <a class="nav-brand" href="masuk.html"><img src="<?php echo base_url('assets/img/core-img/logoo.jpg')?>" alt=""></a>

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
  <section class="content">

    <section class="welcome-area">
      <!-- Welcome Slides -->
      <div class="welcome-slides owl-carousel">
        <!-- Single Welcome Slide -->
        <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax" style="background-image: url(assets/img/bg-img/homeee.jpg);">
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12">
                <!-- Welcome Text -->
                <div class="row h-100 align-items-center">
                <div style="margin-left: 335px;" class="welcome-btn-group">
                  <h2 style="color: white; text-align: center; height: 90px">MASUK</h2>
                  <a href="loginadmin.html" class="btn dento-btn mx-2" data-animation="fadeInDown" data-delay="500ms">Login Sebagai Admin</a>
                 <a href="loginpetugas.html" class="btn dento-btn mx-2" data-animation="fadeInDown" data-delay="500ms">Login Sebagai Petugas</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>

  </section>


  <!-- ***** Footer Area Start ***** -->
  <footer class="footer-area bg-img bg-gradient-overlay" style="background-image: url(assets/img/bg-img/homeeee.jpg);">
    <!-- Copywrite Area -->
    <div class="container">
        <div class="col-12">
          <div class="copywrite-content">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
          </div>
        </div>
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
