<?php  

class TeamsModel extends CI_Model
{

	private $table_teams = "teams";
	private $table_teams_players = "teams_players";
	private $table_players = "players";
	
	public function get_teams()
	{
		return $this->db->select('id, name')
				->from($this->table_teams)
				->order_by('id', 'desc')
				->get()
				->result();
	}

	public function get_players_by_team($team_id)
	{
		return $this->db->select('p.id, p.name')
				->from($this->table_players . ' as p, ' . $this->table_teams_players . ' as tp')
				->where('tp.team_id = ' . $team_id . ' AND tp.player_id = p.id')
				->get()
				->result();
	}
}