<?php  

class PlayersModel extends CI_Model
{

	private $table_teams = "teams";
	private $table_teams_players = "teams_players";
	private $table_players = "players";
	private $table_games = "games";
	
	public function get_players()
	{
		return $this->db->select('id, name')
				->from($this->table_players)
				->order_by('id', 'desc')
				->get()
				->result();
	}
	
}