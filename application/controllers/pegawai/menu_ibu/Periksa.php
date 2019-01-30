<?php

  class Periksa extends CI_Controller{
    function __construct(){
      parent::__construct();

      $this->load->model('model_ibu');
      $this->load->model('model_kesehatan_ibu');
      if( !$this->session->userdata('pegawai'))
				redirect('pegawai');
    }

    function index(){
      $NIK['data'] = $this->model_ibu->getAllNIK();
      $this->load->view('pegawai/include/header');
      $this->load->view('pegawai/menu_ibu/periksa',$NIK);
      $this->load->view('pegawai/include/footer');
    }

    function search(){
      $data_ibu   = $this->input->post('NIK_Ibu');
      $data       = $this->model_ibu->getAllData($data_ibu);

      if($this->db->get_where('ibu', array('NIK' => $this->input->post('NIK_Ibu', true)))->num_rows() > 0)
      {
        redirect('/pegawai/menu_ibu/periksa/found/'.$data_ibu);
      }
      else{
        $this->session->set_flashdata('notfound','<div class="alert alert-danger" role="alert">
            <b>Maaf</b>, Data tidak ditemukan
          </div>');
        redirect('/pegawai/menu_ibu/periksa');
      }
    }

    function found($NIK){
      $NIK = $this->uri->segment(5);

      $data['data_ibu'] = $this->model_ibu->getAllData($NIK);
      $data['riwayat']  = $this->model_kesehatan_ibu->getAllData($NIK);
      $data['id_data']  = $this->model_kesehatan_ibu->getID_Data();

      $this->load->view('pegawai/include/header');
      $this->load->view('pegawai/menu_ibu/found',$data);
      $this->load->view('pegawai/include/footer');
    }

    function tambah_daftar_riwayat($NIK_Ibu){
      $data['data_ibu'] = $NIK_Ibu;

      $this->load->view('pegawai/include/header');
      $this->load->view('pegawai/menu_ibu/tambah_daftar_riwayat',$data);
      $this->load->view('pegawai/include/footer');
    }

    function tambah_daftar(){
      $Tanggal_periksa          = $this->input->post('Tanggal_periksa');
      $Tekanan_darah            = $this->input->post('Tekanan_darah');
      $Berat_badan              = $this->input->post('Berat_badan');
      $Tinggi_badan             = $this->input->post('Tinggi_badan');
      $Umur_kehamilan           = $this->input->post('Umur_kehamilan');
      $tinggi_fundus            = $this->input->post('tinggi_fundus');
      $Letak_janin              = $this->input->post('Letak_janin');
      $Denyut_jantung_janin     = $this->input->post('Denyut_jantung_janin');
      $Keluhan_sekarang         = $this->input->post('Keluhan_sekarang');
      $Obat                     = $this->input->post('Obat');
      $NIK_Ibu                  = $this->input->post('NIK_Ibu');
      $dokter_periksa           = $this->input->post('dokter_periksa');

      $data	= array(
          'Tanggal_periksa'      => $Tanggal_periksa,
          'Tekanan_darah'        => $Tekanan_darah,
          'Berat_badan'          => $Berat_badan,
          'Tinggi_badan'         => $Tinggi_badan,
          'Umur_kehamilan'       => $Umur_kehamilan,
          'tinggi_fundus'        => $tinggi_fundus,
          'Letak_janin'          => $Letak_janin,
          'Denyut_jantung_janin' => $Denyut_jantung_janin,
          'Keluhan_sekarang' 		 => $Keluhan_sekarang,
          'Obat'			           => $Obat,
          'NIK_Ibu'              => $NIK_Ibu,
          'dokter_periksa'       => $dokter_periksa,
      );

      $this->model_kesehatan_ibu->register($data);

      redirect('pegawai/menu_ibu/periksa/found/'.$NIK_Ibu);
    }


    function update_riwayat($NIK){
      $Keluhan_sekarang     = $this->input->post('Keluhan_sekarang');
      $Obat                 = $this->input->post('Obat');
      $id_periksa           = $this->input->post('id_periksa');
      $dokter_periksa       = $this->input->post('dokter_periksa');

      $data	= array(
          'Keluhan_sekarang' 		 => $Keluhan_sekarang,
          'Obat'			           => $Obat,
          'dokter_periksa'       => $dokter_periksa,
      );
      $where = array('id_periksa' => $id_periksa);

      $res = $this->model_kesehatan_ibu->update_data('kesehatan_ibu',$data,$where);
      if($res>=1){
        // $this->session->set_flashdata('berhasil', '<div class="alert alert-success" role="alert">
        //   <b>Data Berhasil</b> ditambahkan
        // </div>');
        redirect('pegawai/menu_ibu/periksa/found/'.$NIK);
      }
    }
  }


?>
