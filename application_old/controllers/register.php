<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends MY_Controller {

	public function index(){
		
		if($this->input->post()){
			
			$this->load->library('Validator');
// 			$this->d($this->input->post());
// 			$this->d($this->validator->hash($this->input->post('password')));
			
			$this->validator->validate_user($this->input->post('username'));
			$this->validator->validate_pass($this->input->post('password'));
			$this->validator->validate_name($this->input->post('firstname'), "First name");
			$this->validator->validate_name($this->input->post('lastname'), "Last name");
			$this->validator->validate_email($this->input->post('email'));
			
			if(!empty($this->validator->err_msg)){
				$this->data['err_msg'] = $this->validator->err_msg;
			}
			else{
				$arr['username'] = $this->input->post('username');
				$arr['password'] = $this->validator->hash($this->input->post('password'));
				$arr['firstname'] = $this->input->post('firstname');
				$arr['lastname'] = $this->input->post('lastname');
				$arr['email'] = $this->input->post('email');
				$this->db->insert('users', $arr);
				
				$sess = array("email" => $arr['email']);
				$this->session->set_userdata($sess);
				$loc = base_url()."register/success";
				header('Location: '.$loc);
			}
		}
		
		$this->data['content'] = 'register/index';
		$this->load->view($this->layout, $this->data);
	}
	
	public function success(){
		if($this->session->userdata('email')){
			$this->data['email'] = $this->session->userdata('email');
			$this->session->unset_userdata('email');
		}else{
			$this->data['js_scripts'][] = "pages/register.js";
// 			$this->d($this->data);			
		}
		
		$this->data['content'] = 'register/success';
		$this->load->view($this->layout, $this->data);
	}
}
