<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

	
	public function index()
	{
		if($this->input->post()){
			$this->load->library('Validator');
			// $this->d($this->input->post());
			// $this->d($this->validator->hash($this->input->post('password')));
			
			$this->validator->validate_name($this->input->post('username'));
			$pass = $this->validator->hash($this->input->post('password'));
			
			// $this->d(!empty($this->validator->err_msg));
			// $this->d($this->validator->err_msg);
			
			if(!empty($this->validator->err_msg)){
				$this->data['err_msg'] = $this->validator->err_msg;
			}
			else{
				$logged = $this->sessionator->login($this->input->post('username'), $pass);
				if($logged){
					header("Location: ".base_url());
				}
			}
		}
		
		if($this->sessionator->is_logged){
			header("Location: ".base_url());
		}
		
		$this->data['content'] = 'login/index';
		$this->load->view($this->layout, $this->data);
	}
}
