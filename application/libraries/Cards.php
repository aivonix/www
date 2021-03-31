<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cards extends Card_base {
	
	private $sess;
	protected $name;
	
	
}

abstract class Card_base {
	
	protected $CI;
	private $id;

	public function __construct(){
		$this->CI =& get_instance();
		$this->CI->load->library('mana');
		
	}
	public function get_card($id = 0){
		if(empty($id)){
			return false;
		}
		$this->CI->db->where('id', $id);
		$this->CI->db->select('*');
		$this->CI->db->from('cards');
	}
	
	public function play($id = 0){
		$args = array();
		call_user_func_array("card$id", $args);
	}
	
	private function card65(){
		
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