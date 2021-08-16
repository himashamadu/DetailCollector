<?php
defined('BASEPATH') or exit('No direct Script access allowed');

class Register extends CI_Controller
{
    public function index()
    {
        $this->load->view("register");
    }
}