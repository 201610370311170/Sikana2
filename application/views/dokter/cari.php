
  <!-- content -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/autocomplete.css')?>">

  <section class="content">

    <div class="breadcumb-area bg-img bg-gradient-overlay">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <h2 class="title">Cari Data</h2>
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
                <li class="breadcrumb-item"><a href="<?php echo base_url('#')?>"><i class="fa fa-home"></i> Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cari</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->
    <!-- ****** About Us Area Start ******* -->
    <section class="dento-about-us-area mt-50 mb-100">
      <div class="container">
        <div class="row">
          <!-- Informasi Periksa -->
          <div class="col-12 col-md-4">
            <div class="periksa-information">
              <p>Periksa Kesehatan dengan menginputkan NIK (Nomor Induk Kependudukan) dari Pasien yang sudah didaftarkan pada Kohort kesehatan.</p>
            </div>
          </div>
            <!-- Contact Form -->
          <div class="col-12 col-md-8">
            <div class="contact-form">
              <!-- Section Heading -->
              <div class="section-heading">
                <h2>Masukkan NIK</h2>
                  <p id="demo"></p>
                <div class="line"></div>
              </div>
              <?php echo $this->session->flashdata('notfound')?>
              <!-- Form -->
              <form action="<?php echo base_url('dokter/cari/cari_data')?>" method="post" autocomplete="off">
                <div class="row">
                  <div class="col-lg-12 autocomplete">
                    <input type="number" name="NIK" class="form-control mb-30" placeholder="NIK / No.Akte Kelahiran" required >
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn dento-btn">Cari</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
