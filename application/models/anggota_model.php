<?php

class anggota_model extends CI_Model {

    private $table ='anggota';

    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function get_by_id($no)
    {
        $this->db->where('no',$no);
        return $this->db->get('anggota')->row();
    }
    public function delete($no)
    {
        return $this->db->delete($this->table,['no'=>$no]);
    }
    public function update($no, $data)
    {
        $this->db->where('no',$no);
        return $this->db->update($this->table, $data);
    }
}