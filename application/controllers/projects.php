<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projects extends MY_Controller {
/*
	public function Home (){
		parent::__construct();
	}
	*/
	public function index()
	{
		$this->data['js_plugins'] = 
		'<script type="text/javascript" src="'.base_url().'style/bs/js/pages/projects.js"></script>';
		$this->data['content'] = 'projects/index';
		$this->data['title'] = 'Quests';
		$this->data['page'] = 'projects';
		$this->load->view($this->layout, $this->data);
	}
}
