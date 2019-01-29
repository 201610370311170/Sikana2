<?php

  class Periksa extends CI_Controller{
    function __construct(){
      parent::__construct();

      $this->load->model('model_ibu');
      if( !$this->session->userdata('pegawai'))
				redirect('pegawai');
    }

    function index(){
      $NIK['data'] = $this->model_ibu->getAllNIK();
      $this->load->view('pegawai/include/header');
      $this->load->view('pegawai/periksa',$NIK);
      $this->load->view('pegawai/include/footer');
    }

    function search(){
      $data_ibu   = $this->input->post('NIK_Ibu');
      $data       = $this->model_ibu->getAllData($data_ibu);

      if($this->db->get_where('ibu', array('NIK' => $this->input->post('NIK_Ibu', true)))->num_rows() > 0)
      {
        redirect('/pegawai/Hasil/Found/'.$data_ibu);
      }
      else{
        $this->session->set_flashdata('notfound','<div class="alert alert-danger" role="alert">
            <b>Maaf</b>, Data tidak ditemukan
          </div>');
        redirect('/pegawai/periksa');
      }
    }



  }


?>
