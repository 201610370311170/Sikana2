
  <!-- content -->
  <section class="content">
    <?php
      $pegawai = $this->session->userdata('pegawai');
    ?>
    <div class="breadcumb--con">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('#');?>"><i class="fa fa-home"></i> Beranda</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('pegawai/cari');?>">Cari</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Pasien</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->
    <!-- card info -->
    <div class="main" id="main">
    <div class="box" id="box">
      <div class="box-body" style="margin-top:50px; margin-left: 200px; background-color:#f0f0f5; padding: 50px; width: 40%;border-radius: 10px;">
          <h3 style="margin-bottom:50px; align:center">
            <i class="fa fa-user"></i> &nbsp <span >Data Pasien</span>
          </h3>

            <?php foreach ($data_ibu as $data_ibu) {


            //Age
            $today       = new DateTime();
            $birthdate   = new DateTime($data_ibu['Tgl_lahir']);
            $interval    = $today->diff($birthdate);
            $Umur = $interval->format('%y Tahun');

            // Date
            $date = $data_ibu['Tgl_lahir'];
            $newDate = date("d-m-Y", strtotime($date));


            ?>


            <div>
              <p>
                <span style="margin-right: 100px;">Nama </span>
                <span style="margin-right: 50px;">: </span>
                <?php echo $data_ibu['Nama'];?>
              </p>
              <p>
                <span style="margin-right: 117px;">NIK </span>
                <span style="margin-right: 50px;">: </span>
                <?php echo $data_ibu['NIK'];?>
              </p>
              <p>
                <span style="margin-right: 46px;">Tanggal Lahir </span>
                <span style="margin-right: 50px;">: </span>
                <?php echo $newDate;?>
              </p>
              <p>
                <span style="margin-right: 101px;">Umur </span>
                <span style="margin-right: 50px;">: </span>
                <?php echo $Umur;?>
              </p>
              <p>
                <span style="margin-right: 32px;">Kategori Pasien </span>
                <span style="margin-right: 50px;">: </span>
                <?php echo $data_ibu['Kategori'];?>
              </p>
              <p>
                <span style="margin-right: 92px;">Alamat </span>
                <span style="margin-right: 50px;">: </span>
                <?php echo $data_ibu['Alamat'];?>
              </p>
              <p>
                <span style="margin-right: 36px;">No.Handphone </span>
                <span style="margin-right: 50px;">: </span>
                <?php echo $data_ibu['Nomor_Telefon'];?>
              </p>
              <br><br>
              <button class="btn btn-outline-primary btn-md" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <i class="fa fa-book">&nbsp Lihat Riwayat Pemeriksaan</i>
              </button>
                <a href="#" class="btn btn-outline-dark" data-toggle="modal" data-target="#modalRujukan" data-whatever="@mdo"><i class="fa fa-plus-circle">&nbsp Buat Surat Rujukan </i></a>

              </div>
          </div>
        </div>
      </div>
      <br><br>
    <?php   }  ?>
    <!-- tabel -->
    <div class="clearfix visible-sm-block"></div>

    <div class="collapse" id="collapseExample">
      <section class="dentist-area section-padding-100-0">
        <div class="container" style="margin-bottom:250px;">
          <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
              <div class="section-heading text-center">
                <h2>Riwayat Pemeriksaan Pasien</h2>

                <div class="line"></div>
              </div>
            </div>
          </div>

    <!-- ***** Dento Pricing Table Area Start ***** -->
      <section class="dento-pricing-table-area mt-50 section-padding-0-100" >
        <div style="margin-bottom:100px; max-height: 250px;" class="container">
          <a class="btn btn-secondary" href="<?php echo base_url('pegawai/menu_ibu/periksa/tambah_daftar_riwayat/'.$data_ibu['NIK'])?>" style="margin-left:2px;"><i class="fa fa-plus">&nbsp Tambahkan Data</i></a>
          <div class="row">
            <div class="col-12" style="overflow-y: scroll; height: 500px">
              <div class="dento-price-table table-responsive">
                <table class="table table-borderless mb-0" style="">
                  <thead>
                    <tr>
                      <th scope="col">Tanggal Periksa</th>
                      <th scope="col">Keluhan Sekarang</th>
                      <th scope="col">Obat</th>
                      <th scope="col">Dokter Periksa</th>
                      <th scope="col">Detail</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php foreach ($riwayat as $riwayat): {

                      //Konversi id menjadi Nama Dokter
                      $data = $this->model_pegawai->getDataName($riwayat['dokter_periksa']);

                      // Date
                      $date = $riwayat['Tanggal_periksa'];
                      $newDate = date("d-m-Y", strtotime($date));
                    }
                    ?>
                    <tr>
                      <th><?php echo $newDate;?></th>


                      <td>
                        <?php
                          if($riwayat['Keluhan_sekarang'] != NULL){
                            echo $riwayat['Keluhan_sekarang'];
                          } else{ ?>
                            <a href="#" data-toggle="modal" data-target="#modal<?php echo $riwayat['id_periksa'];?>" data-whatever="@mdo"><i class="fa fa-plus-circle">&nbsp Tambahkan </i></a>
                        <?php } ?>
                      </td>

                      <td><?php echo $riwayat['Obat'];?></td>
                      <td>
                        <?php
                        if($riwayat['dokter_periksa'] == 0){
                          echo "";
                        }else{
                          echo $data[0]['Nama'];
                        }?>
                      </td>
                      <td><a href="<?php echo base_url('pegawai/menu_ibu/Periksa/view_details/').$riwayat['id_periksa']?>">Lihat Detail</td>
                    </tr>
                  </tbody>
                <?php endforeach;?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ***** Dento Pricing Table Area End ***** -->
      </div>
    </div>
  </div>
</section>
</div>

    <?php foreach ($id_data as $id): ?>

    <!-- modal tambah -->
    <div class="modal fade" id="modal<?php echo $id['id_periksa'] ?>" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <form action="<?php echo base_url('pegawai/menu_ibu/periksa/update_riwayat/'.$data_ibu['NIK'])?>" method="post">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambahkan Data</h4>
            </div>
              <div class="modal-body">
                    <label>Keluhan</label>
                    <textarea type="text" class="form-control" value="" required name="Keluhan_sekarang"></textarea>
              </div>
              <div class="modal-body">
                    <label>Obat / Resep</label>
                    <input type="text" class="form-control" value="" name="Obat" required ></input>
                    <input type="hidden" class="form-control" value="<?php echo $id['id_periksa']?>" name="id_periksa" required ></input>
                    <input type="hidden" class="form-control" value="<?php echo $pegawai['NIP'];?>" name="dokter_periksa" required ></input>

              <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Submit" style="width:100px;"></input>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
              </div>
            </div>
        </form>
      </div>
  </div>
  <?php endforeach; ?>


  <!-- modal rujukan -->

      <?php foreach ($id_data as $id): ?>

      <!-- modal tambah -->
      <div class="modal fade" id="modalRujukan" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <form action="<?php echo base_url('pegawai/menu_ibu/periksa/cetak/'.$data_ibu['NIK'])?>" method="post">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Buat Surat Rujukan Rumah Sakit</h4>
              </div>
                <div class="modal-body">
                      <label>Keluhan</label>
                      <textarea type="text" class="form-control" value="" required name="Keluhan_sekarang"></textarea>
                </div>
                <div class="modal-body">
                      <label>Diagnosa</label>
                      <input type="hidden" class="form-control" value="<?php echo $id['id_periksa']?>" name="id_periksa" required ></input>
                      <input type="text" class="form-control" value="" name="diagnosa" required ></input>

                <div class="modal-body">
                      <label>Rumah Sakit</label>
                      <select name="Rumah_sakit" class="form-control" style="width:100%; height:30px; padding:2px 20px;" required>
                        <option value="" style="width:100%; height:50px; ">--Pilih Lokasi--</option>

                        <?php foreach ($rumah_sakit as $rumah_sakit) {?>
                          <option value="<?php echo $rumah_sakit['id_rs']?>">
                            <?php echo $rumah_sakit['id_rs']."\t";?>

                            <?php echo $rumah_sakit['Nama_RS'];?>
                          </option>

                        <?php }?>
                      </select>
                </div>

                <div class="modal-footer">
                  <input type="submit" class="btn btn-primary" value="Submit" style="width:100px;"></input>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>
              </div>
          </form>
        </div>
    </div>
    <?php endforeach; ?>



</section>
