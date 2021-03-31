<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cards extends MY_Controller {

	
	public function index()
	{
		$res = $this->db->get("cards");
// 		$this->d($res->result());
		
		$this->data['cards_list'] = $res->result();
		$this->data['content'] = 'cards/index';
		$this->load->view($this->layout, $this->data);
	}
}
