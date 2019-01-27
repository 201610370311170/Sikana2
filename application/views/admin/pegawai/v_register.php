<?php
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>



<!-- content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-6" style="margin-left:400px;margin-top:70px;width:400px;">
      <!-- general form elements -->
      <div class="box box-primary" style="border-radius:25px">
        <div class="box-header with-border">
          <div  style="text-align:center;">
            <h3 class="box-title">Form Bio</h3>
          </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" id="register" method="post" action="register">
          <div class="box-body">
            <div class="form-group">
              <label>NIK</label>
              <input type="text" class="form-control" required name="NIP" style="border:none; border-bottom: 1px solid grey;">
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" required name="Nama" style="border:none; border-bottom: 1px solid grey;">
            </div>
            <div class="form-group">
              <label>Umur</label>
              <input type="number" class="form-control" required name="Umur" style="border:none; border-bottom: 1px solid grey;">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" required name="Alamat" style="border:none; border-bottom: 1px solid grey;">
            </div>
            <div class="form-group">
              <label>Nomer HP</label>
              <input type="text" class="form-control" required name="Nomor_Telefon" style="border:none; border-bottom: 1px solid grey;">
            </div>
            <div class="form-group">
              <label>Dokter Damping</label>
              <br>
              <select name="Dokter_damping">
                <option value="">--Pilih Nama Dokter--</option>

                  <?php foreach ($data as $data) { ?>
                      <option value="<?php echo $data->Nama?>"> <?php echo $data->Nama;?> </option>
                  <?php  } ?>

              </select>
            </div>
          </div>
          <!-- /.box-body -->

            <input type="submit" class="btn btn-primary" style="border-radius:25px;width:100%;"></input>
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
