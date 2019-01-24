<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Rumah_sakit extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('model_rumahSakit');

    }

    function index(){

      $data['data'] = $this->model_rumahSakit->getData();

      $this->load->view('rs/index', $data);
    }

  }
?>
