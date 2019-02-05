
  <!-- ***** Breadcrumb Area Start ***** -->
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
              <li class="breadcrumb-item"><a href="<?php echo base_url('#')?>">Periksa</a></li>
              <li class="breadcrumb-item active" aria-current="page">Detail Riwayat Pasien</li>
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
              <h2>Detail Riwayat Pasien</h2>
              <?php echo $this->session->flashdata('danger');?>
              <div class="line"></div>
            </div>

            <?php foreach ($riwayat as $riwayat ):

              $date = $riwayat['Tanggal_periksa'];
              $newDate = date("d-m-Y", strtotime($date));

            ?>



              <div class="row">
                <div class="col-6" style="margin-bottom:30px;">
                  <label><b>NIK</b></label>
                  <input class="form-control form-control-lg" type="text" value="<?php echo $riwayat['NIK_Ibu']?>" readonly>
                </div>
                <div class="col-6" style="margin-bottom:30px;">
                  <label><b>Tekanan Darah</b></label>
                  <input class="form-control form-control-lg" type="text" value="<?php echo $riwayat['Tekanan_darah']." mmHg"?>" readonly>
                </div>
                <!-- <div class="col-6" style="margin-bottom:30px;">
                  <label><b>Nama</b></label>
                  <input class="form-control form-control-lg" type="text" value="<?php echo $riwayat['Nama']?>"   readonly>
                </div> -->
                <div class="col-6" style="margin-bottom:30px;">
                  <label><b>Berat Badan</b></label>
                  <input class="form-control form-control-lg" type="text" value="<?php echo $riwayat['Berat_badan']." Kg"?>" readonly>
                </div>
                <div class="col-6" style="margin-bottom:30px;">
                  <label><b>Tanggal Periksa</b></label>
                  <input class="form-control form-control-lg" type="text" value="<?php echo $newDate ?>" readonly>
                </div>
                <div class="col-6" style="margin-bottom:30px;">
                  <label><b>Tinggi Badan</b></label>
                  <input class="form-control form-control-lg" type="text" value="<?php echo $riwayat['Tinggi_badan']." cm"?>"  readonly>
                </div>
                <div class="col-6" style="margin-bottom:30px;">
                  <label><b>Dokter Periksa</b></label>
                  <input class="form-control form-control-lg" type="text" value="<?php echo $Nama_dokter?>" readonly>
                </div>
                <div class="col-6" style="margin-bottom:30px;">
                  <label><b>Umur Kehamilan</b></label>
                  <input class="form-control form-control-lg" type="text" value="<?php echo $riwayat['Umur_kehamilan']. " Minggu"?>" readonly>
                </div>
                <div class="col-6" style="margin-bottom:30px;">
                  <label><b>Tinggi Fundus</b></label>
                  <input class="form-control form-control-lg" type="text" value="<?php echo $riwayat['Tinggi_fundus']." cm"?>" readonly>
                </div>
                <div class="col-6" style="margin-bottom:30px;">
                  <label><b>Letak Janin</b></label>
                  <input class="form-control form-control-lg" type="text" value="<?php echo $riwayat['Letak_janin']?>" readonly>
                </div>
                <div class="col-6" style="margin-bottom:30px;">
                  <label><b>Denyut Jantung Janin</b></label>
                  <input class="form-control form-control-lg" type="text" value="<?php echo $riwayat['Denyut_jantung_janin']." / menit"?>" readonly>
                </div>
                <div class="col-6" style="margin-bottom:30px;">
                  <label><b>Obat</b></label>
                  <input class="form-control form-control-lg" type="text" value="<?php echo $riwayat['Obat']?>" readonly>
                </div>
                <div class="col-12" style="margin-bottom:30px;">
                  <label><b>Keluhan</b></label>
                  <textarea class="form-control form-control-lg" type="text" placeholder="<?php echo $riwayat['Keluhan_sekarang']?>" readonly></textarea>
                </div>
                <div class="col-12" style="margin-bottom:30px;">
                  <button type="submit" class="btn dento-btn" onclick="window.history.back()">Kembali</button>
                </div>
              </div>
            <?php endforeach; ?>


        </di2v>
      </div>
    </div>
  </section>
