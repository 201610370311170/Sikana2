<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Sikana extends CI_Controller {

    function __construct(){
  		parent::__construct();
      if($this->session->userdata('pegawai'))
        redirect('pegawai/dashboard');
  	}


    function index(){

      $this->load->view('index');
    }

    function tutorial(){

      $this->load->view('front/front_tutorial');
    }

    function login(){
      $this->load->view('front/front_login');
    }


  }

?>
