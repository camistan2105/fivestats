<?php

class PlayersController extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PlayersModel');
	}

	public function index()
	{
		//$data['teams'] = $this->TeamsModel->get_teams();
		//$this->load->view('templates/Header');
		//$this->load->view('teams/TeamsView', $data);
		//if Admin
		//$this->load->view('teams/TeamsCreationView', $data);
		//$this->load->view('templates/Footer');
	}

	// récupération des joueurs en AJAX POST method
	public function get_players()
	{
		$players = $this->PlayersModel->get_players();
		echo json_encode($players);
	}
	
		//	L'affichage de la variable $output est le comportement par défaut.
//	public function _output($output)
//	{
//		var_dump($output);
//	}
}
