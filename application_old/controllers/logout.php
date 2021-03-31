<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends MY_Controller {

	
	public function index(){
		if($this->sessionator && $this->sessionator->user_id){
			$this->sessionator->logout();
		}
		header("Location: ".base_url());
	}
}
