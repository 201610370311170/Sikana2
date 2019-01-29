<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ibu extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_ibu');
		$this->load->model('model_pegawai');
		$this->load->model('model_kesehatan_ibu');
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
    // load form_validation library
    $this->load->library('form_validation');

		if( !$this->session->userdata('admin'))
			redirect('admin');

	}


	public function index()
	{
		$this->load->model('model_ibu');
		$this->load->model('model_pegawai');

		$data['records'] 			= $this->model_ibu->getData();
		$data['data'] 				= $this->model_pegawai->getData();


		$this->load->view('admin/pasien/ibu/start', $data);
	}

	public function v_register(){

		$this->load->model('model_pegawai');
		$data['data'] = $this->model_pegawai->getData();

		$this->load->view('admin/pasien/ibu/v_register', $data);
	}

	public function register(){

			$data_form = $this->input->POST(NULL,TRUE);
			if($data_form){
				$Nama 					= $data_form['Nama'];
				$NIK						= $data_form['NIK'];
				$Umur						= $data_form['Umur'];
				$Tanggal_lahir	= $data_form['Tanggal_lahir'];
				$Alamat					= $data_form['Alamat'];
				$Nomor_Telefon	= $data_form['Nomor_Telefon'];

				$datas					= array(
													'Nama' 					=> $Nama,
													'NIK'						=> $NIK,
													'Tgl_lahir'			=> $Tanggal_lahir,
													'Alamat'				=> $Alamat,
													'Nomor_Telefon'	=> $Nomor_Telefon,

				);
				$this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
          Data Berhasil ditambahkan
        </div>');
				$this->model_ibu->register($datas);
				redirect('/admin/ibu');
			}
	}

	public function edit($NIK){
			$this->load->model('model_pegawai');
			// $pegawai = $this->model_pegawai->getData();
			$ibu 			= $this->model_ibu->getSingleData("where NIK = '$NIK'");
			$pegawai	= $this->model_pegawai->getData();

			$d_ibu = array(
						'NIK'						=> $ibu[0]['NIK'],
						'No_pasien' 		=> $ibu[0]['No_pasien'],
						'Nama'					=> $ibu[0]['Nama'],
						'Tgl_lahir'			=> $ibu[0]['Tgl_lahir'],
						'Alamat' 				=> $ibu[0]['Alamat'],
						'Nomor_Telefon' => $ibu[0]['Nomor_Telefon'],

				);
			//
			$d_pegawai = array(
						'NIP'								=> $pegawai[0]['NIP'],
						'Nama'							=> $pegawai[0]['Nama'],
						'Jabatan'						=> $pegawai[0]['Jabatan'],
						'Alamat'						=> $pegawai[0]['Alamat']
			);

			$data['ibu'] 			= $d_ibu;
			$data['pegawai']	= $pegawai;

			//
			// $data['dataIbu'] 			= $dataIbu;
			// $data['dataPegawai']	= $pegawai;
			// print_r($pegawai);

			$this->load->view('admin/pasien/ibu/v_edit',$data);
	}

	function update_data(){
				// print_r($_POST);
				$NIK						= $_POST['NIK'];
				$Nama						= $_POST['Nama'];
				$Tgl_lahir    	= $_POST['Tgl_lahir'];
				$Alamat					= $_POST['Alamat'];
				$Nomor_Telefon	= $_POST['Nomor_Telefon'];



				$data	= array(

						'Nama' 					=> $Nama,
						'Tgl_lahir'			=> $Tgl_lahir,
						'Alamat' 				=> $Alamat,
						'Nomor_Telefon' => $Nomor_Telefon,

				);
				$where = array('NIK' => $NIK);

				$res = $this->model_ibu->update_data('ibu',$data,$where);
				if($res>=1){
					redirect('/admin/ibu');
				}

	}

	function remove(){
		// echo $this->uri->segment(3);

		$id = $this->uri->segment(4);
		$this->load->model('model_ibu');
		$this->model_ibu->delete_data('ibu',$id);
		redirect('/admin/ibu');
	}




	function kesehatan(){
		$NIK = $this->uri->segment(4);
		$data['data'] 							= $this->model_ibu->getAllData($NIK);
		$data['riwayat'] 						= $this->model_kesehatan_ibu->getAllData($NIK);
		$data['riwayat_kesehatan'] 	= $this->model_kesehatan_ibu->getAllData($NIK);

		$this->load->view('admin/pasien/ibu/kesehatan_ibu',$data);
	}

	function tambah_data_kesehatan($NIK){



		$data_form = $this->input->POST(NULL,TRUE);
		if($data_form){
			$NIK_Ibu									= $data_form['NIK_Ibu'];
			$Tanggal_periksa					= $data_form['Tanggal_periksa'];
			$Tekanan_darah						= $data_form['Tekanan_darah'];
			$Berat_badan	  					= $data_form['Berat_badan'];
			$Umur_kehamilan 					= $data_form['Umur_kehamilan'];
			$Tinggi_fundus						= $data_form['Tinggi_fundus'];
			$Letak_janin	  					= $data_form['Letak_janin'];
			$Denyut_jantung_janin 		= $data_form['Denyut_jantung_janin'];
			$datas					= array(
												'NIK_Ibu'									=> $NIK_Ibu,
												'Tanggal_periksa' 				=> $Tanggal_periksa,
												'Tekanan_darah'						=> $Tekanan_darah,
												'Berat_badan'							=> $Berat_badan,
												'Umur_kehamilan'					=> $Umur_kehamilan,
												'Tinggi_fundus'						=> $Tinggi_fundus,
												'Letak_janin'							=> $Letak_janin,
												'Denyut_jantung_janin'		=> $Denyut_jantung_janin
			);
			$this->model_kesehatan_ibu->register($datas);
			redirect('/admin/ibu/kesehatan/'.$NIK);
		}
	}


	function hapus_data_kesehatan(){
			$NIK	= $this->uri->segment(4);
			$id 	= $this->uri->segment(5);
			$this->model_kesehatan_ibu->delete_data('kesehatan_ibu',$id);
			redirect('/admin/ibu/kesehatan/'.$NIK);

	}

	function edit_data_kesehatan(){


			$id = $this->uri->segment(5);
			$kesehatan_ibu	= $this->model_kesehatan_ibu->getRiwayatData($id);

			$data_ibu = array(
				'id_periksa'							=> $kesehatan_ibu[0]['id_periksa'],
				'NIK_Ibu'									=> $kesehatan_ibu[0]['NIK_Ibu'],
				'Tanggal_periksa' 				=> $kesehatan_ibu[0]['Tanggal_periksa'],
				'Tekanan_darah'						=> $kesehatan_ibu[0]['Tekanan_darah'],
				'Berat_badan'							=> $kesehatan_ibu[0]['Berat_badan'],
				'Umur_kehamilan'					=> $kesehatan_ibu[0]['Umur_kehamilan'],
				'Tinggi_fundus'						=> $kesehatan_ibu[0]['Tinggi_fundus'],
				'Letak_janin'							=> $kesehatan_ibu[0]['Letak_janin'],
				'Denyut_jantung_janin'		=> $kesehatan_ibu[0]['Denyut_jantung_janin']
				);



			$this->load->view('admin/pasien/ibu/edit_data_kesehatan',$data_ibu);
	}

	function update_data_kesehatan(){


				$NIK											= $this->input->post('NIK_Ibu');
				$Tanggal_periksa					= $this->input->post('Tanggal_periksa');
				$Tekanan_darah						= $this->input->post('Tekanan_darah');
				$Berat_badan	  					= $this->input->post('Berat_badan');
				$Umur_kehamilan 					= $this->input->post('Umur_kehamilan');
				$Tinggi_fundus						= $this->input->post('Tinggi_fundus');
				$Letak_janin	  					= $this->input->post('Letak_janin');
				$Denyut_jantung_janin 		= $this->input->post('Denyut_jantung_janin');


				$data	= array(
					'NIK_Ibu'									=> $NIK,
					'Tanggal_periksa' 				=> $Tanggal_periksa,
					'Tekanan_darah'						=> $Tekanan_darah,
					'Berat_badan'							=> $Berat_badan,
					'Umur_kehamilan'					=> $Umur_kehamilan,
					'Tinggi_fundus'						=> $Tinggi_fundus,
					'Letak_janin'							=> $Letak_janin,
					'Denyut_jantung_janin'		=> $Denyut_jantung_janin,
				);
				$where = array('id_periksa' => $id_periksa);
				$id = $this->uri->segment(5);


				$res = $this->model_kesehatan_ibu->update_data('kesehatan_ibu',$data,'id_periksa = '.$id);
				if($res>=1){
					$NIK	= $this->uri->segment(4);
					redirect('/admin/ibu/kesehatan/'.$NIK);
				}

	}



}
