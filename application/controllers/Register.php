<?php
defined('BASEPATH') or exit('No direct Script access allowed');

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       
        $this->load->model('registermodel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view("register");

    }

    //Register------------------------------------------------------------------------------------------
    public function insertUser()
    {
        $redirect_to='register';
       
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('user', 'UserName', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');

        if ($this->form_validation->run()) {
            $data=[
                'email'=> $this->input->post('email'),
                'name'=> $this->input->post('user'),
                'password'=> $this->input->post('pass'),
                
                ];
            $this->registermodel->insert($data);
            $this->session->set_flashdata('status', 'User Details Inserted Successfully');
            return redirect($redirect_to);
        } else {
            $this->session->set_flashdata('warn', 'Check the Details Again');
            return redirect($redirect_to);
        }
    }
 
    
}