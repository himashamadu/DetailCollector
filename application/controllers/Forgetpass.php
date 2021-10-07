<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Forgetpass extends CI_Controller
{

    public function __construct()
    {
        //header("Access-Control-Allow-Origin: *");
        //header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
        //header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
       
        parent::__construct();
       
       
        $this->load->model('forgetmodel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('forgetpass');
    }
    
    public function resetLink(){
        
        $this->form_validation->set_rules('email', 'Email', 'required');
        $email=$this->input->post('email');
        $redirect_to = 'forgetpass';

        if ($this->form_validation->run()) {
            $email=$this->input->post('email');          
            $result=$this->forgetmodel->check($email);
            
            if (empty($result)) {
                $this->session->set_flashdata('error', 'Check the Email Again');
                return redirect($redirect_to);
            } else {

                $message="<a href=http://localhost/ExpenseTracker/Changepass> Forgot your password?</a>";

        $to_email=$this->input->post("email");
     $from_email="himashamxmadu@gmail.com";
     $to_email=$this->input->post("email");

    
    $this->email->from($from_email,'HTM');
     $this->email->to($to_email);
     $this->email->subject("TEST SUBJECT");
     $this->email->message($message);

     if($this->email->send()) {
        $this->session->set_flashdata('status', 'Email Send Successfully');
        return redirect($redirect_to);
    } else {   
        $this->session->set_flashdata('error', 'Email not send');
        show_error($this->email->print_debugger());
        return redirect($redirect_to);
      }
    }
        }else{
            return redirect($redirect_to);
        }
            }
           
        }
    


