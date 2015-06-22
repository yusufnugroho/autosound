<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_sound extends CI_Model {
	public function __construct() {
		parent::__construct();
		
	}
	public function insert($tablename, $data)
	{
		return $this->db->insert($tablename, $data);
	}
	public function gettable($tablename)
	{
		return $this->db->query("SELECT * FROM $tablename")->result_array();
	}

	public function select_where($tablename, $where)
	{
		$data = $this->db->get_where($tablename, $where);
		return $data;
	}
	public function insertFile($data)
	{
		return $this->db->insert('soundfile', $data);
	}
	public function getID($tablename)
	{
		return $this->db->query("select * from $tablename where 1 ORDER BY ID_MATERI DESC LIMIT 1")->result_array();
	}
	public function getTag()
	{
		$this->db->from('tag_sound');
		$this->db->order_by("tag", "asc");
		$query = $this->db->get(); 
		return $query->result_array();
	}
	public function delete($where, $id)
	{
		$this->db->delete($where, $id); 
	}
}
