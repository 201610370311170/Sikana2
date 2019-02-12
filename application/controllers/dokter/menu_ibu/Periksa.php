<?php

  class Periksa extends CI_Controller{
    function __construct(){
      parent::__construct();

      $this->load->model('model_ibu');
      $this->load->model('model_kesehatan_ibu');
      $this->load->model('model_rumahSakit');
      $this->load->model('model_pegawai');
      if( !$this->session->userdata('pegawai'))
				redirect('pegawai');
    }

    function index(){
      $NIK['data'] = $this->model_ibu->getAllNIK();
      $this->load->view('dokter/include/header');
      $this->load->view('dokter/menu_ibu/periksa',$NIK);
      $this->load->view('dokter/include/footer');
    }

    function register(){
      echo "Ini halaman register";
    }

    function found($NIK){
      $NIK = $this->uri->segment(5);

      $data['data_ibu']     = $this->model_ibu->getAllData($NIK);
      $data['riwayat']      = $this->model_kesehatan_ibu->getAllData($NIK);
      $data['id_data']      = $this->model_kesehatan_ibu->getID_Data();
      $data['rumah_sakit']  = $this->model_rumahSakit->getData();


      //Get Nama Dokter
      // $riwayat      = $this->model_kesehatan_ibu->getAllData($NIK);

      $this->load->view('dokter/include/header');
      $this->load->view('dokter/menu_ibu/found',$data);
      $this->load->view('dokter/include/footer');
    }

    function tambah_daftar_riwayat($NIK_Ibu){
      $data['data_ibu'] = $NIK_Ibu;

      $this->load->view('dokter/include/header');
      $this->load->view('dokter/menu_ibu/tambah_daftar_riwayat',$data);
      $this->load->view('dokter/include/footer');
    }

    function tambah_daftar(){


      $Tanggal_periksa          = $this->input->post('Tanggal_periksa');
      $Diagnosa                 = $this->input->post('Diagnosa');
      $NIK_Ibu                  = $this->input->post('NIK_Ibu');
      $dokter_periksa           = $this->input->post('dokter_periksa');

      $data	= array(
          'Tanggal_periksa'      => $Tanggal_periksa,
          'Diagnosa'             => $Diagnosa,
          'NIK_Ibu'              => $NIK_Ibu,
          'dokter_periksa'       => $dokter_periksa,
      );

      $this->model_kesehatan_ibu->register($data);

      redirect('dokter/menu_ibu/periksa/found/'.$NIK_Ibu);
    }


    function update_riwayat($NIK){


      $Diagnosa             = $this->input->post('Diagnosa');
      $id_periksa           = $this->input->post('id_periksa');
      $dokter_periksa       = $this->input->post('dokter_periksa');

      $data	= array(
          'Diagnosa' 		         => $Diagnosa,
          'dokter_periksa'       => $dokter_periksa,
      );
      $where = array('id_periksa' => $id_periksa);

      $res = $this->model_kesehatan_ibu->update_data('kesehatan_ibu',$data,$where);
      if($res>=1){
        $this->session->set_flashdata('updated','<div class="alert alert-success" role="alert" style="width:40%;margin-left: 200px;">
              Data telah ditambahkan
        </div>)');
        redirect('dokter/menu_ibu/Periksa/view_details/'.$id_periksa);

      }
    }




    function cetak(){


      $NIK_Ibu        = $this->uri->segment(5);
      $Dokter         = $this->session->userdata('pegawai');
      $Nama_Dokter    = $Dokter['Nama'];

      $Keluhan_sekarang   = $this->input->post('Keluhan_sekarang');
      $diagnosa           = $this->input->post('diagnosa');
      $Rumah_sakit        = $this->input->post('Rumah_sakit');
      $NIK_Ibu            = $this->model_ibu->getAllData($NIK_Ibu);
      $NameRS             = $this->model_rumahSakit->getNameRS($Rumah_sakit);


      $data	= array(
          'NIK_Ibu'               => $NIK_Ibu,
          'Keluhan_sekarang' 		  => $Keluhan_sekarang,
          'diagnosa'	            => $diagnosa,
          'Rumah_sakit'           => $NameRS,
          'Nama_dokter'           => $Nama_Dokter,
      );

      $this->load->view('dokter/menu_ibu/surat_rujukan',$data);

    }

    function view_details($id){

      $data['riwayat']                    = $this->model_kesehatan_ibu->getRiwayatData($id);
      $data['data_dokter']                = $this->model_pegawai->getDataName($data['riwayat'][0]['dokter_periksa']);
      $this->load->view('dokter/include/header');
      $this->load->view('dokter/menu_ibu/detail_riwayat',$data);
      $this->load->view('dokter/include/footer');


    }


  }


?>
