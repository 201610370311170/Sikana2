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
  <?php echo validation_errors();?>
  <div class="main" id="main">
  <div class="box" id="box">
    <div class="box-body">
        <h3>
          <i class="fa fa-user"></i> &nbsp <span>Pasien / Bayi </span>
        </h3>

        <!-- <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span> -->
    </div>
  </div>
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="box" id="box">
            <!-- /.card-header -->
          <div class="box-body">
            <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."> -->
            <div class="pull-right" style="margin-bottom:20px;margin-right:10px;">
              <a class="btn btn-success" data-toggle="modal" data-target="#myModalRegister"><i class="fa fa-plus">&nbspTambahkan Data</i></a>
            </div>
              <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th class="th-sm">No. Akta Lahir
                    </th>
                    <th class="th-sm">Nama
                    </th>
                    <th class="th-sm">Umur
                    </th>
                    <th class="th-sm">Jenis Kelamin
                    </th>
                    <th class="th-sm">Tanggal Lahir
                    </th>
                    <th class="th-sm">NIK Ibu
                    </th>
                    <th class="th-sm">
                    </th>
                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($records as $rec):

                    //Age
                    $today       = new DateTime();
                    $birthdate   = new DateTime($rec['Tgl_lahir']);
                    $interval    = $today->diff($birthdate);
                    $rec['Umur'] = $interval->format('%y Tahun');

                    //date
                    $date = $rec['Tgl_lahir'];
                    $newDate = date("d-m-Y", strtotime($date));
                    ?>

                    <tr>
                      <td><?php echo $rec['id_bayi']?></td>
                      <td><?php echo $rec['Nama']?></td>
                      <td><?php echo $rec['Umur']?></td>
                      <td><?php echo $rec['Jenis_kelamin']?></td>
                      <td><?php echo $newDate?></td>
                      <td><?php echo $rec['NIK_Ibu']?></td>
                      <td>
                        <a href="<?php echo base_url().'bayi/edit/'.$rec['id_bayi']?>" class="btn btn-success" ><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" data-toggle="modal" data-target="#modalDelete<?php echo $rec['id_bayi']?>"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  <?php endforeach;?>
                </tbody>
              </table>

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
              <h4 class="modal-title">Tambahkan Data</h4>
            </div>

              <?php echo form_open('bayi/register') ; ?>
              <div class="modal-body">
                    <label>No. Akta Lahir</label>
                    <input type="text" class="form-control" value="" required name="id_bayi" placeholder="No.Akta Lahir" maxlength="16">
              </div>
              <div class="modal-body">
                    <label>Nama</label>
                    <input type="text" class="form-control" value="" name="Nama" required placeholder="Nama Bayi">
              </div>
              <div class="modal-body">
                <label>Jenis Kelamin</label>
                <select name="Jenis_kelamin" required style="width:100%; height:30px; padding:2px 10px;" >
                  <option value="" style="width:100%; height:50px; ">--Pilih Jenis Kelamin--</option>
                  <option value="Laki-laki">Laki Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="modal-body">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" value="" required placeholder="Tanggal Lahir" name="Tanggal_lahir">
              </div>
              <div class="modal-body">
                    <label>NIK Ibu</label>
                    <select name="NIK_Ibu" style="width:100%; height:30px; padding:2px 10px;" required>
                      <option value="" style="width:100%; height:50px; ">--NIK Ibu--</option>

                      <?php foreach ($ibu as $ibu) {?>
                        <option value="<?php echo $ibu['NIK']?>">
                          <?php echo $ibu['NIK']?>

                          <?php echo $ibu['Nama']?>
                        </option>

                      <?php }?>



                    </select>
              </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-success" value="Submit" style="width:100px;"></input>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>
      <!-- <=====================Modal register======================> -->


      <!-- MODAL DELETE -->
      <?php foreach ($records as $rec):

      ?>
      <div class="modal fade" id="modalDelete<?php echo $rec['id_bayi']?>" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <div class="modal-body">
                        <p>Are you sure want to delete this item?</p>
                        <div class="pull-right">
                          <a href="<?php echo base_url().'bayi/remove/'.$rec['id_bayi'] ?>" type="button" value="Remove" class="btn btn-danger">Remove </a>
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
      <!-- MODAL DELETE -->


</section>
<!-- /.content -->



<?php
$this->load->view('template/js_start');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('template/footer_start');
?>
