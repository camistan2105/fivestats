<?php

class TeamsController extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('TeamsModel');
	}

	public function index()
	{
		$data['teams'] = $this->TeamsModel->get_teams();
		$this->load->view('templates/Header');
		$this->load->view('teams/TeamsView', $data);
		//if Admin
		//$this->load->view('teams/TeamsCreationView', $data);
		$this->load->view('templates/Footer');
	}

	// récupération des joueurs d'une équipe en AJAX POST method
	public function get_players()
	{
		$post_data = $this->input->post();
		$players = $this->TeamsModel->get_players_by_team($post_data['team_id']);
		echo json_encode($players);
	}
	
		//	L'affichage de la variable $output est le comportement par défaut.
//	public function _output($output)
//	{
//		var_dump($output);
//	}
}
