<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
/*
	public function Home (){
		parent::__construct();
	}
	*/
	public function index()
	{
		
//		$this->load->library('mana');
		$this->data['content'] = 'home/index';
		$this->data['title'] = 'Homeworld';
		$this->data['page'] = 'home';
		$this->load->view($this->layout, $this->data);
	}
	
}
