<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bayi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_ibu');
		$this->load->model('model_pegawai');
		$this->load->model('model_bayi');
		$this->load->model('model_kesehatan_anak');
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		// load form_validation library
		$this->load->library('form_validation');

		if( !$this->session->userdata('admin'))
			redirect('admin');

	}


	public function index()
	{

		$data['ibu']		 = $this->model_ibu->getData();
		$data['records'] = $this->model_bayi->getData();
		$this->load->view('admin/pasien/bayi/index',$data);
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

				$query = $this->db->get_where('bayi', array('id_bayi' => $id_bayi));
				$count = $query->num_rows();

				if($count == 0){
					$this->model_bayi->register($datas);
					$this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
					Data Berhasil ditambahkan
					</div>');
					redirect('/admin/bayi');
				}
				else{
					$this->session->set_flashdata('danger', '<div class="alert alert-danger">
						<strong>Maaf!</strong> No.Akta telah terdaftar.
					</div>');
					redirect('/admin/bayi');
				}
			}
	}

	public function remove(){
		// echo $this->uri->segment(3);

		$id = $this->uri->segment(4);
		$this->load->model('model_bayi');
		$this->model_bayi->delete_data('bayi',$id);
		redirect('/admin/bayi');
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



			$this->load->view('admin/pasien/bayi/v_edit',$data);
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
					redirect('admin//bayi');
				}

	}


		function kesehatan(){
			$id_bayi = $this->uri->segment(4);
			$data['data'] 							= $this->model_bayi->getAllData($id_bayi);
			$data['riwayat'] 						= $this->model_kesehatan_anak->getAllData($id_bayi);
			$data['riwayat_kesehatan'] 	= $this->model_kesehatan_anak->getAllData($id_bayi);



			$this->load->view('admin/pasien/bayi/kesehatan_anak',$data);
		}


		function tambah_data_kesehatan($id_bayi){

			$data_form = $this->input->POST(NULL,TRUE);
			if($data_form){
				$id_bayi									= $data_form['id_bayi'];
				$tanggal_periksa					= $data_form['tanggal_periksa'];
				$tekanan_darah						= $data_form['tekanan_darah'];
				$berat_badan	  					= $data_form['berat_badan'];
				$tinggi_badan 						= $data_form['tinggi_badan'];
				$datas					= array(
													'id_bayi'									=> $id_bayi,
													'tanggal_periksa' 				=> $tanggal_periksa,
													'tekanan_darah'						=> $tekanan_darah,
													'berat_badan'							=> $berat_badan,
													'tinggi_badan'						=> $tinggi_badan,

				);
				$this->model_kesehatan_anak->register($datas);
				redirect('/admin/bayi/kesehatan/'.$id_bayi);
			}
		}


			function hapus_data_kesehatan(){
					$id_bayi			= $this->uri->segment(4);
					$id_periksa 	= $this->uri->segment(5);
					$this->model_kesehatan_anak->delete_data('kesehatan_anak',$id_periksa);
					redirect('/admin/bayi/kesehatan/'.$id_bayi);

			}


			function edit_data_kesehatan(){


					$id_periksa = $this->uri->segment(5);
					$kesehatan_anak	= $this->model_kesehatan_anak->getRiwayatData($id_periksa);



						$data_anak = array(
							'id_bayi'									=> $kesehatan_anak[0]['id_bayi'],
							'tanggal_periksa'					=> $kesehatan_anak[0]['tanggal_periksa'],
							'id_periksa'							=> $kesehatan_anak[0]['id_periksa'],
							'tekanan_darah'						=> $kesehatan_anak[0]['tekanan_darah'],
							'berat_badan'							=> $kesehatan_anak[0]['berat_badan'],
							'tinggi_badan'						=> $kesehatan_anak[0]['tinggi_badan'],

							);



						$this->load->view('admin/pasien/bayi/edit_data_kesehatan',$data_anak);
			}


				function update_data_kesehatan(){


							$id_bayi									= $this->input->post('id_bayi');
							$tanggal_periksa					= $this->input->post('tanggal_periksa');
							$id_periksa								= $this->input->post('id_periksa');
							$tekanan_darah						=	$this->input->post('tekanan_darah');
							$berat_badan	  					= $this->input->post('berat_badan');
							$tinggi_badan							= $this->input->post('tinggi_badan');



							$data	= array(
								'id_bayi'									=> $id_bayi,
								'tanggal_periksa' 				=> $tanggal_periksa,
								'tekanan_darah'						=> $tekanan_darah,
								'berat_badan'							=> $berat_badan,
								'tinggi_badan'						=> $tinggi_badan,
							);
							$where = array('id_periksa' => $id_periksa);
							$id = $this->uri->segment(5);


							$res = $this->model_kesehatan_anak->update_data('kesehatan_anak',$data,'id_periksa = '.$id);
							if($res>=1){
								$id_bayi	= $this->uri->segment(4);
								redirect('/admin/bayi/kesehatan/'.$id_bayi);
							}

				}




}
