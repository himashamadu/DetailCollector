<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginUser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
       
        $this->load->model('loginmodel');
        $this->load->library('form_validation');
        $this->load->model('frontmodel');
    }

    public function index()
    {
        $this->load->view("loginuser");

       
    }

    public function login_user()
    {
        $this->form_validation->set_rules('user', 'Username', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');
        
        $redirect_to = 'loginuser';

        if ($this->form_validation->run()) {
            $user=$this->input->post('user');
            $pass=$this->input->post('pass');
            $result=$this->loginmodel->fetch_data($user, $pass);
            
            if (empty($result)) {
                $this->session->set_flashdata('warn', 'Check the Details Again');
                return redirect($redirect_to);
            } else {

                $data["fetch_data"] = $this->frontmodel->fetch_data();
                $this->load->view('frontpage', $data);
                $this->load->view('frontpage');
            }
        }
    }
}