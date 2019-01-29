<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('model_ibu');
		$this->load->model('model_pegawai');
		$this->load->model('model_bayi');
		$this->load->model('model_rumahSakit');

			if( !$this->session->userdata('admin'))
				redirect('admin');
	}

	public function index()
	{
		$data['jumlahDataIbu'] 			= $this->model_ibu->countData();
		$data['jumlahDataBayi'] 		= $this->model_bayi->countData();
		$data['jumlahDataPegawai'] 	= $this->model_pegawai->countData();
		$data['jumlahDataRS'] 			= $this->model_rumahSakit->countData();


		$this->load->view('admin/dashboard',$data);
	}

}
