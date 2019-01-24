<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_adminLog');
		$data['username'] = $this->model_adminLog->getData();


	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		if(isset($_POST['submit'])){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$berhasil = $this->model_adminLog->login($username,$password);
			if($berhasil == 1){
				$this->session->set_userdata(array('status_login'=>'sukses'));
				redirect('dashboard2');
			}else{
				redirect('/Auth');
			}

		}else{
			$this->load->view('login');
		}
	}

  public function logout()
	{
        redirect('auth');
	}

	

}
