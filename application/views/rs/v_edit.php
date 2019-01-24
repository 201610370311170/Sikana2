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
      <div style="background-color:white; height:100%" >
        <form role="form" method="POST" action="<?php echo base_url()."rumah_sakit/update_data"?>">
          <div class="box-body">
            <div  style="margin-left:300px; margin-right:300px; margin-top">
              <div class="form-group">
                <label>Nama Rumah Sakit</label>
                <input type="hidden" name="id_rs" value="<?php echo $data['id_rs'] ?>"></input>
                <input type="text" class="form-control" required name="Nama_RS" value="<?php echo $data['Nama_RS'] ?>">
              </div>
              <div class="form-group">
                <label>Alamat Rumah Sakit</label>
                <input type="hidden" name="id_rs" value="<?php echo $data['id_rs'] ?>"></input>
                <input type="text" class="form-control" required name="Alamat_RS" value="<?php echo $data['Alamat_RS'] ?>">
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
