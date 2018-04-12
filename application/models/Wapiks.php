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
