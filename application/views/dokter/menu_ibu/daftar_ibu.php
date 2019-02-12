
<div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/homeee.jpg);">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12">
        <h2 class="title">Tambah data pasien</h2>
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
              <li class="breadcrumb-item"><a href="<?php echo base_url('#');?>"><i class="fa fa-home"></i> Beranda</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('pegawai/Daftar')?>">Daftar</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Data Pasien</li>
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
  
              <?php echo $this->session->flashdata('danger');?>
              <div class="line"></div>
            </div>

              <?php echo form_open('pegawai/Daftar/insert_ibu');?>
              <div class="row">
                <div class="col-12">
                  <label> <b>NIK</b><span style="color:red">&nbsp*<span> </label>
                  <input type="number" name="NIK" class="form-control mb-30" required >
                </div>
                <div class="col-12">
                  <label> <b>Nama</b><span style="color:red">&nbsp*<span> </label>
                  <input type="text" name="Nama" class="form-control mb-30" required >
                </div>
                <div class="col-12">
                  <label> <b>Tanggal Lahir</b><span style="color:red">&nbsp*<span> </label>
                  <input type="date" name="Tanggal_lahir" class="form-control mb-30" required >
                </div>
                <div class="col-12">
                  <label> <b>Alamat</b><span style="color:red">&nbsp*<span> </label>
                  <input type="text" name="Alamat" class="form-control mb-30" required  >
                </div>
                <div class="col-12">
                  <label> <b>Kategori Pasien</b><span style="color:red">&nbsp*<span> </label>
                  <select type="text" name="Kategori_pasien" class="form-control mb-30" required>
                    <option class="form-control mb-30" value="">--Pilih Kategori--</option>
                    <option class="form-control mb-30" value="BPJS">BPJS</option>
                    <option class="form-control mb-30" value="Umum">Umum</option>
                  </select>
                </div>
                <div class="col-12">
                  <label> <b>Nomor Telefon</b><span style="color:red">&nbsp*<span></label>
                  <input type="tel" name="Nomor_Telefon" class="form-control mb-30" required >
                </div>

                <div class="col-12">
                  <button type="submit" class="btn dento-btn">Simpan</button>
                </div>
          </div>
        </di2v>
      </div>
    </div>
  </section>
