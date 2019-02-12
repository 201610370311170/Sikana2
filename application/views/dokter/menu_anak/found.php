
  <!-- content -->
  <section class="content">
    <?php
      $pegawai = $this->session->userdata('pegawai');
    ?>
    <!-- <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/homeee.jpg);">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <h2 class="title">Data Pasien</h2>
          </div>
        </div>
      </div>
    </div> -->
    <div class="breadcumb--con">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('#')?>"><i class="fa fa-home"></i> Beranda</a></li>
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


            <?php
            //Age
            $today       = new DateTime();
            $birthdate   = new DateTime($data_anak[0]['Tgl_lahir']);
            $interval    = $today->diff($birthdate);
            $Umur = $interval->format('%y Tahun');

            // Date
            $date = $data_anak[0]['Tgl_lahir'];
            $newDate = date("d-m-Y", strtotime($date));


            ?>


            <div>
              <p>
                <span style="margin-right: 100px;">Nama </span>
                <span style="margin-right: 50px;">: </span>
                <?php echo $data_anak[0]['Nama'];?>
              </p>
              <p>
                <span style="margin-right: 117px;">NIK </span>
                <span style="margin-right: 50px;">: </span>
                <?php echo $data_anak[0]['id_bayi'];?>
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
                <span style="margin-right: 82px;">Kategori </span>
                <span style="margin-right: 50px;">: </span>
                <?php
                  if($Umur < 3)
                    echo "Bayi";
                  else
                    echo "Anak - anak";
                ?>
              </p>
              <p>
                <span style="margin-right: 44px;">Jenis Kelamin </span>
                <span style="margin-right: 50px;">: </span>
                <?php echo $data_anak[0]['Jenis_kelamin'];?>
              </p>
              <p>
                <span style="margin-right: 33px;">Kategori Pasien </span>
                <span style="margin-right: 50px;">: </span>
                <?php echo $data_anak[0]['Kategori'];?>
              </p>
              <p>
                <span style="margin-right: 73px;">Nama  Ibu </span>
                <span style="margin-right: 50px;">: </span>
                <?php $Nama_Ibu = $this->model_ibu->getNameIbu($data_anak[0]['NIK_Ibu']);?>
                <a href="<?php echo base_url('dokter/menu_ibu/periksa/found/'.$data_anak[0]['NIK_Ibu'])?>" style="color:#0033cc;  text-decoration: underline;"><?php echo $Nama_Ibu[0]['Nama'];?></a>
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
      <section class="dento-pricing-table-area mt-50 section-padding-0-100">
        <div style="height: 250px;" class="container">
          <!-- <a class="btn btn-secondary" href="<?php echo base_url('pegawai/menu_anak/periksa/tambah_daftar_riwayat/'.$data_anak[0]['id_bayi'])?>" style="margin-left:2px;"><i class="fa fa-plus">&nbsp Tambahkan Data</i></a> -->
          <div class="row" >
            <div class="col-12" >
              <div class="dento-price-table table-responsive">
                <table class="table table-borderless mb-0" >
                  <thead>
                    <tr>
                      <th scope="col">Tanggal Periksa</th>
                      <th scope="col">Keluhan</th>
                      <th scope="col">Diagnosa</th>
                      <th scope="col">Tekanan Darah</th>
                      <th scope="col">Berat Badan</th>
                      <th scope="col">Tinggi Badan</th>
                      <th scope="col">Dokter Periksa</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php foreach ($riwayat as $riwayat): {

                      //Konversi id menjadi Nama Dokter
                      $data = $this->model_pegawai->getDataName($riwayat['dokter_periksa']);


                      // echo "<pre>";
                      // print_r($riwayat);
                      // echo "</pre>";
                      // Date
                      $date = $riwayat['tanggal_periksa'];
                      $newDate = date("d-m-Y", strtotime($date));
                    }
                    ?>
                    <tr>
                      <td><?php echo $newDate;?></td>
                      <td><?php echo $riwayat['keluhan_sekarang'];?></td>
                      <td>
                        <?php
                          if($riwayat['Diagnosa'] != NULL){
                            echo $riwayat['Diagnosa'];
                          } else{ ?>
                            <a href="#" data-toggle="modal" data-target="#modal<?php echo $riwayat['id_periksa'];?>" data-whatever="@mdo"><i class="fa fa-plus-circle">&nbsp Tambahkan </i></a>
                        <?php } ?>
                      </td>

                      <td><?php echo $riwayat['tekanan_darah']. " mmhg";?></td>
                      <td><?php echo $riwayat['berat_badan']." Kg";?></td>
                      <td><?php echo $riwayat['tinggi_badan']." cm";?></td>
                      <td>
                        <?php
                        if($riwayat['dokter_periksa'] == 0){
                          echo "";
                        }else{
                          echo $data[0]['Nama'];
                        }?>
                      </td>
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

    <!-- modal  -->
    <div class="modal fade" id="modal<?php echo $id['id_periksa'] ?>" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <form action="<?php echo base_url('dokter/menu_anak/periksa/update_riwayat/'.$data_anak[0]['id_bayi'])?>" method="post">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambahkan Data</h4>
            </div>
              <div class="modal-body">
                    <label>Keluhan</label>
                    <textarea type="text" class="form-control" value="" required name="Keluhan_sekarang"></textarea>
              </div>
              <div class="modal-body">

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
            <form action="<?php echo base_url('dokter/menu_anak/periksa/cetak/'.$data_anak[0]['id_bayi'])?>" method="post">
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
                        <select name="Rumah_sakit" style="width:100%; height:30px; padding:2px 10px;" required>
                          <option value="" style="width:100%; height:50px; ">--Pilih Lokasi--</option>

                          <?php foreach ($rumah_sakit as $rumah_sakit) {?>
                            <option value="<?php echo $rumah_sakit['id_rs']?>">
                              <?php echo $rumah_sakit['id_rs']?>

                              <?php echo $rumah_sakit['Nama_RS']?>
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
