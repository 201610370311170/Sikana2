<?php
$this->load->view('template/head');
?>

<!--tambahkan custom css disini-->
<!-- iCheck -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/flat/blue.css') ?>" rel="stylesheet" type="text/css" />
<!-- Morris chart -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url('assets/js/anychart-pie.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/anychart-core.min.js')?>"></script>

<!-- TOPBAR & SIDEBAR -->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<div class="main" style="margin-left:20px;">

  <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>
          Admin Dashboard
      </h1>
      <hr style="display: block; border-style: inset;  border-width: 1px;">
      <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
      </ol>
  </section>

  <!-- Main content -->
  <section class="content">

      <!-- Info boxes -->
      <div class="row">
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>
                  <?php foreach ($jumlahDataIbu as $jumlahDataIbu);
                    echo $jumlahDataIbu;
                  ?>
                </h3>

                <p>Jumlah Data Ibu</p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <a href="<?php echo base_url('admin/ibu')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>
                  <?php foreach ($jumlahDataBayi as $jumlahDataBayi);
                    echo $jumlahDataBayi;
                  ?>
                </h3>

                <p>Jumlah Data Anak</p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <a href="<?php echo base_url('admin/bayi')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>
                  <?php foreach ($jumlahDataPegawai as $jumlahDataPegawai);
                    echo $jumlahDataPegawai;
                  ?>
                </h3>

                <p>Jumlah Data Pegawai</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-md"></i>
              </div>
              <a href="<?php echo base_url('admin/pegawai')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>
                  <?php foreach ($jumlahDataRS as $jumlahDataRS);
                    echo $jumlahDataRS;
                  ?>
                </h3>

                <p>Jumlah Data RS</p>
              </div>
              <div class="icon">
                <i class="fa fa-hospital-o"></i>
              </div>
              <a href="<?php echo base_url('admin/rumah_sakit')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- TABLE: Pasien Ibu -->
            <div class="col-sm-5">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Pasien Ibu Terbaru</h3>

                  <div class="box-tools pull-right">
                    <button type="button" id="hide" class="btn btn-box-tool" data-widget="collapse" data-toggle="collapse" data-target="#tabelIbu"><i class="fa fa-minus"></i>
                    </button>
                    <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="collapse">

                </div>
                <div class="box-body" id="tabelIbu">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                      <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($dataIbu as $dataIbu):?>
                      <tr>
                          <td><?php echo $dataIbu['NIK'];?></td>
                          <td><?php echo $dataIbu['Nama'];?></td>
                          <td>

                            <!-- LABEL BPJS -->
                            <?php
                            $data1 = $dataIbu['Kategori'];
                            $data2 = 'BPJS';

                              if (strcmp($data1, $data2) !== 0){?>
                                  <span class="label label-default">Umum</span>
                              <?php }
                              else {?>
                                  <span class="label label-success">BPJS</span>
                              <?php }
                              ?>

                          </td>
                      </tr>
                    <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->

            <!-- TABLE: Pasien Anak -->
              <div class="col-sm-5">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">Pasien Anak Terbaru</h3>

                    <div class="box-tools pull-right">
                      <button type="button" id="hide2" class="btn btn-box-tool" data-widget="collapse" data-toggle="collapse" data-target="#tabelbayi"><i class="fa fa-minus"></i>
                      </button>
                      <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="collapse">

                  </div>
                  <div class="box-body" id="tabelbayi">
                    <div class="table-responsive">
                      <table class="table no-margin">
                        <thead>
                        <tr>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Kategori</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($dataAnak as $dataAnak):?>
                        <tr>
                            <td><?php echo $dataAnak['id_bayi'];?></td>
                            <td><?php echo $dataAnak['Nama'];?></td>
                            <td>

                              <!-- LABEL BPJS -->
                              <?php
                              $data1 = $dataAnak['Kategori'];
                              $data2 = 'BPJS';

                                if (strcmp($data1, $data2) !== 0){?>
                                    <span class="label label-default">Umum</span>
                                <?php }
                                else {?>
                                    <span class="label label-success">BPJS</span>
                                <?php }
                                ?>

                            </td>
                        </tr>
                      <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.table-responsive -->
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->



          </div>
        </div>
      </div>


    </section>

</div>


<?php
$this->load->view('template/js');
?>

<script>
$( "#hide" ).click(function() {
  $( "#tabelIbu" ).slideToggle( "slow" );
});
</script>

<script>
$( "#hide2" ).click(function() {
  $( "#tabelbayi" ).slideToggle( "slow" );
});
</script>

<!--tambahkan custom js disini-->
<!-- Sparkline -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/sparkline/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/chartjs/Chart.min.js') ?>" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/pages/dashboard2.js') ?>" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>

<?php
$this->load->view('template/foot');
?>
