<?php  

class TeamsModel extends CI_Model
{

	protected $table = "teams";
	
	public function get_teams()
	{
		return $this->db->select('id, name')
				->from($this->table)
				->order_by('id', 'desc')
				->get()
				->result();
	}
}