<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Pegawai extends CI_Controller {

    function __construct(){
  		parent::__construct();
  		$this->load->model('model_ibu');
      $this->load->model('model_pegawai');
    }

    public function index(){
      $this->load->model('model_pegawai');
      $data['data'] = $this->model_pegawai->getData();
      $this->load->view('pegawai/beranda',$data);
    }

    public function remove(){
  		// echo $this->uri->segment(3);
  		$id = $this->uri->segment(3);
  		$this->load->model('model_pegawai');
  		$this->model_pegawai->delete_data('pegawai',$id);
  		redirect('/pegawai');
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

  			// print_r($datas);
  			// die;

  			$this->model_pegawai->register($datas);
  			redirect('/pegawai');
  		}
  		$this->load->view('/pegawai');
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

  			$this->load->view('pegawai/v_edit',$data);
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
  					redirect('/pegawai');
  				}

  	}

  }
?>
