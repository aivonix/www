<?php

class MY_Controller extends CI_Controller {

	protected $layout;
	protected $data;
	
	public function __construct(){
		parent::__construct();
		
		//helpers
		$this->load->helper('html');
		$this->load->helper('url');
		
		//layout
		$this->layout = 'layout/global';
		$this->data['twitter'] = $this->twitter_styler();
		//libs
//		$this->load->library("sessionator");
		// $this->d($this->sessionator->sess);
		
//		$this->data['user_id'] = $this->sessionator->user_id;
//		$this->data['fullname'] = $this->sessionator->fullname;
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
	
	
	public function add_plugins_js($arr){
		$str = "";
		foreach($arr as $row){
			$str .= '<script type="text/javascript" src="'.base_url().'style/plugins/'.$row.'"></script>';
		}
		return $str;
	}	
	public function add_plugins_css($arr){
		$str = "";
		foreach($arr as $row){
			$str .= link_tag('style/plugins/'.$row);
		}
		return $str;
	}
	
	private function twitter_styler(){
		$filename = "application/views/layout/twitter.php";
		$handle = fopen($filename, "r");
		$contents = fread($handle, filesize($filename));
		fclose($handle);
		//$contents = file_get_contents($filename);
		
		$link_tag = link_tag('style/bs/css/twitter.css');
		//$str = str_replace('http://platform.twitter.com/embed/timeline.c01a994c40a2efa4d">', 'http://platform.twitter.com/embed/timeline.c01a994c40a2efa4d">'.$link_tag, $contents);
// 		echo $str;exit;
		return $contents;
	}
	
}
?>