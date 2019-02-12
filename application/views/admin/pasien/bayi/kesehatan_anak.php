<?php
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<!-- page loader  -->
<link href="<?php echo base_url('assets/css/page_loader.css') ?>" rel="stylesheet" type="text/css" />
<!-- CSS Data TABLE -->
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/1.5.4/css/buttons.jqueryui.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/select/1.2.7/css/select.jqueryui.min.css" rel="stylesheet" type="text/css" />
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<!-- Main content -->
<section class="content" >
  <?php echo $this->session->flashdata('success');?>
  <?php echo validation_errors();?>
  <div class="main" id="main">
    <nav class="breadcrumb " style="background-color:white">
      <h5>
        <a class="breadcrumb-item" href="<?php echo base_url('admin/dashboard')?>">Home /</a>
        <a class="breadcrumb-item" href="<?php echo base_url('admin/ibu')?>">Data Ibu /</a>
        <span class="breadcrumb-item active">Kesehatan </a>

      </h5>
    </nav>
  <div class="box" id="box">
    <div class="box-body" >
        <h3 style="margin-left: 50px;">
          <i class="fa fa-user"></i> &nbsp <span >Data Pasien</span>
        </h3>
        <?php foreach ($data as $data):

          //Age
          $today       = new DateTime();
          $birthdate   = new DateTime($data['Tgl_lahir']);
          $interval    = $today->diff($birthdate);
          $Umur = $interval->format('%y Tahun');

          // Date
          $date = $data['Tgl_lahir'];
          $newDate = date("d-m-Y", strtotime($date));


        ?>


          <div style="margin-top:50px; margin-left: 50px;">
            <p>
              <span style="margin-right: 115px;">No.Akta Kelahiran / NIK </span>
              <span style="margin-right: 50px;">: </span>
              <?php echo "\t".$data['id_bayi']?>
            </p>
            <p>
              <span style="margin-right: 223px;">Nama </span>
              <span style="margin-right: 50px;">: </span>
              <?php echo "\t".$data['Nama']?>
            </p>
            <p>
              <span style="margin-right: 176px;">Tanggal Lahir </span>
              <span style="margin-right: 50px;">: </span>
              <?php echo "\t".$newDate?>
            </p>
            <p>
              <span style="margin-right: 224px;">Umur </span>
              <span style="margin-right: 50px;">: </span>
              <?php echo "\t".$Umur?>
            </p>
            <p>
              <span style="margin-right: 207px;">Kategori </span>
              <span style="margin-right: 50px;">: </span>
              <?php
              if($Umur < 3)
                echo "Bayi";
              else
                echo "Anak - anak";
              ?>
            </p>
            <p>
              <span style="margin-right: 172px;">Jenis Kelamin </span>
              <span style="margin-right: 50px;">: </span>
              <?php echo "\t".$data['Jenis_kelamin']?>
            </p>
            <p>
              <span style="margin-right: 214px;">NIK Ibu </span>
              <span style="margin-right: 50px;">: </span>
              <?php echo "\t".$data['NIK_Ibu']?>
            </p>
            <br><br>
          </div>
        <?php endforeach; ?>
    </div>
  </div>
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="box" id="box">
            <!-- /.card-header -->
          <div class="box-body">
            <h3 style="margin-left: 50px;">
              <i class="fa fa-calendar"></i> &nbsp <span >Riwayat Periksa</span>

            </h3>
            <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."> -->
            <div style=" overflow-x:auto;">
              <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>

                    <th class="th-sm">Tanggal Periksa
                    </th>
                    <th class="th-sm">Keluhan
                    </th>
                    <th class="th-sm">Obat
                    </th>
                    <th class="th-sm">Tekanan Darah
                    </th>
                    <th class="th-sm">Berat Badan
                    </th>
                    <th class="th-sm">Tinggi Badan
                    </th>

                    <th class="th-sm">
                    </th>
                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($riwayat as $riwayat):


                    // Date
                    $date = $riwayat['tanggal_periksa'];
                    $newDate = date("d-m-Y", strtotime($date));

                    ?>

                    <tr>


                      <td><?php echo $newDate?></td>
                      <td><?php echo $riwayat['keluhan_sekarang'];?></td>
                      <td><?php echo $riwayat['obat'];?></td>
                      <td><?php echo $riwayat['tekanan_darah']." mmhg";?></td>
                      <td><?php echo $riwayat['berat_badan']." Kg";?></td>
                      <td><?php echo $riwayat['tinggi_badan']." cm";?></td>


                      <td>
                        <!-- <button type="button" class="btn btn-link"><i class="fa fa-eye"></i></button> -->
                        <a href="<?php echo base_url()."admin/bayi/edit_data_kesehatan/".$data['id_bayi']."/".$riwayat['id_periksa'];?>" class="btn btn-success" ><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" data-toggle="modal" data-target="#modalDelete<?php echo $riwayat['id_periksa']; ?>"><i class="fa fa-trash"></i></a>

                      </td>
                    </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>

      <!-- <=====================Modal register======================> -->

        <div class="modal fade" id="myModalRegister" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambahkan Data Periksa</h4>
              </div>

                <?php echo form_open('admin/bayi/tambah_data_kesehatan/'.$data['id_bayi']); ?>
                <div class="modal-body">
                      <label>Tanggal Periksa</label>
                      <input type="hidden" class="form-control" value="<?php echo $data['id_bayi']?>" required name="id_bayi">
                      <input type="date" class="form-control" value="" required name="tanggal_periksa">
                </div>
                <div class="modal-body">
                      <label>Tekanan Darah</label>
                      <input type="text" class="form-control" value="" name="tekanan_darah" required placeholder="Tekanan Darah Anak">
                </div>
                <div class="modal-body">
                      <label>Berat Badan</label>
                      <input type="number" class="form-control" value="" required name="berat_badan" placeholder="Berat Badan Anak (cm)" >
                </div>
                <div class="modal-body">
                      <label>Tinggi Badan</label>
                      <input type="number" class="form-control" value="" required name="tinggi_badan" placeholder="Tinggi Badan Anak (cm)" >
                </div>

              <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Submit" style="width:100px;"></input>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>


      <!-- <=====================Modal register======================> -->

      <!-- modal delete -->
      <?php foreach ($riwayat_kesehatan as $riwayat_kesehatan):

      ?>
        <div class="modal fade" id="modalDelete<?php echo $riwayat_kesehatan['id_periksa']?>" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="modal-body">
                          <p>Are you sure want to delete this item?</p>
                          <div class="pull-right">
                            <a href="<?php echo base_url()."admin/bayi/hapus_data_kesehatan/".$data['id_bayi']."/".$riwayat_kesehatan['id_periksa']?>" type="button" value="Remove" class="btn btn-danger">Remove </a>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                          <br>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      <?php endforeach; ?>


      <!-- modal delete -->

</section>


<?php
$this->load->view('template/js_start');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('template/footer_start');
?>
