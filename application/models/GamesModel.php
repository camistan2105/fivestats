<?php  

class GamesModel extends CI_Model
{

	private $table_teams = "teams";
	private $table_teams_players = "teams_players";
	private $table_players = "players";
	private $table_games = "games";
	
	public function get_games()
	{
		return $this->db->select('g.id, g.date, g.team1_goals, g.team2_goals, g.is_played, t1.name as team1_name, t2.name as team2_name')
				->from($this->table_games . ' as g, ' . $this->table_teams . ' as t1, ' . $this->table_teams . ' as t2')
				->where('g.team1_id = t1.id AND g.team2_id = t2.id')
				->order_by('date', 'desc')
				->get()
				->result();
	}
}