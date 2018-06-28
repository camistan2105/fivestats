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
		$this->load->view('teams/TeamsDisplayView', $data);
		//if Admin
		//$this->load->view('teams/TeamsCreationView', $data);
		$this->load->view('templates/Footer');
	}
	
		//	L'affichage de la variable $output est le comportement par défaut.
//	public function _output($output)
//	{
//		var_dump($output);
//	}
}
