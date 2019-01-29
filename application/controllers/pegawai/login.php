<?php

  class login extends CI_Controller{

    function __construct(){
      parent::__construct();

      if($this->session->userdata('pegawai'))
        redirect('pegawai/dashboard');
    }

    function index(){

      $this->load->view('pegawai/login');
    }

    function verify(){
      $NIP = addslashes($this->input->post('NIP'));

      $this->load->model('model_pegawai');
      $check = $this->model_pegawai->validate();

      if($check){

        $data = $this->model_pegawai->getAllData($NIP);


        $dataPegawai = array(
          'NIP' 		      => $data[0]['NIP'],
          'Nama'					=> $data[0]['Nama'],
          'Alamat' 				=> $data[0]['Alamat'],
          'Jabatan'       => $data[0]['Jabatan']
        );
        
        $this->session->set_userdata('pegawai',$dataPegawai);
        redirect('pegawai/dashboard');
      }
      else{
        redirect('pegawai');
      }

    }

    function logout(){
      $this->session->unset_userdata('pegawai');
      $this->session->sess_destroy();
      redirect('pegawai');
    }


  }

?>
