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


      <!-- ***** Welcome Area Start ***** -->
      <section class="welcome-area">
        <!-- Welcome Slides -->
        <div class="welcome-slides owl-carousel">
          <!-- Single Welcome Slide -->
          <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax" style="background-image: url(assets/img/bg-img/homeee.jpg);">
            <div class="container h-100">
              <div class="row h-100 align-items-center">
                <div class="col-12">
                  <!-- Welcome Text -->
                  <div class="welcome-text text-left">
                    <h2 data-animation="fadeInUp" data-delay="100ms">SIKANA</h2>
                    <p data-animation="fadeInUp" data-delay="300ms">Sistem Informasi ibu dan anak untuk mempermudah pelayanan kesehatan. Hal ini dilatar belakangi karena masih menggunakan sistem manual seperti penggunaan kertas atau buku. Dalam SIKANA ini meminimalkan penggunaan kertas atau buku dan memudahkan pekerjaan menjadi efektif dan efisien.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </section>
      <!-- ***** Welcome Area End ***** -->

    <!-- ***** Dento Dentist Area Start ***** -->
    <section class="dentist-area section-padding-100-0">
      <div class="container">
        <div class="row">
          <!-- Section Heading -->
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>Jadwal Kegiatan Program Kesehatan Ibu dan Anak</h2>
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
                    <th scope="col">No</th>
                    <th scope="col">Kegiatan</th>
                    <th scope="col">Desa</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1.</th>
                    <td>Pelayanan ANC</td>
                    <td>Desa Sidodadi, Kecamatan Lawang</td>
                    <td>Senin, 27 Januari 2019</td>
                    <td>Bidan</td>
                  </tr>
                  <tr>
                    <th scope="row">2.</th>
                    <td>Kunjungan Nifas dan Kunjungan Neonatus</td>
                    <td>Desa Watugede, Kecamatan Singosari</td>
                    <td>Rabu, 6 Februari 2019</td>
                    <td>Bidan</td>
                  </tr>
                  <tr>
                    <th scope="row">3.</th>
                    <td>Pelayanan KB (Keluarga Berencana)</td>
                    <td>Desa Selorejo, Kecamatan Dau</td>
                    <td>Selasa, 19 Februari 2019</td>
                    <td>Bidan</td>
                  </tr>
                  <tr>
                    <th scope="row">4.</th>
                    <td>Pencatatan dan Pelaporan</td>
                    <td>Desa Landungsari, Kecamatan Dau</td>
                    <td>Kamis, 28 Februari 2019</td>
                    <td>Bidan</td>
                  </tr>
                </tbody>
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
    <!-- ***** Dento Dentist Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <section class="dento-blog-area section-padding-100-0 clearfix">
      <div class="container">
        <div class="row">
          <!-- Section Heading -->
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>Alur Kesehatan Ibu Hamil</h2>
              <div class="line"></div>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- Single Blog Item -->
          <div class="col-12 col-md-6 col-lg-4" >
            <div class="single-blog-item mb-100" style="height:500px;">
              <a href="./blog-details.html">
                <img style="margin-left: 110px; height:150px;width:150px;" src="<?php echo base_url('assets/img/bg-img/alurr(1).png')?>" alt="">
              </a>
              <!-- Blog Content -->
              <div class="blog-content">
                <a href="./blog-details.html" class="post-title">Pengukuran Tinggi Badan Cukup Satu Kali</a>
                <p>Segera ke dokter atau bidan jika terlambat datang bulan. Periksa kehamilan paling sedikit ...</p>

              </div>
            </div>
          </div>

          <!-- Single Blog Item -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="single-blog-item mb-100" style="height:500px;">
              <a href="./blog-details.html">
                <img style="margin-left: 90px; height:150px;" src="<?php echo base_url('assets/img/bg-img/alurr(2).png')?>" alt="">
              </a>
              <!-- Blog Content -->
              <div class="blog-content">
                <a href="./blog-details.html" class="post-title">Pengukuran Tekanan Darah (tensi)</a>
                <p>Tekanan darah normal 120/80mmHg. Bila tekanan darah ...</p>
                <div class="post-meta">

                </div>
              </div>
            </div>
          </div>

          <!-- Single Blog Item -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="single-blog-item mb-100" style="height:500px;">
              <a href="./blog-details.html">
                <img style="margin-left: 90px; height:150px;" src="<?php echo base_url('assets/img/bg-img/alurr(3).png')?>" alt="">
              </a>
              <!-- Blog Content -->
              <div class="blog-content">
                <a href="./blog-details.html" class="post-title">Pengukuran Lingkar Lengan Atas (LiLA)</a>
                <p>Bila < 23,5cm menunjukkan ibu hamil...</p>

              </div>
            </div>
          </div>
          <!-- Single Blog Item -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="single-blog-item mb-100" style="height:500px;">
              <a href="./blog-details.html">
                <img style="margin-left: 90px; height:150px;" src="<?php echo base_url('assets/img/bg-img/alurr(4).png')?>" alt="">
              </a>
              <!-- Blog Content -->
              <div class="blog-content">
                <a href="./blog-details.html" class="post-title">Pengukuran Tinggi Rahim</a>
                <p>Pengukuran tinggi rahim berguna untuk...</p>
              </div>
            </div>
          </div>
          <!-- Single Blog Item -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="single-blog-item mb-100" style="height:500px;">
              <a href="./blog-details.html">
                <img style="margin-left: 90px; height:150px;" src="<?php echo base_url('assets/img/bg-img/alurr(5).png')?>" alt="">
              </a>
              <!-- Blog Content -->
              <div class="blog-content">
                <a href="./blog-details.html" class="post-title">Penentuan Letak Janin(Presentasi Janin) dan Perhitungan Denyut Jantung Janin</a>
                <p>Apabila trimester III bagian bawah janin bukan kepala atau kepala belum masuk panggul...</p>
              </div>
            </div>
          </div>
          <!-- Single Blog Item -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="single-blog-item mb-100" style="height:500px;">
              <a href="./blog-details.html">
                <img style="margin-left: 90px; height:150px;" src="<?php echo base_url('assets/img/bg-img/alurr(4).png')?>" alt="">
              </a>
              <!-- Blog Content -->
              <div class="blog-content">
                <a href="./blog-details.html" class="post-title">Penentuan Status Imunisasi Tetanus Toksoid (TT)</a>
                <p>Petugas untuk slenajutnya bilamana diperlukan mendapatkan suntikan tetanus toksoid sesuai...</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Blog Area End ***** -->


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
