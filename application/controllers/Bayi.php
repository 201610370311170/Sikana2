<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bayi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_ibu');
		$this->load->model('model_pegawai');
		$this->load->model('model_bayi');
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		// load form_validation library
		$this->load->library('form_validation');

	}


	public function index()
	{

		$data['ibu']		 = $this->model_ibu->getData();
		$data['records'] = $this->model_bayi->getData();
		$this->load->view('pasien/bayi/index',$data);
	}


	public function register(){
		// FORM VALIDATION


			$data_form = $this->input->POST(NULL,TRUE);
			if($data_form){
				$id_bayi				= $data_form['id_bayi'];
				$Nama 					= $data_form['Nama'];
				$Jenis_kelamin	= $data_form['Jenis_kelamin'];
				$Tanggal_lahir	= $data_form['Tanggal_lahir'];
				$NIK_Ibu				= $data_form['NIK_Ibu'];
				$datas					= array(
													'id_bayi' 			=> $id_bayi,
													'Nama'					=> $Nama,
													'Jenis_kelamin'	=> $Jenis_kelamin,
													'Tgl_lahir'			=> $Tanggal_lahir,
													'NIK_Ibu'				=> $NIK_Ibu,
				);
				$this->model_bayi->register($datas);
				redirect('/bayi');
			}
	}

	public function remove(){
		// echo $this->uri->segment(3);

		$id = $this->uri->segment(3);
		$this->load->model('model_bayi');
		$this->model_bayi->delete_data('bayi',$id);
		redirect('/bayi');
	}

	public function edit($id_bayi){
			$this->load->model('model_ibu');
			// $pegawai = $this->model_pegawai->getData();
			$bayi 			= $this->model_bayi->getSingleData("where id_bayi = '$id_bayi'");
			$ibu				= $this->model_ibu->getData();

			$d_bayi = array(
						'id_bayi'				=> $bayi[0]['id_bayi'],
						'Nama'					=> $bayi[0]['Nama'],
						'Jenis_kelamin' => $bayi[0]['Jenis_kelamin'],
						'Tgl_lahir'			=> $bayi[0]['Tgl_lahir'],
						'NIK_Ibu' 			=> $bayi[0]['NIK_Ibu']
				);
			//
			$d_pegawai = array(
						'NIK'								=> $ibu[0]['NIK'],
						'Nama'							=> $ibu[0]['Nama'],
			);

			$data['bayi'] 			= $d_bayi;
			$data['ibu']				= $ibu;

			//
			// $data['dataIbu'] 			= $dataIbu;
			// $data['dataPegawai']	= $pegawai;
			// print_r($pegawai);

			$this->load->view('pasien/bayi/v_edit',$data);
	}

	function update_data(){
				// print_r($_POST);
				$id_bayi				= $_POST['id_bayi'];
				$Nama						= $_POST['Nama'];
				$Jenis_kelamin	= $_POST['Jenis_kelamin'];
				$Tgl_lahir    	= $_POST['Tgl_lahir'];
				$NIK_Ibu				= $_POST['NIK_Ibu'];

				$data	= array(

						'Nama' 					=> $Nama,
						'Jenis_kelamin' => $Jenis_kelamin,
						'Tgl_lahir'			=> $Tgl_lahir,
						'NIK_Ibu' 			=> $NIK_Ibu
				);
				$where = array('id_bayi' => $id_bayi);

				$res = $this->model_bayi->update_data('bayi',$data,$where);
				if($res>=1){
					redirect('/bayi');
				}

	}



}
