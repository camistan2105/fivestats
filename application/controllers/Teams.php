<?php

class Teams extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('TeamsModel');
		$this->load->model('PlayersModel');
	}

	public function index()
	{
		$data['teams'] = $this->TeamsModel->get_teams();
		//if admin load players
		$data['players'] = $this->PlayersModel->get_players();
		$this->load->view('templates/Header');
		$this->load->view('teams/TeamsView', $data);
		//if Admin
		//$this->load->view('teams/TeamsCreationView', $data);
		$this->load->view('templates/Footer');
	}

	// récupération des données d'une équipe en AJAX POST method
	public function get_team_data()
	{
		$post_data = $this->input->post();
		$team_data = array();
		$team_data['team'] = $this->TeamsModel->get_team_by_id($post_data['team_id']);
		$team_data['players'] = $this->TeamsModel->get_players_by_team($post_data['team_id']);
		$team_data['stats'] = $this->TeamsModel->get_team_played_games($post_data['team_id']);
		$team_data['stats'] += $this->TeamsModel->get_wins($post_data['team_id']);
		$team_data['stats'] += $this->TeamsModel->get_losses($post_data['team_id']);
		$team_data['stats'] += $this->TeamsModel->get_draws($post_data['team_id']);
		echo json_encode($team_data);
	}

	public function insert_team()
	{
		$post_data = $this->input->post();
		$this->TeamsModel->insert_team($post_data['team_name'], $post_data['team_players']);
	}
	
		//	L'affichage de la variable $output est le comportement par défaut.
//	public function _output($output)
//	{
//		var_dump($output);
//	}
}
