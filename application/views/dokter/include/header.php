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

  <?php
    $pegawai = $this->session->userdata('pegawai');
  ?>


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
                  <li><a href="<?php echo base_url('dokter/Dashboard');?>">Beranda</a></li>
                  <!-- if not login -->
                  <?php if(!$this->session->userdata('pegawai')){?>
                    <li><a href="<?php echo base_url('sikana/tutorial')?>">Tutorial</a></li>
                    <li><a href="<?php echo base_url('login')?>">Masuk</a></li>
                  <?php } else {?>

                    <!-- if login -->
                    <!-- <li><a href="<?php echo base_url('#')?>">Daftar</a></li> -->
                    <!-- <li><a href="<?php echo base_url('pegawai/Daftar')?>">Daftar</a></li> -->
                    <li><a href="<?php echo base_url('dokter/Cari')?>">Cari</a></li>

                    <li>
                    <a  href="#" role="text" id="dropdownMenuLink" data-toggle="dropdown">
                      <?php echo $pegawai['Nama'];?>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo site_url('pegawai/Change_Password')?>">Ganti kata sandi</a>
                        <a class="dropdown-item" href="<?php echo site_url('Logout')?>">Keluar</a>
                    </a>
                    </li>
                  <?php }?>


                    </div>
                  </li>
              </div>
              <!-- Nav End -->
            </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
