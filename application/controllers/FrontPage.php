<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FrontPage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
       
        $this->load->model('frontmodel');
        $this->load->library('form_validation');
    }

    
    public function index()
    {
        $data["fetch_data"] = $this->frontmodel->fetch_data();
        $this->load->view('frontpage', $data);
    }


//Insert---------------------------------------------------------------------------------------------------------
    public function insert()
    {
        $redirect_to='frontpage';
        $this->form_validation->set_rules("name", "Full Name", "required");
        $this->form_validation->set_rules("age", "Age", "required");
        $this->form_validation->set_rules("address", "Address", "required");
        $this->form_validation->set_rules("contact", "Contact", "required");
        $this->form_validation->set_rules("email", "Email", "required");

        if ($this->form_validation->run()) {
            $data=[
                'name'=> $this->input->post('name'),
                'age'=> $this->input->post('age'),
                'address'=> $this->input->post('address'),
                'contact'=> $this->input->post('contact'),
                'email'=> $this->input->post('email'),
                ];
            $this->frontmodel->insert($data);
            $this->session->set_flashdata('status', 'User Details Inserted Successfully');
            return redirect($redirect_to);
        } else {
            $this->session->set_flashdata('warn', 'Check the Details Again');
            return redirect($redirect_to);
        }
    }


//Edit------------------------------------------------------------------------------------------------    
    public function edit($id)
    {
        $data["edit"] = $this->frontmodel->edit($id);
        $this->load->view('edit', $data);
        // $this->fmodel->edit($id);
    }

//Update-------------------------------------------------------------------------------------------------------
    public function update($id)
    {
        $redirect_to='frontpage';
        $this->form_validation->set_rules("name", "Full Name", "required");
        $this->form_validation->set_rules("age", "Age", "required");
        $this->form_validation->set_rules("address", "Address", "required");
        $this->form_validation->set_rules("contact", "Contact", "required");
        $this->form_validation->set_rules("email", "Email", "required");

        if ($this->form_validation->run()) {
            $data=[
        'name'=> $this->input->post('name'),
        'age'=> $this->input->post('age'),
        'address'=> $this->input->post('address'),
        'contact'=> $this->input->post('contact'),
        'email'=> $this->input->post('email'),
        ];
            $this->frontmodel->update($data, $id);
            return redirect($redirect_to);
        } else {
            $this->edit($id);
        }
    }

//Delete--------------------------------------------------------------------------------------------    
    public function delete($id)
    {
        $redirect_to='frontpage';
        $this->frontmodel->delete($id);
        return redirect($redirect_to);
    }

}