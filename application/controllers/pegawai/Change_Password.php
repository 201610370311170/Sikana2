<?php

    class Change_Password extends CI_Controller{

      function __construct(){
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('model_pegawai');
        if( !$this->session->userdata('pegawai'))
          redirect('pegawai');
      }

      function index(){
        $this->load->view('pegawai/include/header');
        $this->load->view('pegawai/Change_Password');
        $this->load->view('pegawai/include/footer');
      }

      function update(){

        $this->form_validation->set_rules('old_password', 'kata sandi lama', 'required');
        $this->form_validation->set_rules('new_password', 'Kata Sandi', 'required|min_length[8]');
        $this->form_validation->set_rules('confirmation_password', 'Konfirmasi kata sandi', 'required|matches[new_password]');

        $this->form_validation->set_message('min_length', '<div class="alert alert-danger">
          <b>%s</b> harus berjumlah %s karakter
        </div>');

        $this->form_validation->set_message('matches', '<div class="alert alert-danger">
          <b>%s</b> tidak cocok
        </div>');


        if ($this->form_validation->run() == FALSE)
                  {

                    $this->load->view('pegawai/include/header');
                    $this->load->view('pegawai/Change_Password');
                    $this->load->view('pegawai/include/footer');
                  }
                  else
                  {
                    $data = $this->session->userdata('pegawai');
                    $NIP = $data['NIP'];

                    $data = $this->model_pegawai->getData("where NIP = ".$NIP);

                      $old_password = md5($this->input->post('old_password'));
                      $new_password = md5($this->input->post('new_password'));
                      //UPDATE PASSWORD
                      if($old_password == $data[0]['Password']){
                        echo "TRUE";
                        $data	= array(
                						'Password' 			=> $new_password
                						);
                				$where = array('NIP' => $NIP);

                        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
              					<b>Password</b> Berhasil dirubah
              					</div>');

                				$res = $this->model_pegawai->update_data('pegawai',$data,$where);
                          if($res>=1){
                  					redirect('/pegawai/Change_Password');
                  				}

                          }else{
                          $this->session->set_flashdata('danger', '<div class="alert alert-danger" role="alert">
                					<b>Password</b> yang dimasukkan tidak cocok
                					</div>');
                          redirect('/pegawai/Change_Password');
                      }
                  }
      }


    }

?>
