<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Sikana extends CI_Controller {

    function __construct(){
  		parent::__construct();
      if($this->session->userdata('pegawai'))
        redirect('pegawai/dashboard');
  	}


    function index(){
      $this->load->view('pegawai/include/header');
      $this->load->view('index');
      $this->load->view('pegawai/include/footer');
    }

    function tutorial(){
      $this->load->view('pegawai/include/header');
      $this->load->view('front/front_tutorial');
      $this->load->view('pegawai/include/footer');
    }

    function login(){
      $this->load->view('pegawai/include/header');
      $this->load->view('front/front_login');
      $this->load->view('pegawai/include/footer');
    }


  }

?>
