
  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/homeee.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title">Hasil Pencarian</h2>
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
              <li class="breadcrumb-item"><a href="<?php echo base_url('pegawai/dashboard');?>"><i class="fa fa-home"></i> Beranda</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('pegawai/menu_anak/periksa/found/'.$data_anak)?>">Periksa</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Hasil Periksa</li>
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
        <div class="col-12 col-md-8">
          <div class="contact-form">
            <!-- Section Heading -->
            <div class="section-heading">
              <h2>Masukkan hasil kesehatan</h2>
              <div class="line"></div>
            </div>

              <?php echo form_open('pegawai/menu_anak/periksa/tambah_daftar');?>
              <div class="row">
                <div class="col-12">
                  <label> <b>Tanggal</b><span style="color:red">&nbsp*<span> </label>
                  <input type="date" name="Tanggal_periksa" class="form-control mb-30" required placeholder="Tanggal Periksa">
                </div>
                <div class="col-12">
                  <label> <b>Tekanan Darah</b><span style="color:red">&nbsp*<span> </label>
                  <input type="number" name="Tekanan_darah" class="form-control mb-30" required  placeholder="Tekanan Darah (mmhg)">
                </div>
                <div class="col-12">
                  <label> <b>Berat Badan</b><span style="color:red">&nbsp*<span></label>
                  <input type="number" name="Berat_badan" class="form-control mb-30" required placeholder="Berat Badan (Kg)">
                </div>
                <div class="col-12">
                  <label> <b>Tinggi Badan</b><span style="color:red">&nbsp*<span> </label>
                  <input type="number" name="Tinggi_badan" class="form-control mb-30" required placeholder="Tinggi Badan (cm)">
                </div>
                <div class="col-12">
                  <label> <b>Keluhan</b> </label>
                  <textarea type="text" name="Keluhan_sekarang" class="form-control mb-30" placeholder=""></textarea>
                </div>
                <div class="col-12">
                  <label> <b>Obat</b> </label>
                  <input type="text" name="Obat" class="form-control mb-30"  placeholder="Obat">
                </div>

                <?php

                  $dokter_periksa = $this->session->userdata('pegawai');

                ?>
                <input type="hidden" name="id_bayi" value="<?php echo $data_anak;?>">
                <input type="hidden" name="dokter_periksa" value="<?php echo $dokter_periksa['NIP'];?>">

                <?php foreach ($NIK_Ibu as $NIK_Ibu): ?>
                  <input type="hidden" name="NIK_ibu" value="<?php echo $NIK_Ibu['NIK_Ibu'];?>">
                <?php endforeach; ?>



                <div class="col-12">
                  <button type="submit" class="btn dento-btn">Simpan</button>
                </div>
          </div>
        </di2v>
      </div>
    </div>
  </section>
