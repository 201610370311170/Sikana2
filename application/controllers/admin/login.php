<?php

  class login extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->model('Admin');
      if($this->session->userdata('admin'))
        redirect('admin/dashboard');
    }

    function index(){
      $this->load->view('admin/login');
    }

    function verify(){

      $this->load->model('admin');
      $check = $this->admin->validate();

      if($check){
        $this->session->set_userdata('admin','1');
        redirect('admin/dashboard');
      }
      else{
        $this->session->set_flashdata('warning', 'Masuk gagal. Silahkan coba lagi');
        redirect('admin');
      }

    }


  }

?>
