<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
/*
	public function Home (){
		parent::__construct();
	}
	*/
	public function index()
	{
		
		$this->load->library('mana');
		$this->load->library('game');
		$this->data['mana_score'] = $this->mana->score;
		
		
		$this->get_projects();
		
		$this->data['content'] = 'home/index';
		$this->load->view($this->layout, $this->data);
	}
	
	private function get_projects(){
		$res = $this->db->get("projects")->result();
// 		$this->d($res);
	}
}
