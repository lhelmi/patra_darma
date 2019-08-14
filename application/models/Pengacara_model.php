<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengacara_model extends CI_Model
{
	function get_all()
	{	
    	return $this->db->get('pengacara')->result_array();
	}

	function insert($data)
	{	
		$this->db->insert('pengacara', $data);
	}

	function get_by_id($id)
	{	
		$this->db->where('IdPengacara', $id);
    	return $this->db->get('pengacara')->row_array();
	}
	
	function update($id, $data)
    {
        $this->db->where('IdPengacara', $id);
        $this->db->update('pengacara', $data);
    }

    function delete($id)
    {
    	$this->db->where('IdPengacara', $id);
        $this->db->delete('pengacara');
    }
}

?>