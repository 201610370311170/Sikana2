

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

              <?php echo form_open('dokter/menu_ibu/periksa/tambah_daftar');?>
              <div class="row">
                <div class="col-12">
                  <label> <b>Tanggal Periksa</b><span style="color:red">&nbsp*<span> </label>
                  <input type="date" name="Tanggal_periksa" class="form-control mb-30" required placeholder="Tanggal Periksa">
                </div>
                <div class="col-12">
                  <label> <b>Diagnosa</b><span style="color:red">&nbsp*<span> </label>
                  <textarea type="text" name="Diagnosa" class="form-control mb-30" required></textarea>
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
