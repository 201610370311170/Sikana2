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
        <form role="form" method="POST" action="<?php echo base_url()."ibu/update_data"?>">
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
              <div>
                <label>Dokter Damping</label>
                <select name="Dokter_damping" value="<?php echo set_value($ibu['Dokter_damping'])?>" style="width:100%;  height:30px;">
                <?php foreach ($pegawai as $pegawai) { ?>
                      <option value="<?php echo $pegawai['NIP']?>" > <?php
                        echo $pegawai['NIP'];
                        echo "  ";
                        echo $pegawai['Nama']; ?>
                      </option>
                  <?php  } ?>
                </select>
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
