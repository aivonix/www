<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sessionator {
	
	private $CI;
	public $sess;
	public $fullname;
	public $is_logged;
	public $user_id = 0;
	public function Sessionator(){
		
    	$this->is_logged = false;
		
		$this->CI =& get_instance();
		$this->CI->load->library('session');
		// $this->CI->session->set_userdata("game_id", 0);
		$this->sess = $this->CI->session->all_userdata();
		// $this->start_game($params);
		$this->logged();
		
    }
    
    private function logged(){
    	
    	$this->CI->db->where("session_id", $this->sess['session_id']);
    	$this->CI->db->select("user_id");
    	$this->CI->db->from("session");
    	$res = $this->CI->db->get()->result();
    	$this->user_id = !$res['0']->user_id == NULL ? $res['0']->user_id : 0;
    	
    	if(!empty($this->user_id) && $this->user_id > 0){
	    	$this->is_logged = true;
	    	
	    	//get the username's fullname
	    	$this->CI->db->where('id', $this->user_id);
	    	$this->CI->db->select("CONCAT(u.firstname, ' ', u.lastname) AS fullname", FALSE);
	    	$this->CI->db->from("users AS u");
	    	$res = $this->CI->db->get()->result();
	    	$this->fullname = $res[0]->fullname;
    	}
    	else{
			$loc = base_url()."login";
			if(current_url() !== $loc){
	    		header("Location: ".$loc);
			}
    	}
    }
    
    public function login($user, $pass){
    	$res = $this->ci_query("SELECT id, username, password FROM users");
		// $this->d($user);
		// $this->d($pass);
    	foreach($res as $i){
			// $this->d($i);
    		if($i->username == $user && $i->password == $pass){
    			$this->user_id = $i->id;
				// $this->d( 'trueeee!!' );
    		}
    	}
    		
    	if((int)$this->user_id > 0){
    		// next line deletes past sessions 
	    	$this->CI->db->delete('session',array('user_id' => $this->user_id));
	    	
	    	// updates the defaultly created session_id with a user_id
	    	$this->CI->db->where('session_id', $this->sess['session_id']);
	    	$this->CI->db->update('session', array('user_id' => $this->user_id));
	    	return true;
    	}
    	return false;
    }
    
    public function logout(){
    	$this->CI->db->delete('session',array('user_id' => $this->user_id));
    }
    
    private function ci_query($query){
    	$res = $this->CI->db->query($query);
    	return ($res->result());
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