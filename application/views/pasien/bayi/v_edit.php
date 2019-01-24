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
        <form role="form" method="POST" action="<?php echo base_url()."bayi/update_data"?>">
          <div class="box-body">
            <div  style="margin-left:300px; margin-right:300px; margin-top">
              <div class="form-group">
                <label>Nama</label>
                <input type="hidden" name="id_bayi" value="<?php echo $bayi['id_bayi'] ?>"></input>
                <input type="text" class="form-control" required name="Nama" value="<?php echo $bayi['Nama'] ?>">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="Jenis_kelamin" required style="width:100%; height:30px; padding:2px 10px;" >
                  <option value="" style="width:100%; height:50px; ">--Pilih Jenis Kelamin--</option>
                  <option value="Laki-laki">Laki Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" required name="Tgl_lahir" value="<?php echo isset($bayi['Tgl_lahir']) ? set_value('Tgl_lahir', date('Y-m-d', strtotime($bayi['Tgl_lahir']))) : set_value('Tgl_lahir'); ?>">
              </div>
              <div>
                <label>NIK Ibu</label>
                <select name="NIK_Ibu" style="width:100%;  height:30px;">
                <?php foreach ($ibu as $ibu) { ?>
                      <option value="<?php echo $ibu['NIK']?>" > <?php
                        echo $ibu['NIK'];
                        echo "  ";
                        echo $ibu['Nama']; ?>
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
