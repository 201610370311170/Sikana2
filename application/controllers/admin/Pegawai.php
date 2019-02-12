<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Pegawai extends CI_Controller {

    function __construct(){
  		parent::__construct();
  		$this->load->model('model_ibu');
      $this->load->model('model_pegawai');

      if( !$this->session->userdata('admin'))
				redirect('admin');
    }

    public function index(){
      $this->load->model('model_pegawai');
      $data['data']   = $this->model_pegawai->getData();
      $data['data2']  = $this->model_pegawai->getNIP();
      $this->load->view('admin/pegawai/beranda',$data);
    }

    public function remove(){
  		// echo $this->uri->segment(3);
  		$id = $this->uri->segment(4);
  		$this->load->model('model_pegawai');
  		$this->model_pegawai->delete_data('pegawai',$id);
  		redirect('/admin/pegawai');
  	}

    public function register(){

  		$this->load->model('model_pegawai');


  		$data_form = $this->input->POST(NULL,TRUE);
  		if($data_form){
  			$NIP 					  = $data_form['NIP'];
  			$Nama						= $data_form['Nama'];
  			$Password       = $data_form['Password'];
        $Passwordx      = md5($Password);
        $Jabatan				= $data_form['Jabatan'];
  			$Alamat					= $data_form['Alamat'];
        $datas					= array(
                          'NIP'           => $NIP,
                          'Nama' 					=> $Nama,
  												'Password'			=> $Passwordx,
  												'Jabatan'				=> $Jabatan,
  												'Alamat'				=> $Alamat
  			);
        //Check if user already exist
        $query = $this->db->get_where('pegawai', array('NIP' => $NIP));
        $count = $query->num_rows();

        if($count == 0){
          $this->model_pegawai->register($datas);
          $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
          Data Berhasil ditambahkan
          </div>');
          redirect('/admin/pegawai');
        }
        else{
          $this->session->set_flashdata('danger', '<div class="alert alert-danger">
            <strong>Maaf!</strong> NIP telah terdaftar.
          </div>');
          redirect('/admin/pegawai');
        }
  		}
  	}

    public function edit($NIP){
  			$this->load->model('model_pegawai');
  			// $pegawai = $this->model_pegawai->getData();
  			$pegawai 			= $this->model_pegawai->getData("where NIP = '$NIP'");


  			$d_pegawai = array(
  						'NIP' 		      => $pegawai[0]['NIP'],
  						'Nama'					=> $pegawai[0]['Nama'],
  						'Alamat' 				=> $pegawai[0]['Alamat'],
              'Jabatan'       => $pegawai[0]['Jabatan']
  				);
  			//
        $data['pegawai']	= $d_pegawai;

  			//
  			// $data['dataIbu'] 			= $dataIbu;
  			// $data['dataPegawai']	= $pegawai;
  			// print_r($pegawai);

  			$this->load->view('admin/pegawai/v_edit',$data);
  	}

    function update_data(){

  				$NIP			      = $_POST['NIP'];
  				$Nama						= $_POST['Nama'];
  				$Jabatan				= $_POST['Jabatan'];
  				$Alamat					= $_POST['Alamat'];

  				$data	= array(
  						'Nama' 					=> $Nama,
  						'Jabatan' 			=> $Jabatan,
  						'Alamat' 				=> $Alamat,
  						);
  				$where = array('NIP' => $NIP);

  				$res = $this->model_pegawai->update_data('pegawai',$data,$where);
  				if($res>=1){
  					redirect('/admin/pegawai');
  				}

  	}

    function Change_Password(){
      print_r($_POST);
      $NIP      = $this->input->post('NIP');
      $password = md5($this->input->post('password'));

      $data	= array(
          'Password' 			=> $password
          );
          $where = array('NIP' => $NIP);

      $res = $this->model_pegawai->update_data('pegawai',$data,$where);
        if($res>=1){
          $this->session->set_flashdata('success_password', '<div class="alert alert-success" role="alert">
          <b>Selamat,</b>Kata Sandi Berhasil dirubah
          </div>');
          redirect('/admin/pegawai');
        }
      }
  }
?>
