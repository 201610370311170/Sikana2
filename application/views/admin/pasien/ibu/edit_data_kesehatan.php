<?php
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<link href="<?php echo base_url('assets/css/page_loader.css') ?>" rel="stylesheet" type="text/css" />

<!-- content -->
<section class="content" id="main">
  <div class="clearfix visible-sm-block"></div>
    <div class="box">
      <div style="background-color:white">
        <form role="form" method="POST" action="<?php echo base_url()."admin/ibu/update_data_kesehatan/".$NIK_Ibu."/".$id_periksa?>">
          <div class="box-body">
            <div  style="margin-left:300px; margin-right:300px; margin-top">
              <div class="form-group">
                <label>Tanggal Periksa</label>
                <input type="hidden" class="form-control" value="<?php echo $id_periksa?>" required name="id_periksa">
                <input type="hidden" class="form-control" value="<?php echo $NIK_Ibu?>" required name="NIK_Ibu">
                <input type="date" required name="Tanggal_periksa" class="form-control" value="<?php echo isset($Tanggal_periksa) ? set_value('Tanggal_periksa', date('Y-m-d', strtotime($Tanggal_periksa))) : set_value('Tanggal_periksa'); ?>">
              </div>
              <div class="form-group">
                <label>Tekanan Darah</label>
                <input type="text" class="form-control" value="<?php echo $Tekanan_darah?>" name="Tekanan_darah" required placeholder="Tekanan Darah Pasien">
              </div>
              <div class="form-group">
                <label>Berat Badan</label>
                <input type="number" class="form-control" value="<?php echo $Berat_badan?>" required name="Berat_badan" placeholder="Berat Badan Pasien" >
              </div>
              <div class="form-group">
                <label>Umur Kehamilan</label>
                <input type="number" class="form-control" value="<?php echo $Berat_badan?>" required name="Umur_kehamilan" placeholder="Umur Kehamilan (Minggu)" >
              </div>
              <div class="form-group">
                <label>Tinggi Fundus</label>
                <input type="text" class="form-control" value="<?php echo $Tinggi_fundus?>" required  name="Tinggi_fundus" placeholder="Tinggi Fundus (cm)" >
              </div>
              <div class="form-group">
                <label>Letak Janin</label>
                <input type="text" class="form-control" value="<?php echo $Letak_janin?>" required  name="Letak_janin" placeholder="Letak Janin" >
              </div>
              <div class="form-group">
                <label>Denyut Jantung Janin</label>
                <input type="number" class="form-control" value="<?php echo $Denyut_jantung_janin?>" required  name="Denyut_jantung_janin" placeholder="per menit" >
              </div>


              <br><br>
              <div class="form-group">
                <input type="submit" name="update" value="Update" class="btn btn-success"></input>
                <a class="btn btn-default" href="javascript:window.history.go(-1);">Kembali</a>
              </div>

            </div>
          </div>
        </div>
      </form>
  </div>
</section>

<?php
$this->load->view('template/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('template/foot');
?>
