<?php
defined('BASEPATH') or exit('No direct script access allowed');

class loginmodel extends CI_Model
{
    public function fetch_data($user, $pass)
    {
        $this->db->select('name,password');
        $this->db->from('user');
        $this->db->where('name', $user);
        $this->db->where('password', $pass);
        $query = $this->db->get();
        return $query->result_array();
    }

/*
    public function check($email)
    {
        $this->db->select('email');
        $this->db->from('user');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->result_array();
    }*/
}