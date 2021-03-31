<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends MY_Controller {
    
	public function index($id = "")
	{
		$id = intval($id);
		$page = "";
		$this->data['js_plugins'] = "";
		
		$is_index = false;
		if($id > 0){ 
			$query = "SELECT * FROM portfolio WHERE id=?";
			$result = $this->db->query($query, array(intval($id)));
			$page = 'portfolio/details';
			$this->data['js_plugins'] = '<script type="text/javascript" src="'.base_url().'style/bs/js/pages/portfolio_details.js"></script>';
		}
		else{
			$query = "SELECT * FROM portfolio";
			$result = $this->db->query($query);
			$page = 'portfolio/index';
			$this->data['js_plugins'] = '<script type="text/javascript" src="'.base_url().'style/bs/js/pages/portfolio_main.js"></script>';
		}
		
		$arr = $result->result();
		if(!$arr){
			show_404();
		}
		
		;
		$this->data['js_plugins'] .= $this->add_plugins_js(array("jqPagination/js/jquery.jqpagination.min.js", "jqPagination/js/scripts.js"));
		$this->data['css_plugins'] = $this->add_plugins_css(array("jqPagination/css/jqpagination.css"));
		
		$this->data['portfolio'] = $result->result();
		$this->data['content'] = $page;
		$this->data['title'] = 'The historical evidence';
		$this->data['page'] = 'portfolio';
		$this->load->view($this->layout, $this->data);
	}
	
}
