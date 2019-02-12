<?php

  class Periksa extends CI_Controller{
    function __construct(){
      parent::__construct();

      $this->load->model('model_ibu');
      $this->load->model('model_bayi');
      $this->load->model('model_kesehatan_anak');
      $this->load->model('model_rumahSakit');
      if( !$this->session->userdata('pegawai'))
				redirect('pegawai');
    }

    function index(){
      $this->load->view('dokter/include/header');
      $this->load->view('dokter/menu_anak/periksa');
      $this->load->view('dokter/include/footer');
    }

    function search(){
      $data_anak   = $this->input->post('id_bayi');
      $data        = $this->model_bayi->getAllData($data_anak);

      if($this->db->get_where('bayi', array('id_bayi' => $this->input->post('id_bayi', true)))->num_rows() > 0)
      {
        redirect('/dokter/menu_anak/periksa/found/'.$data_anak);
      }
      else{
        $this->session->set_flashdata('notfound','<div class="alert alert-danger" role="alert">
            <b>Maaf</b>, Data tidak ditemukan
          </div>');
        redirect('/dokter/menu_anak/periksa');
      }
    }

    function found($data_anak){
      $data_anak = $this->uri->segment(5);

      $data['data_anak']    = $this->model_bayi->getAllData($data_anak);
      $data['riwayat']      = $this->model_kesehatan_anak->getAllData($data_anak);
      $data['id_data']      = $this->model_kesehatan_anak->getID_Data();
      $data['rumah_sakit']  = $this->model_rumahSakit->getData();



      $this->load->view('dokter/include/header');
      $this->load->view('dokter/menu_anak/found',$data);
      $this->load->view('dokter/include/footer');
    }

    function tambah_daftar_riwayat($id_bayi){


      $data['data_anak'] = $id_bayi;
      $data['NIK_Ibu'] = $this->model_bayi->getData_NIK_Ibu($id_bayi);

      $this->load->view('dokter/include/header');
      $this->load->view('dokter/menu_anak/tambah_daftar_riwayat',$data);
      $this->load->view('dokter/include/footer');
    }

    function tambah_daftar(){


      $Tanggal_periksa          = $this->input->post('Tanggal_periksa');
      $Tekanan_darah            = $this->input->post('Tekanan_darah');
      $Berat_badan              = $this->input->post('Berat_badan');
      $Tinggi_badan             = $this->input->post('Tinggi_badan');
      $Keluhan_sekarang         = $this->input->post('Keluhan_sekarang');
      $Obat                     = $this->input->post('Obat');
      $id_bayi                  = $this->input->post('id_bayi');
      $NIK_Ibu                  = $this->input->post('NIK_ibu');
      $dokter_periksa           = $this->input->post('dokter_periksa');

      $data	= array(
          'tanggal_periksa'      => $Tanggal_periksa,
          'tekanan_darah'        => $Tekanan_darah,
          'berat_badan'          => $Berat_badan,
          'tinggi_badan'         => $Tinggi_badan,
          'keluhan_sekarang' 		 => $Keluhan_sekarang,
          'obat'			           => $Obat,
          'id_bayi'              => $id_bayi,
          'NIK_Ibu'              => $NIK_Ibu,
          'dokter_periksa'       => $dokter_periksa,
      );

      $this->model_kesehatan_anak->register($data);

      redirect('dokter/menu_anak/periksa/found/'.$id_bayi);
    }


    function update_riwayat($id_bayi){


      $diagnosa             = $this->input->post('Keluhan_sekarang');

      $id_periksa           = $this->input->post('id_periksa');
      $dokter_periksa       = $this->input->post('dokter_periksa');

      $data	= array(
          'diagnosa' 		         => $diagnosa,
          'dokter_periksa'       => $dokter_periksa,
      );
      $where = array('id_periksa' => $id_periksa);

      $res = $this->model_kesehatan_anak->update_data('kesehatan_anak',$data,$where);
      if($res>=1){

        redirect('dokter/menu_anak/periksa/found/'.$id_bayi);
      }
    }

    function cetak(){

      $id_bayi = $this->uri->segment(5);
      // $data_ibu = $this->model_ibu->getAllData($NIK_Ibu);

      $Keluhan_sekarang = $this->input->post('Keluhan_sekarang');
      $diagnosa         = $this->input->post('diagnosa');
      $Rumah_sakit      = $this->input->post('Rumah_sakit');
      $id_bayi          = $this->model_bayi->getAllData($id_bayi);


      $data	= array(
          'id_bayi'               => $id_bayi,
          'Keluhan_sekarang' 		  => $Keluhan_sekarang,
          'diagnosa'	            => $diagnosa,
          'Rumah_sakit'           => $Rumah_sakit,
      );

      $this->load->view('dokter/menu_anak/surat_rujukan',$data);

    }


  }


?>
