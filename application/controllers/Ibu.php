<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ibu extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_ibu');
		$this->load->model('model_pegawai');
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
    // load form_validation library
    $this->load->library('form_validation');

	}


	public function index()
	{
		$this->load->model('model_ibu');
		$this->load->model('model_pegawai');

		$data['records'] 			= $this->model_ibu->getData();
		$data['data'] 				= $this->model_pegawai->getData();

		
		$this->load->view('pasien/ibu/start', $data);
	}

	public function v_register(){

		$this->load->model('model_pegawai');
		$data['data'] = $this->model_pegawai->getData();

		$this->load->view('pasien/ibu/v_register', $data);
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
				$Dokter_damping = $data_form['Dokter_damping'];
				$datas					= array(
													'Nama' 					=> $Nama,
													'NIK'						=> $NIK,
													'Tgl_lahir'			=> $Tanggal_lahir,
													'Alamat'				=> $Alamat,
													'Nomor_Telefon'	=> $Nomor_Telefon,
													'Dokter_damping'=> $Dokter_damping
				);
				$this->model_ibu->register($datas);
				redirect('/ibu');
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
						'Dokter_damping'=> $ibu[0]['Dokter_damping']
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

			$this->load->view('pasien/ibu/v_edit',$data);
	}

	function update_data(){
				// print_r($_POST);
				$NIK						= $_POST['NIK'];
				$Nama						= $_POST['Nama'];
				$Tgl_lahir    	= $_POST['Tgl_lahir'];
				$Alamat					= $_POST['Alamat'];
				$Nomor_Telefon	= $_POST['Nomor_Telefon'];
				$Dokter_Damping = $_POST['Dokter_damping'];


				$data	= array(

						'Nama' 					=> $Nama,
						'Tgl_lahir'			=> $Tgl_lahir,
						'Alamat' 				=> $Alamat,
						'Nomor_Telefon' => $Nomor_Telefon,
						'Dokter_damping'=> $Dokter_Damping
				);
				$where = array('NIK' => $NIK);

				$res = $this->model_ibu->update_data('ibu',$data,$where);
				if($res>=1){
					redirect('/ibu');
				}

	}

	public function remove(){
		// echo $this->uri->segment(3);

		$id = $this->uri->segment(3);
		$this->load->model('model_ibu');
		$this->model_ibu->delete_data('ibu',$id);
		redirect('/ibu');
	}

	public function basic()
{
		// basic required field
		$this->form_validation->set_rules('NIK', 'NIK', 'required|min_length[8]');

		// basic required field with minimum length
		$this->form_validation->set_rules('min_text_field', 'Text Field Two', 'required|min_length[8]');

		// basic required field with maximum length
		$this->form_validation->set_rules('max_text_field', 'Text Field Three', 'required|max_length[20]');

		// basic required field with exact length
		$this->form_validation->set_rules('exact_text_field', 'Text Field Four', 'required|exact_length[12]');

		// basic required field but alphabets only
		$this->form_validation->set_rules('alphabets_text_field', 'Text Field Five', 'required|alpha');

		// basic required field but alphanumeric only
		$this->form_validation->set_rules('alphanumeric_text_field', 'Text Field Six', 'required|alpha_numeric');

		// basic email field with email validation
		$this->form_validation->set_rules('valid_email_field', 'Email Field', 'required|valid_email');

		// password field with confirmation field matching
		$this->form_validation->set_rules('password_field', 'Password One', 'required');
		$this->form_validation->set_rules('password_confirmation_field', 'Password Confirmation Field', 'required|matches[password_field]');

		// basic required field with IPv4 validation
		$this->form_validation->set_rules('valid_ip_field', 'Valid IP Field', 'required|valid_ip[ipv4]');

		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('start');
		}
		else
		{
				// load success template...
				echo "It's all Good!";
		}
}





}
