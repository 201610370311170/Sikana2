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
        <form role="form" method="POST" action="<?php echo base_url()."pegawai/update_data"?>">
          <div class="box-body">
            <div  style="margin-left:300px; margin-right:300px; margin-top">
              <div class="form-group">
                <label>Nama</label>
                <input type="hidden" name="NIP" value="<?php echo $pegawai['NIP'] ?>"></input>
                <input type="text" class="form-control" required name="Nama" value="<?php echo $pegawai['Nama'] ?>">
              </div>
              <div class="form-group">
                <label>Jabatan</label>
                <input type="text" class="form-control" required name="Jabatan" value="<?php echo $pegawai['Jabatan'] ?>">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" required name="Alamat" value="<?php echo $pegawai['Alamat'] ?>">
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
