<?php

  class Cari extends CI_Controller {
    function __construct(){
      parent::__construct();

      $this->load->model('model_ibu');
      $this->load->model('model_bayi');
      $this->load->model('model_search');
      $this->load->model('model_kesehatan_ibu');
      $this->load->model('model_kesehatan_anak');

      if( !$this->session->userdata('pegawai'))
				redirect('pegawai');
    }


    function index(){
      $this->load->view('dokter/include/header');
      $this->load->view('dokter/cari');
      $this->load->view('dokter/include/footer');
    }

    function cari_data(){
      $NIK  = $this->input->post('NIK');

      //SEARCH DI DATA IBU
      if($this->db->get_where('ibu', array('NIK' => $NIK))->num_rows()){
        $data_ibu       = $this->model_ibu->getAllData($NIK);
        $data           = array(
          'NIK'             => $data_ibu[0]['NIK'],
          'No_pasien'       => $data_ibu[0]['No_pasien'],
          'Nama'            => $data_ibu[0]['Nama'],
          'Alamat'          => $data_ibu[0]['Alamat'],
          'Nomor_Telefon'   => $data_ibu[0]['Nomor_Telefon'],
          'Tgl_lahir'       => $data_ibu[0]['Tgl_lahir'],
        );
        redirect('/dokter/menu_ibu/periksa/found/'.$data_ibu[0]['NIK']);
      }

      // SEARCH DI DATA ANAK
      else if($this->db->get_where('bayi', array('id_bayi' => $NIK))->num_rows()){
        $data_anak       = $this->model_bayi->getAllData($NIK);
        $data           = array(
          'id_bayi'         => $data_anak[0]['id_bayi'],
          'Nama'            => $data_anak[0]['Nama'],
          'Jenis_kelamin'   => $data_anak[0]['Jenis_kelamin'],
          'Tgl_lahir'       => $data_anak[0]['Tgl_lahir'],
          'NIK_Ibu'         => $data_anak[0]['NIK_Ibu'],
        );
        redirect('/dokter/menu_anak/periksa/found/'.$data_anak[0]['id_bayi']);
      }
      // TIDAK ADA DI DATABASE;
      else{
        $this->session->set_flashdata('notfound','<div class="alert alert-danger" role="alert">
            <b>Maaf</b>, Data tidak ditemukan
          </div>');
        redirect('/pegawai/cari');
      }

    }

  }


?>
