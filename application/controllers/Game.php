<?php

class Game extends CI_Controller {
	
	public function __construct()
	{
		//	Obligatoire
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('game_creation');
	}
	
		//	L'affichage de la variable $output est le comportement par défaut.
//	public function _output($output)
//	{
//		var_dump($output);
//	}
}
