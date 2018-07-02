<?php  

class TeamsModel extends CI_Model
{

	private $table_teams = "teams";
	private $table_teams_players = "teams_players";
	private $table_players = "players";
	private $table_games = "games";
	
	public function get_teams()
	{
		return $this->db->select('id, name')
				->from($this->table_teams)
				->order_by('id', 'desc')
				->get()
				->result();
	}

	public function get_team_by_id($team_id)
	{
		return $this->db->select('*')
				->from($this->table_teams)
				->where('id = ' . $team_id)
				->get()
				->result_array()[0];
	}

	public function get_players_by_team($team_id)
	{
		return $this->db->select('p.id, p.name')
				->from($this->table_players . ' as p, ' . $this->table_teams_players . ' as tp')
				->where('tp.team_id = ' . $team_id . ' AND tp.player_id = p.id')
				->get()
				->result();
	}

	public function get_team_played_games($team_id)
	{
		return $this->db->select('count(g.id) as played_games')
				->from($this->table_games . ' as g')
				->where('(g.team1_id = ' . $team_id . ' OR g.team2_id = ' . $team_id . ') AND g.is_played = 1')
				->get()
				->result_array()[0];
	}

	public function get_wins($team_id)
	{
		return $this->db->select('count(g.id) as wins')
				->from($this->table_games . ' as g')
				->where('((team1_id = ' . $team_id . ' AND team1_goals > team2_goals) OR (team2_id = ' . $team_id . ' AND team2_goals > team1_goals)) AND g.is_played = 1')
				->get()
				->result_array()[0];
	}

	public function get_losses($team_id)
	{
		return $this->db->select('count(g.id) as losses')
				->from($this->table_games . ' as g')
				->where('((team1_id = ' . $team_id . ' AND team1_goals < team2_goals) OR (team2_id = ' . $team_id . ' AND team2_goals < team1_goals)) AND g.is_played = 1')
				->get()
				->result_array()[0];
	}

	public function get_draws($team_id)
	{
		return $this->db->select('count(g.id) as draws')
				->from($this->table_games . ' as g')
				->where('team1_goals = team2_goals AND (team1_id = ' . $team_id . ' OR team2_id = ' . $team_id . ') AND g.is_played = 1')
				->get()
				->result_array()[0];
	}
}