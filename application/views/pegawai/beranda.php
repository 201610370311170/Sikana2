<?php
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<!-- page loader -->
<link href="<?php echo base_url('assets/css/page_loader.css') ?>" rel="stylesheet" type="text/css" />
<!-- CSS Data TABLE -->
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/1.5.4/css/buttons.jqueryui.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/select/1.2.7/css/select.jqueryui.min.css" rel="stylesheet" type="text/css" />
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->


<!-- Main content -->
<section class="content">
  <div class="main" id="main">
  <div class="box" id="box">
    <div class="box-body">
        <h3>
          <i class="fa fa-user-md"></i> &nbsp <span>Pegawai </span>
        </h3>

        <!-- <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span> -->
    </div>
  </div>
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        <div class="box">
          <!-- <div class="box" style="background-color:white"> -->

            <!-- /.card-header -->
            <div class="box-body">
            <div class="pull-right" style="margin-bottom:20px;">
              <a class="btn btn-success" data-toggle="modal" data-target="#myModalRegister"><i class="fa fa-plus">&nbspTambahkan Data</i></a>
            </div>
              <table id="dtBasicExample" class="table table-bordered table-striped" style="border-top:none">
                <thead>
                <tr>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Alamat</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data as $rec):
                    $NIP     = $rec['NIP'];
                    $Nama    = $rec['Nama'];
                    $Jabatan = $rec['Jabatan'];
                    $Alamat  = $rec['Alamat'];
                  ?>
                  <tr>
                    <td><?php echo $NIP ?></td>
                    <td><?php echo $Nama ?></td>
                    <td><?php echo $Jabatan ?></td>
                    <td><?php echo $Alamat ?></td>
                    <td>
                      <!-- <button type="button" class="btn btn-link"><i class="fa fa-eye"></i></button> -->
                      <a href="<?php echo base_url().'pegawai/edit/'.$NIP?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                      <a class="btn btn-danger" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach;?>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

        <!-- Modal register-->
        <div class="modal fade" id="myModalRegister" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambahkan Data</h4>
              </div>
              <form role="form" id="register" method="post" action="<?php echo base_url('pegawai/register/') ?>">
                <div class="modal-body">
                      <label>NIP</label>
                      <input type="text" class="form-control" required name="NIP" placeholder="No.Induk Pegawai" >
                </div>
                <br>
                <div class="modal-body">
                      <label>Nama</label>
                      <input type="text" class="form-control" required name="Nama" placeholder="Nama Pegawai" >
                </div>
                <br>
                <div class="modal-body">
                      <label>Password</label>
                      <input type="password" class="form-control" required name="Password" placeholder="Password" >
                </div>
                <br>
                <div class="modal-body">
                      <label>Jabatan</label>
                      <input type="text" class="form-control" required name="Jabatan" placeholder="Jabatan" >
                </div>
                <br>
                <div class="modal-body">
                      <label>Alamat</label>
                      <input type="text" class="form-control" required name="Alamat" placeholder="Alamat" >
                </div>
                <br>
              <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Submit" style="width:100px;"></input>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        <!-- modal register -->

        <!-- Modal delete-->
        <?php foreach ($data as $rec):
            $NIP     = $rec['NIP'];
            $Nama    = $rec['Nama'];
            $Jabatan = $rec['Jabatan'];
            $Alamat  = $rec['Alamat'];


            ?>


            <div class="modal fade" id="modalDelete" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="modal-body">
                              <p>Are you sure want to delete this item?</p>
                              <div class="pull-right">
                                <a href="<?php echo base_url().'pegawai/remove/'.$NIP ?>" type="button" value="Remove" class="btn btn-danger">Remove</a>
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


      </div>


</section><!-- /.content -->


<!-- Delete Confirmation -->
<script>
function confirmDelete(url) {
    if (confirm("Are you sure you want to delete this?")) {
        window.location.replace(url);
    } else {
        false;
    }
}
</script>


<?php
$this->load->view('template/js_start');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('template/footer_start');
?>
