<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Game {
	
	private $CI;
	private $sess;
    public function Game()
    {
		/* Create a game */
		$this->CI =& get_instance();
		// $this->start_game($params);
    }
	
	private function start_game($params){
		
		// $query = $this->CI->db->query("SELECT * FROM cards;");
		
		if( empty($params['p1id']) ){
			echo "p1 id missing";
		}
		else if( empty($params['p2id']) ){
			echo "p2 id missing";
		}
		else{
			$this->CI->db->query("INSERT INTO games (players, state_id, history_id, finished) VALUES ('".$params['p1id'].", ".$params['p2id']."', 1, 1, 0)");$this->db->insert('posts',$post_data);
			$game_id= $this->CI->db->insert_id();
				$vals = $game_id.", ".$params['p1id'].", ". $params['p1_cards'].", p1_hero_hp, [field_cards], ".$params['p2id'].", ". $params['p2_cards'].", p2_hero_hp";
			$this->CI->db->query("INSERT INTO state (game_id, p1_id, p1_cards, p1_hero_hp, field_cards, p2_id, p2_cards, p2_hero_hp) VALUES (".$vals.")");
			$this->CI->db->query("INSERT INTO history (game_id, action, player_id, visible) VALUES (".$game_id.", 0, 0, 0)");
		}
	}
}
