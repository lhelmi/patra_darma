<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPenunjang_model extends CI_Model
{
	function get_all()
	{	
    	$this->db->join('hubungi', 'datapenunjang.id_hubungi=hubungi.id_hubungi');
    	return $this->db->get('datapenunjang')->result_array();
	}

	function get_hub()
	{	
    	return $this->db->get('hubungi')->result_array();
	}

	function get_hub_by_id($id)
	{	
		$this->db->where('id_hubungi', $id);
    	return $this->db->get('hubungi')->row_array();
	}

	function get_by_id($id)
	{	
		$this->db->where('id_hubungi', $id);
    	return $this->db->get('datapenunjang')->result_array();
	}

	function insert($data)
	{	
		$this->db->insert_batch('datapenunjang', $data);
	}

	function update($data, $idbk)
    {
        $this->db->update_batch('datapenunjang', $data, $idbk);
    }

	function delete($id)
    {
    	$this->db->where('IdDP', $id);
        $this->db->delete('datapenunjang');
    }
}