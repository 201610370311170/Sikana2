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
      $data = $this->model_pegawai->getAllData($NIP);

      // $NIP      = $data[0]['NIP'];
      // $Nama     = $data[0]['Nama'];
      // $Jabatan  = $data[0]['Jabatan'];
      // $Alamat   = $data[0]['Alamat'];


      $dataPegawai = array(
        'NIP' 		      => $data[0]['NIP'],
        'Nama'					=> $data[0]['Nama'],
        'Alamat' 				=> $data[0]['Alamat'],
        'Jabatan'       => $data[0]['Jabatan']
      );

      // echo "<pre>";
      // print_r($dataPegawai);
      // var_dump($this->session->userdata('pegawai'));
      // $post_array = $this->session->userdata('pegawai');
      // echo $post_array['NIP'];

      if($check){
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
