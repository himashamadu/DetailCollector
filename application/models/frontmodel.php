<?php
defined('BASEPATH') or exit('No direct script access allowed');

class frontmodel extends CI_Model
{
    public function fetch_data()
    {
        $query = $this->db->get('person');
        return $query;
    }

    public function insert($data)
    {
        return $this->db->insert('person', $data);
    }

    public function edit($id)
    {
        $query = $this->db->get_where('person', ['id' => $id]);
        return $query->row();
    }

    public function update($data, $id)
    {
        return $this->db->update('person', $data, ['id' => $id]);
    }

    public function delete($id)
    {
        return $this->db->delete('person', ['id' => $id]);
    }
}