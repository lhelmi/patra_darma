<?php

class Hubungi_model extends CI_Model
{
    public $table = 'hubungi';
    public $id = 'id_hubungi';

    function get_kode()
    {
        $this->db->select('RIGHT(hubungi.id_hubungi,4) as kode', FALSE);
        $this->db->order_by('id_hubungi','DESC');    
        $this->db->limit(1);
        $query = $this->db->get('hubungi');
        if($query->num_rows() <> 0){      
            $data = $query->row();      
            $kode = intval($data->kode) + 1;    
        }else {      
            $kode = 1;    
        }
        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodejadi = "KdH-".$kodemax;
        return $kodejadi;  
    }

    public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function insert_admin_notif($data)
    {
        $this->db->insert_batch('admin_notif', $data);
    }

    public function insert_pengacara_notif($data)
    {
        $this->db->insert_batch('pengacara_notif', $data);
    }

    public function kirim_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
