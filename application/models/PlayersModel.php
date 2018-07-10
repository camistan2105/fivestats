<?php  

class PlayersModel extends CI_Model
{

	private $table_teams = "teams";
	private $table_teams_players = "teams_players";
	private $table_players = "players";
	private $table_games = "games";
	private $table_goals_players_games = "goals_players_games";
	
	public function get_players()
	{
		return $this->db->select('id, name')
				->from($this->table_players)
				->order_by('id', 'desc')
				->get()
				->result();
	}

	public function get_player_by_id($player_id)
	{
		return $this->db->select('*')
				->from($this->table_players)
				->where('id = ' . $player_id)
				->get()
				->result_array()[0];
	}

	public function get_player_played_games($player_id)
	{
		return $this->db->select('count(g.id) as played_games')
				->from($this->table_games . ' as g, ' . $this->table_teams . ' as t, ' . $this->table_teams_players . ' as tp')
				->where('tp.player_id = ' . $player_id . '
					AND tp.team_id = t.id
					AND (g.team1_id = t.id OR g.team2_id = t.id) 
					AND g.is_played = 1')
				->get()
				->result_array()[0];
	}

	public function get_player_wins($player_id)
	{
		return $this->db->select('count(g.id) as wins')
				->from($this->table_games . ' as g, ' . $this->table_teams . ' as t, ' . $this->table_teams_players . ' as tp')
				->where('tp.player_id = ' . $player_id . '
					AND tp.team_id = t.id
					AND ((g.team1_id = t.id AND g.team1_goals > g.team2_goals) OR (g.team2_id = t.id AND g.team2_goals > g.team1_goals)) 
					AND g.is_played = 1')
				->get()
				->result_array()[0];
	}

	public function get_player_goals($player_id)
	{
		return $this->db->select('sum(gpg.goals) as goals')
				->from($this->table_goals_players_games . ' as gpg')
				->where('gpg.player_id = ' . $player_id)
				->get()
				->result_array()[0];
	}

	public function insert_player($player_name)
	{
		$data = array(
		   'name' => $player_name
		);

		$this->db->insert($this->table_players, $data);
	}
	
}