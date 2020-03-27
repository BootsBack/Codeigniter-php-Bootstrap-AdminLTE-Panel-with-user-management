<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_auth');
	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
	*/
	public function login()
	{
		

		$this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            // true case
           	$email_exists = $this->model_auth->check_email($this->input->post('email'));

           	if($email_exists == TRUE) {
           		$login = $this->model_auth->login($this->input->post('email'), $this->input->post('password'));

           		if($login) {
           			$logged_in_sess = array(
           				'id' => $login['id'],
				        'username'  => $login['username'],
				        'email'     => $login['email'],
						'store_id' =>  $login['store_id'],
				        'logged_in' => TRUE,
					);
					

					$this->session->set_userdata($logged_in_sess);
           				
						redirect(base_url('dashboard'), 'refresh');
					
           		}
           		else {
				
           			$this->data['errors'] = '<div class="alert alert-danger" role="alert">Incorrect username/password </div>';
           			$this->load->view('login', $this->data);
					
           		}
           	}
           	else {
           		$this->data['errors'] = '<div class="alert alert-danger" role="alert">Email does not exists</div>';
			
           		$this->load->view('login', $this->data);
			
           	}	
        }
        else {
            // false case
            $this->load->view('login');
        }	
	}

	/*
		clears the session and redirects to login page
	*/
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('auth/login'), 'refresh');
	}

}
