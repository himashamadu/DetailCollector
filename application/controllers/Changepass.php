<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Changepass extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
       
        $this->load->model('forgetmodel');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('changepass');
    }

  public function update(){
    $redirect_to='changepass';
    $redirect_to2='loginuser';

    $pass=$this->input->post('pass');
    $passRes=$this->input->post('passRes');
    $email=$this->input->post('email');
    
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[6]');
    $this->form_validation->set_rules('passRes', 'Password', 'required');

    
    if ($this->form_validation->run()) {

        if($pass!=$passRes){
            $this->session->set_flashdata('error', 'Password not Matching');
            return redirect($redirect_to);
        }else{

            $result=$this->forgetmodel->check($email);
            if (empty($result)) {
                $this->session->set_flashdata('error', 'Check the Email Again');
                return redirect($redirect_to);
               } else {

                     $this->forgetmodel->update($email, $pass);
                     $this->session->set_flashdata('status', 'Change Successfully. You can Login ');
                    return redirect($redirect_to2);                 
                      }  
         }
       }else{
        $this->session->set_flashdata('error', 'Password lenght must be more than 6');
        return redirect($redirect_to); 
       }
  }
}