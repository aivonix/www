<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hearthstone extends MY_Controller {
/*
	public function Home (){
		parent::__construct();
	}
	*/
	public function __construct(){
		parent::__construct();
		$this->data['title'] = 'Hearthstone';
		$this->data['overlay_type'] = "type1";
		$this->data['js_scripts'] = array('pages/hs_menu.js');
		$this->load->library('cards');
	}
	public function index(){
		
// 		$this->load->library('mana');
// 		$this->data['mana_score'] = $this->mana->score;
		
		
// 		$this->db->id('games_queue');
		
		$this->check_for_game();
		$this->check_for_queue();
		
		//TODO: waiting for game
		
		$this->data['content'] = 'hearthstone/index';
		$this->load->view($this->layout, $this->data);
	}
	
	
	public function gamelist(){
	
		$this->db->select('CONCAT(u1.firstname, " ", u1.lastname) AS player1_name', FALSE);
		$this->db->select('CONCAT(u2.firstname, " ", u2.lastname) AS player2_name', FALSE);
		$this->db->select('games_queue.id AS id');
		$this->db->from('games_queue');
		$this->db->join('users AS u1', 'games_queue.player1 = u1.id', 'left');
		$this->db->join('users AS u2', 'games_queue.player2 = u2.id', 'left');
// 		$this->d($this->db->get()->result());
		
		$this->data['games_queue_list'] = $this->db->get()->result();
		$this->data['content'] = 'hearthstone/gamelist';
		$this->load->view($this->layout, $this->data);
	
	}
	public function game($flags = ""){
		
		if(!empty($flags)){
			$this->game_flag_handler($flags);
		}
// 		$this->d($this->sessionator->sess);
		
		if(empty($this->sessionator->sess['game_id'])){
			$this->db->select('players, id');
			$this->db->from('games');
			$res = $this->db->get()->result();
			foreach($res as $i){
				$temp = explode('|', $i->players);
				if($this->sessionator->user_id == $temp[0] || $this->sessionator->user_id == $temp[1]){
					$this->session->set_userdata('game_id' , $i->id);
					$loc = base_url()."hearthstone";
					header("Location: ".$loc);
				}
			}
		}
		$this->db->where('id', $this->sessionator->sess['game_id']);
		$this->db->select('*');
		$this->db->from('games');
		$res = $this->db->get()->result();
// 		$this->d($res[0]);
		
		$players = explode('|', $res[0]->players);
		
		if( $players[0] == $this->sessionator->user_id ){
			$player = $players[0];
			$opponent = $players[1];
		}
		else{
			$player = $players[1];
			$opponent = $players[0];			
		}
		
		$this->db->where('id', $player);		
		$this->db->select('username');
		$this->db->from('users');
		$res = $this->db->get()->result();
		$this->data['player_name'] = $res[0]->username;
		
		$this->db->where('id', $opponent);
		$this->db->select('username');
		$this->db->from('users');
		$res = $this->db->get()->result();
		$this->data['opponent_name'] = $res[0]->username;
		
// 		$this->d($this->data);

		$this->data['content'] = 'hearthstone/game';
		$this->load->view($this->layout, $this->data);
	}
	
	public function play($id = ''){
// 		$this->d($id);
		$messages = array(
				"Game request sent, redirecting in ",
				"Game is already running.",
				);
		$msg = array();
		
		if(!empty($id)){
			$this->db->select("*");
			$this->db->from("games_queue");
			$this->db->where("id", $id);
			
			$res = $this->db->get()->result();
// 			$this->d($res[0]);
			if( !empty($res[0]->player1) && empty($res[0]->player2) ){
				$arr = array(
						"player1" => $res[0]->player1, 
						"player2" => $this->sessionator->user_id, 
						);
				$this->db->where("id", $id);
				$this->db->update("games_queue", $arr);
				$msg['text'] = $messages[0];
				$msg['flag'] = 'redirect';
				$this->data['js_scripts'][] = "pages/start_game.js";
			}
			if( !empty($res[0]->player1) && !empty($res[0]->player2) ){
				$msg['text'] = $messages[1];
			}
			
		}
		else{
			$flag = 0;
			$this->db->select("*");
			$this->db->from("games_queue");
			$res = $this->db->get()->result();
			foreach($res as $i){
				if($i->player1 == $this->sessionator->user_id){
					$flag = 1;
				}
			}
			if(!$flag){
				$arr = array(
						'player1' => $this->sessionator->user_id,
				);
				$this->db->insert("games_queue", $arr);
			}
		}
		$this->data['content'] = 'hearthstone/play';
		$this->data['messages'] = $msg;
		$this->load->view($this->layout, $this->data);
	}
	
	
	private function game_flag_handler($flags){
		$this->d($flags);
	}
	
	private function check_for_game(){
		$this->db->select('players');
		$this->db->from('games');
		$res = $this->db->get()->result();
	
		foreach($res as $i){
			$arr = explode("|", $i->players);
			foreach($arr as $r){
				if($r == $this->sessionator->user_id){
					$loc = base_url()."hearthstone/game";
					header("Location: ".$loc);
				}
			}
		}
	}
	
	private function check_for_queue(){
		$this->db->where('player1', $this->sessionator->user_id);
		$this->db->or_where('player2', $this->sessionator->user_id);
		$this->db->select('*');
		$this->db->from('games_queue');
		$res = $this->db->get()->result();
		//TODO: fix start of more than 1 game, join of more than 1 game
		if( !empty($res[0]->player1) && !empty($res[0]->player2) ){
				
			$arr = array(
					'players' => $res[0]->player1."|".$res[0]->player2,
			);
			$this->db->insert("games", $arr);
			$game_id = $this->db->insert_id();
				
			$arr = array(
					'game_id' => $game_id,
					'action' => 1,
					'player_id' => '0',
			);
			$this->db->insert("history", $arr);
			$history_id = $this->db->insert_id();
				
			$arr = array(
					'game_id' => $game_id,
					'p1_id' => $res[0]->player1,
					'p2_id' => $res[0]->player2,
			);
			$this->db->insert("state", $arr);
			$state_id = $this->db->insert_id();
				
				
			//for the redundant part
			$arr = array(
					'state_id' => $state_id,
					'history_id' => $history_id,
			);
			$this->db->where("id", $game_id);
			$this->db->update("games", $arr);
				
			$this->db->delete('games_queue', array('id' => $res[0]->id));
			$this->session->set_userdata("game_id", $game_id);
			$loc = base_url()."hearthstone/game";
			header("Location: ".$loc);
		}
	}
	
}
