<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends MY_Controller {
 
	public function index()
	{
		$this->output->set_status_header('404');
		
        $this->data['title'] = 'Four oh! Four';
		$this->data['content'] = 'error/index';
        $this->data['page'] = 'error';
        $this->load->view($this->layout, $this->data);
		
	}
}