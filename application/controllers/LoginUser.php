<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginUser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
       
        $this->load->model('loginmodel');
        $this->load->library('form_validation');
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
                return redirect($redirect_to);
                $this->session->set_flashdata('error', 'ERROR_MESSAGE_HERE');
            } else {
                $this->load->view('frontpage');
                // $data['error'] = "error message";
                // $this->load->view('loginuser', $data);
            }
        }
    }
}