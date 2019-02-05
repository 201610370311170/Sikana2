

  <div class="breadcumb--con">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">

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

              <?php echo form_open('pegawai/menu_ibu/periksa/tambah_daftar');?>
              <div class="row">
                <div class="col-12">
                  <label> <b>Tanggal Periksa</b><span style="color:red">&nbsp*<span> </label>
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
                  <label> <b>Umur Kehamilan</b><span style="color:red">&nbsp*<span> </label>
                  <input type="number" name="Umur_kehamilan" class="form-control mb-30" required placeholder="Umur Kehamilan (Minggu)">
                </div>
                <div class="col-12">
                  <label> <b>Tinggi Fundus</b><span style="color:red">&nbsp*<span> </label>
                  <input type="number" name="tinggi_fundus" class="form-control mb-30" required placeholder="Tinggi Fundus (cm)">
                </div>
                <div class="col-12">
                  <label> <b>Letak Janin</b><span style="color:red">&nbsp*<span> </label>
                  <input type="text" name="Letak_janin" class="form-control mb-30" required placeholder="Letak Janin">
                </div>
                <div class="col-12">
                  <label> <b>Denyut Jantung Janin</b><span style="color:red">&nbsp*<span> </label>
                  <input type="number" name="Denyut_jantung_janin" class="form-control mb-30" required placeholder="per menit">
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
                <input type="hidden" name="NIK_Ibu" value="<?php echo $data_ibu;?>">
                <input type="hidden" name="dokter_periksa" value="<?php echo $dokter_periksa['NIP'];?>">


                <div class="col-12">
                  <button type="submit" class="btn dento-btn">Simpan</button>
                </div>
          </div>
        </di2v>
      </div>
    </div>
  </section>
