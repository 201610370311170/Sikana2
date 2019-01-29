<?php

  class Hasil extends CI_Controller{
    function __construct(){
      parent::__construct();

      $this->load->model('model_ibu');
      $this->load->model('model_kesehatan_ibu');

      if( !$this->session->userdata('pegawai'))
				redirect('pegawai');
    }

    function Found($NIK){
      $NIK = $this->uri->segment(4);

      $data['data_ibu'] = $this->model_ibu->getAllData($NIK);
      $data['riwayat']  = $this->model_kesehatan_ibu->getAllData($NIK);
      $data['id_data']  = $this->model_kesehatan_ibu->getID_Data();

      $this->load->view('pegawai/include/header');
      $this->load->view('pegawai/Found',$data);
      $this->load->view('pegawai/include/footer');
    }

    function update_riwayat($NIK){
      $Keluhan_sekarang     = $this->input->post('Keluhan_sekarang');
      $Obat                 = $this->input->post('Obat');
      $id_periksa           = $this->input->post('id_periksa');
      $dokter_periksa       = $this->input->post('dokter_periksa');

      $data	= array(
          'Keluhan_sekarang' 		 => $Keluhan_sekarang,
          'Obat'			           => $Obat,
          'dokter_periksa'       => $dokter_periksa,
      );
      $where = array('id_periksa' => $id_periksa);

      $res = $this->model_kesehatan_ibu->update_data('kesehatan_ibu',$data,$where);
      if($res>=1){
        // $this->session->set_flashdata('berhasil', '<div class="alert alert-success" role="alert">
        //   <b>Data Berhasil</b> ditambahkan
        // </div>');
        redirect('pegawai/Hasil/Found/'.$NIK);
      }


    }

  }

?>
