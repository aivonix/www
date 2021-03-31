<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends MY_Controller {
	public function index(){

		$this->data['content'] = 'portfolio/index';
		$this->load->view($this->layout, $this->data);
	}
}
