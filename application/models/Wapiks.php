<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wapiks extends CI_Model 
{
	public function LoadDataGenerals($Stat)
	{
		$this->db->select('*');
		$this->db->from('data_general');
		$this->db->where($Stat);
		return $this->db->get()->result();
	}
	public function LoadDataConts($Stat)
	{
		$this->db->select('*');
		$this->db->from('data_cont');
		$this->db->where($Stat);
		return $this->db->get()->result();
	}
	public function LoadDataHomeConts($Stat)
	{
		$this->db->select('*');
		$this->db->from('data_home_cont');
		$this->db->where($Stat);
		return $this->db->get()->result();
	}
	public function LoadDataTeams($Stat)
	{
		$this->db->select('*');
		$this->db->from('data_team');
		$this->db->where($Stat);
		return $this->db->get()->result();
	}
	public function LoadDataIncludes($Stat)
	{
		$this->db->select('*');
		$this->db->from('data_include');
		$this->db->where($Stat);
		return $this->db->get()->result();
	}
	public function LoadDataPlans($Stat)
	{
		$this->db->select('*');
		$this->db->from('data_plan');
		$this->db->where($Stat);
		return $this->db->get()->result();
	}
	/*public function SaveDatas($theInsert)
	{
		$this->db->insert("chefs", $theInsert);		
		if ($this->db->affected_rows() > 0) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}*/
}
