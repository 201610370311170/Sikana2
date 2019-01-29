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
  <?php echo $this->session->flashdata('success');?>
  <div class="main" id="main">
    <div class="main" id="main">
      <div class="main" id="main">
        <nav class="breadcrumb " style="background-color:white">
          <h5>
            <a class="breadcrumb-item" href="<?php echo base_url('admin/dashboard')?>">Home /</a>
            <span class="breadcrumb-item active">Data Ibu</span>
          </h5>
        </nav>
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="box" id="box">
            <!-- /.card-header -->
          <div class="box-body">
            <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."> -->

            <div style="overflow-x:auto;">
              <div class="pull-right" style="margin-bottom:20px;margin-right:10px;">
                <a class="btn btn-success" data-toggle="modal" data-target="#myModalRegister"><i class="fa fa-plus">&nbspTambahkan Data</i></a>
              </div>
              <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%" style="overflow-x:auto;">
                <thead>
                  <tr>
                    <th class="th-sm">No. Pasien
                    </th>
                    <th class="th-sm">Nama
                    </th>
                    <th class="th-sm">NIK
                    </th>
                    <th class="th-sm">Tanggal Lahir
                    </th>
                    <th class="th-sm">Umur
                    </th>
                    <th class="th-sm">Alamat
                    </th>
                    <th class="th-sm">No HP
                    </th>
                    <th class="th-sm">Kesehatan
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

                    // Date
                    $date = $rec['Tgl_lahir'];
                    $newDate = date("d-m-Y", strtotime($date));

                    ?>
                    <tr>
                      <td><?php echo $rec['No_pasien']?></td>
                      <td><?php echo $rec['Nama']?></td>
                      <td><?php echo $rec['NIK']?></td>
                      <td><?php echo $newDate?></td>
                      <td><?php echo $rec['Umur'];?></td>
                      <td><?php echo $rec['Alamat']?></td>
                      <td><?php echo $rec['Nomor_Telefon']?></td>
                      <td>
                        <a href="<?php echo base_url('admin/ibu/kesehatan/').$rec['NIK'];?>" class="btn btn-light" ><i class="fa fa-book">&nbspLihat Kesehatan</i></a>
                      </td>
                      <td>
                        <!-- <button type="button" class="btn btn-link"><i class="fa fa-eye"></i></button> -->
                        <a href="<?php echo base_url().'admin/ibu/edit/'.$rec['NIK']?>" class="btn btn-success" ><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" data-toggle="modal" data-target="#modalDelete<?php echo $rec['NIK']?>"><i class="fa fa-trash"></i></a>
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
          <h4 class="modal-title">Tambahkan Data</h4>
        </div>

          <?php echo form_open('admin/ibu/register'); ?>
          <div class="modal-body">
                <label>NIK</label>
                <input type="text" class="form-control" value="" required name="NIK" placeholder="No.Induk KTP" maxlength="16">
          </div>
          <div class="modal-body">
                <label>Nama</label>
                <input type="text" class="form-control" value="" name="Nama" required placeholder="Nama Pasien">
          </div>
          <div class="modal-body">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" value="" required name="Tanggal_lahir" placeholder="Alamat Pasien" >
          </div>
          <div class="modal-body">
                <label>Alamat</label>
                <input type="text" class="form-control" value="" required name="Alamat" placeholder="Alamat Pasien" >
          </div>
          <div class="modal-body">
                <label>Nomor HP</label>
                <input type="text" class="form-control" value="" maxlength="12" required  size=12 name="Nomor_Telefon" placeholder="No HP" >
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
<?php foreach ($records as $rec):
    $No_pasien      = $rec['No_pasien'];
    $Nama           = $rec['Nama'];
    $NIK            = $rec['NIK'];
    $Alamat         = $rec['Alamat'];
    $Nomor_Telefon  = $rec['Nomor_Telefon'];
?>
<div class="modal fade" id="modalDelete<?php echo $NIK?>" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body">
                  <p>Are you sure want to delete this item?</p>
                  <div class="pull-right">
                    <a href="<?php echo base_url().'admin/ibu/remove/'.$NIK ?>" type="button" value="Remove" class="btn btn-danger">Remove </a>
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

</section><!-- /.content -->


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
