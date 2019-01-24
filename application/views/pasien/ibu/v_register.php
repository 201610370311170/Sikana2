<?php
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<link href="<?php echo base_url('assets/css/page_loader.css') ?>" rel="stylesheet" type="text/css" />


<!-- content -->
<section class="content" id="main">
    <div class="col-md-6" style="width:100%;height:100%;">
      <div class="box box-success" id="box">
        <div class="box-body">
            <h3>
              <h3><i class="fa fa-user"> &nbspInput Forms </i></h3>
            </h3>

            <!-- <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> -->
        </div>
      </div>


      <!-- general form elements -->
      <div class="box box-success" >
        <div class="box-header with-border">

        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" id="register" method="post" action="register">
          <div class="box-body">
            <div class="form-group">
              <label>NIK</label>
              <input type="text" class="form-control" required name="NIK" placeholder="Nomor Induk KTP" >
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" required name="Nama" placeholder="Nama Pasien">
            </div>
            <div class="form-group">
              <label>Umur</label>
              <input type="number" class="form-control" required name="Umur" placeholder="Umur Pasien">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" required name="Alamat" placeholder="Alamat Pasien">
            </div>
            <div class="form-group">
              <label>Nomer HP</label>
              <input type="text" class="form-control" required name="Nomor_Telefon" placeholder="Nomor Telefon">
            </div>
            <div class="form-group">
              <label>Dokter Damping</label>
              <br>
              <select name="Dokter_damping" required>
                  <?php foreach ($data as $data) { ?>
                    <option value="">--Pilih Nama Dokter--</option>
                      <option value="<?php echo $data['Nama']?>" > <?php echo $data['Nama'];?> </option>
                  <?php  } ?>

              </select>
            </div>
            <input type="submit" class="btn btn-success" style="width:100px;"></input>
          </div>
          <!-- /.box-body -->

          </div>
        </form>
      </div>
      <!-- /.box -->
</section>




<?php
$this->load->view('template/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('template/foot');
?>
