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
          <i class="fa fa-building"></i> &nbsp <span>Pasien / Bayi </span>
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
                    <th class="th-sm">ID Rumah Sakit
                    </th>
                    <th class="th-sm">Nama Rumah Sakit
                    </th>
                    <th class="th-sm">Alamat
                    </th>
                    <th class="th-sm">
                    </th>
                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($data as $rs):?>

                    <tr>
                      <td><?php echo $rs['id_rs']?></td>
                      <td><?php echo $rs['Nama_RS']?></td>
                      <td><?php echo $rs['Alamat_RS']?></td>
                      <td>
                        <a href="<?php echo base_url().'bayi/edit/'.$rs['id_rs']?>" class="btn btn-success" ><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" data-toggle="modal" data-target="#modalDelete<?php echo $rs['id_rs']?>"><i class="fa fa-trash"></i></a>
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

              <?php echo form_open('Rumah_sakit/register') ; ?>
              <div class="modal-body">
                    <label>ID Rumah Sakit</label>
                    <input type="text" class="form-control" value="" required name="id_rs" placeholder="ID Rumah Sakit" maxlength="16">
              </div>
              <div class="modal-body">
                    <label>Nama RS</label>
                    <input type="text" class="form-control" value="" name="Nama_RS" required placeholder="Nama Rumah Sakit">
              </div>
              <div class="modal-body">
                    <label>Alamat</label>
                    <input type="text" class="form-control" value="" name="Alamat_RS" required placeholder="Alamat Rumah Sakit">
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
      <?php foreach ($data as $rs):?>
        <div class="modal fade" id="modalDelete<?php echo $rs['id_rs']?>" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="modal-body">
                          <p>Are you sure want to delete this item?</p>
                          <div class="pull-right">
                            <a href="<?php echo base_url().'pegawai/remove/'.$rs['id_rs'] ?>" type="button" value="Remove" class="btn btn-danger">Remove</a>
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
