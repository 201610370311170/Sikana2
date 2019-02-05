<?php

  class Daftar extends CI_Controller{

    function __construct(){
  		parent::__construct();

  		$this->load->model('model_ibu');
  		$this->load->model('model_pegawai');
  		$this->load->model('model_bayi');
  		$this->load->model('model_rumahSakit');

  			if( !$this->session->userdata('pegawai'))
  				redirect('pegawai');
  	}


    function index(){
      $this->load->view('pegawai/include/header');
      $this->load->view('pegawai/view_daftar');
      $this->load->view('pegawai/include/footer');
    }

    function daftar_ibu(){
      $this->load->view('pegawai/include/header');
      $this->load->view('pegawai/menu_ibu/daftar_ibu');
      $this->load->view('pegawai/include/footer');
    }

    function insert_ibu(){

    			$data_form = $this->input->POST(NULL,TRUE);
    			if($data_form){
    				$Nama 					= $data_form['Nama'];
    				$NIK						= $data_form['NIK'];
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

    				$query = $this->db->get_where('ibu', array('NIK' => $NIK));
    				$count = $query->num_rows();

    				if($count == 0){
    					$this->model_ibu->register($datas);
    					redirect('/pegawai/menu_ibu/periksa/found/'.$NIK);
    				}
    				else{
    					$this->session->set_flashdata('danger', '<div class="alert alert-danger">
    						<strong>Maaf!</strong> NIK telah terdaftar.
    					</div>');
    					redirect('pegawai/Daftar/daftar_ibu');
    				}
    			}
        }

      function daftar_anak(){
        $this->load->view('pegawai/include/header');
        $this->load->view('pegawai/menu_anak/daftar_anak');
        $this->load->view('pegawai/include/footer');
      }

      function insert_anak(){

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
        					redirect('/pegawai/menu_anak/periksa/found/'.$id_bayi);
        				}
        				else{
                  $this->session->set_flashdata('danger', '<div class="alert alert-danger">
        						<strong>Maaf!</strong> NIK telah terdaftar.
        					</div>');
        					redirect('pegawai/Daftar/daftar_anak');
        				}
        			}
            }



  }


?>
