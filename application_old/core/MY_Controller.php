<?php

class MY_Controller extends CI_Controller {

	protected $layout;
	protected $data;
	
	public function __construct(){
		parent::__construct();
		$this->layout = 'layout/global';
		
		//helpers
		$this->load->helper('html');
		$this->load->helper('url');
		
		//libs
//		$this->load->library("sessionator");
		// $this->d($this->sessionator->sess);
		
		$this->data['user_id'] = $this->sessionator->user_id;
		$this->data['fullname'] = $this->sessionator->fullname;
	}
	
	public function d($var = 'empty debug?', $label = null, $return = null)
	{
		$regexps = array
		(
				'/\[([\w\d]*)(?>:(protected|private))\] =>/u' => '[<strong style="color: #069;">\\1</strong> : <span style="color: #666;">\\2</span>] =>',
				'/\[([\w\d].*)] =>/u' => '[<strong style="color: #069;">\\1</strong>] =>',
		);

		$dump = preg_replace
		(
				array_keys($regexps),
				array_values($regexps),
				print_r($var, true)
		);

		$dump = '<pre style="font-size: 13px; font-family: Verdana, sans-serif; background: #F5F5F5;">'.
				'<strong style="font-size: 15px; line-height: 40px;">Debug <em>('.gettype($var).')</em>: '.$label.'</strong>'.
				"\n".$dump."\n".
				'</pre><hr />';
		if($return === null){
			echo $dump;
		}

		return $return === null ? $var : $dump;
	}
	
	
	
}
?>