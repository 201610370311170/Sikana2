<?php

  class Hasil extends CI_Controller{
    function __construct(){
      parent::__construct();

      $this->load->model('model_ibu');
      $this->load->model('model_kesehatan_ibu');

      if( !$this->session->userdata('pegawai'))
				redirect('pegawai');
    }

    function NotFound(){
      $NIK['data'] = $this->model_ibu->getAllNIK();
      $this->load->view('pegawai/NoDataFound',$NIK);
    }

    function Found(){
      $NIK = $this->uri->segment(4);

      $data['data_ibu'] = $this->model_ibu->getAllData($NIK);
      $data['riwayat']  = $this->model_kesehatan_ibu->getAllData($NIK);
      //
      // echo "<pre>";
      // print_r($data);
      // echo "</pre>";

      $this->load->view('pegawai/Found',$data);
    }

  }

?>
