<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
			if( !$this->session->userdata('pegawai'))
				redirect('pegawai');
	}

	public function index()
	{
		$this->load->view('pegawai/dashboard');
	}

}
