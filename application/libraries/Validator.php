<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validator {
	
	private $CI;
	
	private $salt1 = "daskj940`r90el230k-dsq=d-adk,oj8323ckj9scfkdskjif9";
	private $salt2 = "a0sd-k023(da@kdaljs900+&218hd.23.31.2dsaddaea";
	public $err_msg;
	private $errors = array(
			"First symbol must be a letter for: ",
			"Only letters and digits are allowed for: ",
			"Please enter a valid literal name for: ",
			"Please enter a ",
			"Please enter a Password",
			"Password too short, needs at least 8 symbols",
			"Password needs at least 1 lowercase letter",
			"Password needs at least 1 uppercase letter",
			"Password needs at least 1 digit",
			"Invalid email entered",
			"Please enter a Username", //10
			"Please enter an E-mail",
			"Username already exists",
			"E-mail already exists",
			); 
	
	public function Validator(){
		$this->CI =& get_instance();
		$this->CI->load->library('session');
    }
	public function hash($value){
		$temp = $this->hasher($value.$this->salt1);
		$temp2 = $this->hasher($temp.$this->salt2);
    	
		return $temp2;
    }
    
    public function validate_user($value){
    	
    	if(empty($value)){
    		$this->err_msg[] = $this->errors[10];
    		return false;
    	}
    	
    	//if user exists in db
    	$email = $this->CI->db->where('username', $value);
    	$email = $this->CI->db->get('users')->result();
    	if(!empty($email)){
    		$this->err_msg[] = $this->errors[12];
    		return false;
    	}
    	
    	if( !preg_match("~([A-Za-z])~", substr($value, 0, 1)) ){
    		$this->err_msg[] = $this->errors[0].$value;
    	}
    	if( !preg_match("~^[A-Z|a-z|0-9]+$~", $value) ){
    		$this->err_msg[] = $this->errors[1].$value;
    	}
    	
    	if(!empty($this->err_msg)){ return false; }
    }
    
    public function validate_pass($value){
    	 
    	if(empty($value)){
    		$this->err_msg[] = $this->errors[4];
    		return false;
    	}
    	 
    	if( strlen($value) < 8 ){
    		$this->err_msg[] = $this->errors[5];
    	}
    	if( !preg_match("~[A-Z]+~", $value) ){
    		$this->err_msg[] = $this->errors[7];
    	}
    	if( !preg_match("~[a-z]+~", $value) ){
    		$this->err_msg[] = $this->errors[6];
    	}
    	if( !preg_match("~[0-9]+~", $value) ){
    		$this->err_msg[] = $this->errors[8];	
    	}
    	 
    	if(!empty($this->err_msg)){ return false; }
    }
    
    public function validate_name($value, $optional = ""){
    	
    	if(empty($value)){
    		$this->err_msg[] = $this->errors[3].$optional;
    		return false;
    	}
    	
    	if( !preg_match("~^[A-Za-z]+$~", $value) ){
    		$this->err_msg[] = $this->errors[2].$value;
    	}
    	
    	if(!empty($this->err_msg)){ return false; }
    }
    
    public function validate_email($value){
    	
    	if(empty($value)){
    		$this->err_msg[] = $this->errors[11];    		
    		return false;
    	}
    	
    	//if email exists in db
    	$email = $this->CI->db->where('email', $value);
    	$email = $this->CI->db->get('users')->result();
    	if(!empty($email)){
    		$this->err_msg[] = $this->errors[13];
    		return false;
    	}
    	
    	if( !preg_match("~^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$~i", $value) ){
    		$this->err_msg[] = $this->errors[9];
    	}
    	
    	if(!empty($this->err_msg)){ return false; }
    }
    
    
    private function hasher($value){
    	$temp = sha1($value);
    	return strrev($temp);
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
    /*
    private function CheckPassword($pwd){
	    $str = array("Blank","Very Weak","Weak","Medium","Strong","Very Strong");
	    $score = 1;
	    
	    if (strlen($pwd) < 1){
			return $strength[0];
	    }
    	if (strlen($pwd) < 4){
			return $strength[1];
    	}
    	if (strlen($pwd) >= 8){
			$score++;
    	}
    	if (strlen($pwd) >= 10){
			$score++;
    	}
    	if (preg_match("/[a-z]/", $pwd) && preg_match("/[A-Z]/", $pwd)){
			$score++;
    	}
		if (preg_match("/[0-9]/", $pwd)){
			$score++;			
		}
		if (preg_match("/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/", $pwd)){
			$score++;
		}
    	return($str[$score]);    	
    }*/
    
}