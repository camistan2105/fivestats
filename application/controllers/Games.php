<?php

class Games extends CI_Controller {
	
	public function __construct()
	{
		//	Obligatoire
		parent::__construct();
		$this->load->model('GamesModel');
	}

	public function index()
	{
		$data['games'] = $this->GamesModel->get_games();
		$this->load->view('templates/Header');
		$this->load->view('games/GamesView', $data);
		$this->load->view('templates/Footer');
	}
	
		//	L'affichage de la variable $output est le comportement par défaut.
//	public function _output($output)
//	{
//		var_dump($output);
//	}
}
