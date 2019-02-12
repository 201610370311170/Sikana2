<?php

  class login extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->model('model_pegawai');

      if($this->session->userdata('admin'))
        redirect('admin/dashboard');
    }

    function index(){
      $this->load->view('login');
    }

    function verify(){

      $check = $this->model_pegawai->validate();
      print_r($check);

      $array = json_decode(json_encode($check), True);


      if($array['Jabatan'] == 'Admin'){
        $this->session->set_userdata('admin','1');
        redirect('admin/dashboard');
      }
      else if($array['Jabatan'] == 'Bidan'){

        $NIP = addslashes($this->input->post('NIP'));
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
      else if( $array['Jabatan'] == 'Dokter' ){

                $NIP = addslashes($this->input->post('NIP'));
                $data = $this->model_pegawai->getAllData($NIP);
                $dataPegawai = array(
                  'NIP' 		      => $data[0]['NIP'],
                  'Nama'					=> $data[0]['Nama'],
                  'Alamat' 				=> $data[0]['Alamat'],
                  'Jabatan'       => $data[0]['Jabatan']
                );

                $this->session->set_userdata('pegawai',$dataPegawai);
                redirect('dokter/dashboard');
      }
      else{
        $this->session->set_flashdata('warning', 'Masuk gagal. Silahkan coba lagi');
        redirect('login');
      }

    }


  }

?>
