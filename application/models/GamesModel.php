<?php  

class GamesModel extends CI_Model
{

	protected $table = "games";
	
	public function get_games()
	{
		return $this->db->select('*')
				->from($this->table)
				->order_by('date', 'desc')
				->get()
				->result();
	}
}