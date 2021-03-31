<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mana {
	
	public $score;
	private $score_max = 10;
    public function Mana()
    {
		$this->score = 2;
		echo "MANA called";
    }
	
	public function turn_increase(){
		if( $this->score < $this->score_max ){
			$this->score++;
		}
	}
}
