<?php
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<link href="<?php echo base_url('assets/css/page_loader.css') ?>" rel="stylesheet" type="text/css" />

<!-- content -->
<section class="content" id="main">
  <div class="main" id="main">
    <nav class="breadcrumb " style="background-color:white">
      <h5>
        <a class="breadcrumb-item" href="<?php echo base_url('admin/dashboard')?>">Home /</a>
        <a class="breadcrumb-item" href="<?php echo base_url('admin/ibu')?>">Data Ibu /</a>
        <span class="breadcrumb-item active">Edit Data</span>
      </h5>
    </nav>
  <div class="clearfix visible-sm-block"></div>
    <div class="box">
      <div style="background-color:white">
        <form role="form" method="POST" action="<?php echo base_url()."admin/ibu/update_data"?>">
          <div class="box-body">
            <div  style="margin-left:300px; margin-right:300px; margin-top">
              <div class="form-group">
                <label>Nama</label>
                <input type="hidden" name="NIK" value="<?php echo $ibu['NIK'] ?>"></input>
                <input type="text" class="form-control" required name="Nama" value="<?php echo $ibu['Nama'] ?>">
              </div>
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" required name="Tgl_lahir" value="<?php echo isset($ibu['Tgl_lahir']) ? set_value('Tgl_lahir', date('Y-m-d', strtotime($ibu['Tgl_lahir']))) : set_value('Tgl_lahir'); ?>">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" required name="Alamat" value="<?php echo $ibu['Alamat'] ?>">
              </div>
              <div class="form-group">
                <label>Nomor HP</label>
                <input type="text" class="form-control" required name="Nomor_Telefon" value="<?php echo $ibu['Nomor_Telefon'] ?>">
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
