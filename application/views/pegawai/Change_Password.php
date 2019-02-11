
  <!-- ***** Breadcrumb Area Start ***** -->

  <div class="breadcumb--con">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url('#');?>"><i class="fa fa-home"></i> Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page">Ganti Password Akun</li>
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
              <h2>Ganti Kata Sandi</h2>
              <?php echo $this->session->flashdata('danger');?>
              <?php echo $this->session->flashdata('success');?>
              <div class="line"></div>
            </div>

              <?php echo form_open('pegawai/Change_Password/update');?>
              <p style="color:red"><?php echo validation_errors(); ?></p>
              <div class="row">
                <div class="col-12">
                  <label> <b>Kata Sandi Lama</b><span style="color:red">&nbsp*<span> </label>
                  <input type="password" name="old_password" class="form-control mb-30" required>
                </div>
                <div class="col-12">
                  <label> <b>Kata Sandi Baru </b><span style="color:red">&nbsp*<span> </label>
                  <input type="password" name="new_password" class="form-control mb-30" required>
                </div>
                <div class="col-12">
                  <label> <b>Konfirmasi Kata Sandi </b><span style="color:red">&nbsp*<span> </label>
                  <input type="password" name="confirmation_password" class="form-control mb-30" required >
                </div>
                <div class="col-12">
                  <button type="submit" class="btn dento-btn">Simpan</button>
                </div>
          </div>
        </di2v>
      </div>
    </div>
  </section>
