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
        <form role="form" method="POST" action="<?php echo base_url()."admin/bayi/update_data_kesehatan/".$id_bayi."/".$id_periksa?>">
          <div class="box-body">
            <div  style="margin-left:300px; margin-right:300px; margin-top">
              <div class="form-group">
                <label>Tanggal Periksa</label>
                <input type="hidden" class="form-control" value="<?php echo $id_periksa?>" required name="id_periksa">
                <input type="hidden" class="form-control" value="<?php echo $id_bayi?>" required name="id_bayi">
                <input type="date" required name="tanggal_periksa" class="form-control" value="<?php echo isset($tanggal_periksa) ? set_value('tanggal_periksa', date('Y-m-d', strtotime($tanggal_periksa))) : set_value('tanggal_periksa'); ?>">
              </div>
              <div class="form-group">
                <label>Tekanan Darah</label>
                <input type="text" class="form-control" value="<?php echo $tekanan_darah?>" name="tekanan_darah" required placeholder="Tekanan Darah Pasien">
              </div>
              <div class="form-group">
                <label>Berat Badan</label>
                <input type="number" class="form-control" value="<?php echo $berat_badan?>" required name="berat_badan" placeholder="Berat Badan Pasien" >
              </div>
              <div class="form-group">
                <label>Tinggi Badan</label>
                <input type="number" class="form-control" value="<?php echo $tinggi_badan?>" required name="tinggi_badan" placeholder="Tinggi Badan Pasien" >
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
