<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriMasalah_model extends CI_Model
{
	function get_all()
	{	
    	return $this->db->get('kategorimasalah')->result_array();
	}

	function insert($data)
	{	
		$this->db->insert('kategorimasalah', $data);
	}

	function get_by_id($id)
	{	
		$this->db->where('IdKategori', $id);
    	return $this->db->get('kategorimasalah')->row_array();
	}
	
	function update($id, $data)
    {
        $this->db->where('IdKategori', $id);
        $this->db->update('kategorimasalah', $data);
    }

    function delete($id)
    {
    	$this->db->where('IdKategori', $id);
        $this->db->delete('kategorimasalah');
    }
}

?>