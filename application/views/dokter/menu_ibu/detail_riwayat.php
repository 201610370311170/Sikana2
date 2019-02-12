
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

            <div class="form-inline">

                <label class="control-label col-sm-4"  style="margin-bottom:20px;">NIK Ibu:</label>
                <div class="col-sm-8" style="margin-bottom:20px;">
                  <input type="text" class="form-control"  value="<?php echo $riwayat['NIK_Ibu']?>"   readonly>
                </div>

                <label class="control-label col-sm-4"  style="margin-bottom:20px;">Tekanan Darah:</label>
                <div class="col-sm-8" style="margin-bottom:20px;">
                  <input type="text" class="form-control"  value="<?php echo $riwayat['Tekanan_darah']." mmHg"?>" readonly>
                </div>

                <label class="control-label col-sm-4"  style="margin-bottom:20px;">Berat Badan:</label>
                <div class="col-sm-8" style="margin-bottom:20px;">
                  <input type="text" class="form-control"  value="<?php echo $riwayat['Berat_badan']." Kg"?>" readonly>
                </div>

                <label class="control-label col-sm-4"  style="margin-bottom:20px;">Tanggal Periksa:</label>
                <div class="col-sm-8" style="margin-bottom:20px;">
                  <input type="text" class="form-control"  value="<?php echo $newDate ?>" readonly>
                </div>

                <label class="control-label col-sm-4"  style="margin-bottom:20px;">Tinggi Badan:</label>
                <div class="col-sm-8" style="margin-bottom:20px;">
                  <input type="text" class="form-control" value="<?php echo $riwayat['Umur_kehamilan']. " Minggu"?>"  readonly>
                </div>



                <label class="control-label col-sm-4"  style="margin-bottom:20px;">Umur Kehamilan:</label>
                <div class="col-sm-8" style="margin-bottom:20px;">
                  <input type="text" class="form-control"  value="<?php echo $riwayat['Umur_kehamilan']. " Minggu"?>"   readonly>
                </div>

                <label class="control-label col-sm-4"  style="margin-bottom:20px;">Tinggi Fundus:</label>
                <div class="col-sm-8" style="margin-bottom:20px;">
                  <input type="text" class="form-control"  value="<?php echo $riwayat['Tinggi_fundus']." cm"?>"  readonly>
                </div>

                <label class="control-label col-sm-4"  style="margin-bottom:20px;">Letak Janin:</label>
                <div class="col-sm-8" style="margin-bottom:20px;">
                  <input type="text" class="form-control"   value="<?php echo $riwayat['Letak_janin']?>" readonly>
                </div>

                <label class="control-label col-sm-4"  style="margin-bottom:20px;">Denyut Jantung Janin:</label>
                <div class="col-sm-8" style="margin-bottom:20px;">
                  <input type="text" class="form-control"  value="<?php echo $riwayat['Denyut_jantung_janin']." / menit"?>" readonly>
                </div>

                <label class="control-label col-sm-4"  style="margin-bottom:20px;">Keluhan Sekarang:</label>
                <div class="col-sm-8" style="margin-bottom:20px;">
                  <textarea class="form-control" placeholder="<?php echo $riwayat['Keluhan_sekarang']?>" readonly></textarea>
                </div>


                <label class="control-label col-sm-4"  style="margin-bottom:20px;">Diagnosa:</label>
                <div class="col-sm-8" style="margin-bottom:20px;">
                  <input class="form-control" placeholder="<?php echo $riwayat['Diagnosa']?>" readonly>
                </div>


                <div class="form-group">
                  <div class="col-12" style="margin-bottom:30px;margin-left:530px; margin-top:30px;">
                    <button class="btn dento-btn" onclick="window.history.back()">Kembali</button>
                  </div>
                </div>
            </div>
            <?php endforeach; ?>


        </di2v>
      </div>
    </div>
  </section>
