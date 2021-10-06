<?php
defined('BASEPATH') or exit('No direct script access allowed');

class forgetmodel extends CI_Model
{
  
    public function check($email)
    {
        $this->db->select('email');
        $this->db->from('user');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->result_array();
    }

     public function update($email, $pass){
        $this->db->where('email', $email);
        $this->db->set('password', $pass);
        return $this->db->update('user');
     }
}