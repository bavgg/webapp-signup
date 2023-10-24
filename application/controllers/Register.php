<?php
class Register extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('form'); 
        $this->load->library('form_validation');
        $this->load->model('register_model');
    }
    
    public function index() {
        $data['title'] = 'Register';
        $this->load->view('register', $data);
    }

    public function verify() {
        $this->form_validation->set_rules('txtfname', 'First Name', 'required|trim');
        $this->form_validation->set_rules('txtlname', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('txtgender', 'Gender', 'required');
        $this->form_validation->set_rules('txtbday', 'Birthday', 'required');
        $this->form_validation->set_rules('txtaddress', 'Address', 'required|trim');
        $this->form_validation->set_rules('txtphone', 'Phone', 'required|trim');
        $this->form_validation->set_rules('txtemail', 'E-mail', 'required|trim|valid_email');
        $this->form_validation->set_rules('txtuser', 'Username', 'required|trim|is_unique[users.user_name]');
        $this->form_validation->set_rules('txtpass', 'Password', 'required');
        $this->form_validation->set_rules('txtrepass', 'Re-Type Password', 'required|matches[txtpass]');
    
        if ($this->form_validation->run() === TRUE) {
            
            $isRegistered = $this->register_model->register();
            if ($isRegistered) {
                $data['title'] = 'Registration Successful';
                $data['message'] = 'Please check your email to activate your account.';
            } else {
                $data['title'] = 'Registration Failed';
                $data['message'] = 'Something went wrong. Please try again later.';
            }

            $this->load->view('registration_message', $data);
        } else {
            $this->index();
        }
    
        
    }

    
    
    
}
