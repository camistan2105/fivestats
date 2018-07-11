<?php

class Players extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PlayersModel');
	}

	public function index()
	{
		$data['players'] = $this->PlayersModel->get_players();
		$this->load->view('templates/Header');
		$this->load->view('players/PlayersView', $data);
		$this->load->view('templates/Footer');
	}

	// récupération des données d'un joueur en AJAX POST method
	public function get_player_data()
	{
		$post_data = $this->input->post();
		$player_data = array();
		$player_data['player'] = $this->PlayersModel->get_player_by_id($post_data['player_id']);
		$player_data['stats'] = $this->PlayersModel->get_player_played_games($post_data['player_id']);
		$player_data['stats'] += $this->PlayersModel->get_player_wins($post_data['player_id']);
		if($player_data['stats']['played_games'] > 0){
			$player_data['stats']['percent_wins'] = number_format((float)($player_data['stats']['wins'] / $player_data['stats']['played_games']) * 100, 2, '.', '');
		} else {
			$player_data['stats']['percent_wins'] = 0;
		}

		$player_data['stats'] += $this->PlayersModel->get_player_goals($post_data['player_id']);
		if($player_data['stats']['played_games'] > 0){
			$player_data['stats']['goals_per_game'] = number_format((float)($player_data['stats']['goals'] / $player_data['stats']['played_games']), 2, '.', '');
		} else {
			$player_data['stats']['goals_per_game'] = 0;
		}

		$player_data['stats'] += $this->PlayersModel->get_player_assists($post_data['player_id']);
		if($player_data['stats']['played_games'] > 0){
			$player_data['stats']['assists_per_game'] = number_format((float)($player_data['stats']['assists'] / $player_data['stats']['played_games']), 2, '.', '');
		} else {
			$player_data['stats']['assists_per_game'] = 0;
		}
		
		//$team_data['stats'] += $this->TeamsModel->get_losses($post_data['team_id']);
		//$team_data['stats'] += $this->TeamsModel->get_draws($post_data['team_id']);
		echo json_encode($player_data);
	}

	public function insert_player()
	{
		$post_data = $this->input->post();
		$this->PlayersModel->insert_player($post_data['player_name']);
	}
	
	//	L'affichage de la variable $output est le comportement par défaut.
//	public function _output($output)
//	{
//		var_dump($output);
//	}
}
