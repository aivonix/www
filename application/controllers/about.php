<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends MY_Controller {
    
	public function index()
	{
		$this->data['content'] = 'about/index';
		$this->data['title'] = 'A little about me';
		$this->data['page'] = 'about';
		$this->load->view($this->layout, $this->data);
	}
	
}
