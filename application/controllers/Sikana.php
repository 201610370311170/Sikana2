<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Sikana extends CI_Controller {

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
