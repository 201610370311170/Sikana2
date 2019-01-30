<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Rumah_sakit extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('model_rumahSakit');

      if( !$this->session->userdata('admin'))
				redirect('admin');
    }

    function index(){
      $data['data'] = $this->model_rumahSakit->getData();
      $this->load->view('admin/rs/index', $data);
    }

    function register(){
        $data_form = $this->input->POST(NULL,TRUE);
        if($data_form){
          $id_rs            = $data_form['id_rs'];
          $Nama_RS					= $data_form['Nama_RS'];
          $Alamat_RS				= $data_form['Alamat_RS'];
          $datas					= array(
                            'id_rs'       => $id_rs,
                            'Nama_RS' 		=> $Nama_RS,
                            'Alamat_RS'		=> $Alamat_RS,

          );
          $query = $this->db->get_where('rumah_sakit', array('id_rs' => $id_rs));
          $count = $query->num_rows();

          if($count == 0){
            $this->model_rumahSakit->register($datas);
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
            Data Berhasil ditambahkan
            </div>');
            redirect('/admin/rumah_sakit');
          }
          else{
            $this->session->set_flashdata('danger', '<div class="alert alert-danger">
              <strong>Maaf!</strong> Rumah Sakit telah terdaftar.
            </div>');
            redirect('/admin/rumah_sakit');
          }
        }
      }


      function edit($id_rs){
          $rs 			  = $this->model_rumahSakit->getData("where id_rs = '$id_rs'");
          $d_rs       = array(
  						'id_rs' 		      => $rs[0]['id_rs'],
  						'Nama_RS'					=> $rs[0]['Nama_RS'],
  						'Alamat_RS' 			=> $rs[0]['Alamat_RS']
  				);
        $data['data']	= $d_rs;
  			$this->load->view('admin/rs/v_edit',$data);
      }


      function update_data(){
        // print_r($_POST);
        $id_rs					    = $_POST['id_rs'];
        $Nama_RS						= $_POST['Nama_RS'];
        $Alamat_RS					= $_POST['Alamat_RS'];
        $data	= array(

            'Nama_RS' 					=> $Nama_RS,
            'Alamat_RS' 				=> $Alamat_RS,
        );
        $where = array('id_rs' => $id_rs);

        $res = $this->model_rumahSakit->update_data('rumah_sakit',$data,$where);
        if($res>=1){
          redirect('/admin/rumah_sakit');
        }
      }

       function remove(){
        $id = $this->uri->segment(4);
        $this->model_rumahSakit->delete_data('rumah_sakit',$id);
        redirect('/admin/rumah_sakit');
      }
  }
?>
