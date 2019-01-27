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

  <!-- autocomplete -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/autocomplete.css')?>">


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
                  <li><a href="<?php echo base_url('pegawai/dashboard');?>">Beranda</a></li>
                  <li><a href="<?php echo base_url('pegawai/periksa')?>">Periksa</a></li>
                  <li><a href="<?php echo base_url('pegawai/#')?>">Tutorial</a></li>
                  <li>
                    <a  href="#" role="text" id="dropdownMenuLink" data-toggle="dropdown">
                      <?php echo $pegawai['Nama'];?>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo site_url('pegawai/login/logout')?>">Logout</a>
                    </a>


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

  <!-- content -->
  <section class="content">

    <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/homeee.jpg);">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <h2 class="title">Data Pasien</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="breadcumb--con">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="masuk.html"><i class="fa fa-home"></i> Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Periksa</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- card info -->
    <div class="main" id="main">
    <div class="box" id="box">
      <div class="box-body" style="margin-top:50px; margin-left: 200px; background-color:#f0f0f5; padding: 50px; width: 40%;border-radius: 10px;">
          <h3 style="margin-bottom:50px; align:center">
            <i class="fa fa-user"></i> &nbsp <span >Data Pasien</span>
          </h3>

            <?php

            //Age
            $today       = new DateTime();
            $birthdate   = new DateTime($data_ibu[0]['Tgl_lahir']);
            $interval    = $today->diff($birthdate);
            $Umur = $interval->format('%y Tahun');

            // Date
            $date = $data_ibu[0]['Tgl_lahir'];
            $newDate = date("d-m-Y", strtotime($date));


            ?>


            <div>
              <p>
                <span style="margin-right: 100px;">Nama </span>
                <span style="margin-right: 50px;">: </span>
                <?php echo $data_ibu[0]['Nama'];?>
              </p>
              <p>
                <span style="margin-right: 117px;">NIK </span>
                <span style="margin-right: 50px;">: </span>
                <?php echo $data_ibu[0]['NIK'];?>
              </p>
              <p>
                <span style="margin-right: 46px;">Tanggal Lahir </span>
                <span style="margin-right: 50px;">: </span>
                <?php echo $newDate;?>
              </p>
              <p>
                <span style="margin-right: 101px;">Umur </span>
                <span style="margin-right: 50px;">: </span>
                <?php echo $Umur;?>
              </p>
              <p>
                <span style="margin-right: 92px;">Alamat </span>
                <span style="margin-right: 50px;">: </span>
                <?php echo $data_ibu[0]['Alamat'];?>
              </p>
              <p>
                <span style="margin-right: 36px;">No.Handphone </span>
                <span style="margin-right: 50px;">: </span>
                <?php echo $data_ibu[0]['Nomor_Telefon'];?>
              </p>
              <p>
                <span style="margin-right: 25px;">Dokter Damping </span>
                <span style="margin-right: 50px;">: </span>
                <?php echo $data_ibu[0]['Dokter_damping'];?>
              </p>
              <br><br>
            </div>
      </div>
    </div>
  </div>


    <!-- tabel -->
    <div class="clearfix visible-sm-block"></div>

    <section class="dentist-area section-padding-100-0">
      <div class="container">
        <div class="row">
          <!-- Section Heading -->
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>Riwayat Pemeriksaan Pasien</h2>
              <div class="line"></div>
            </div>
          </div>
        </div>

  <!-- ***** Dento Pricing Table Area Start ***** -->
    <section class="dento-pricing-table-area mt-50 section-padding-0-100">
      <div style="height: 250px;" class="container">
        <div class="row">
          <div class="col-12">
            <div class="dento-price-table table-responsive">
              <table class="table table-borderless mb-0">
                <thead>
                  <tr>
                    <th scope="col">Tanggal Periksa</th>
                    <th scope="col">Keluhan Sekarang</th>
                    <th scope="col">Tekanan Darah</th>
                    <th scope="col">Berat Badan</th>
                    <th scope="col">Umur Kehamilan</th>
                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($riwayat as $riwayat): {
                    // Date
                    $date = $riwayat['Tanggal_periksa'];
                    $newDate = date("d-m-Y", strtotime($date));
                  }
                  ?>
                  <tr>
                    <th><?php echo $newDate;?></th>
                    <td> </td>
                    <td><?php echo $riwayat['Tekanan_darah'];?></td>
                    <td><?php echo $riwayat['Berat_badan']." Kg";?></td>
                    <td><?php echo $riwayat['Umur_kehamilan']." Minggu";?></td>
                  </tr>
                </tbody>
              <?php endforeach;?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Dento Pricing Table Area End ***** -->
          </div>
        </div>
      </div>
    </section>


    <!-- ****** About Us Area Start ******* -->

    <section class="dento-about-us-area mt-50 mb-100">

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
