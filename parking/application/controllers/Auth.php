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

		$this->logged_in();
    $response=array();

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
				        'logged_in' => TRUE
					);

					$this->session->set_userdata($logged_in_sess);
                //redirect('dashboard', 'refresh');
          $response['IsSuccess']="yes";
           echo json_encode($response);
          exit;
           		}
           		else {
           			$response['Message'] = 'Incorrect username/password combination';
                echo json_encode($response);
                exit;           			
           		}
           	}
           	else {
          $response['IsSuccess']="no";
          $response['Message']="<font color='red'>Email does not exists !</font>";
          echo json_encode($response);
          exit;
             
          }	
        }
        else {
                $this->load->view('login');
            
        }	
	}

	/*
		clears the session and redirects to login page
	*/
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login', 'refresh');
	}
	public function signup()
	{
		$this->load->view('signup');
	}

  public function password_hash($pass = '')
  {
    if($pass) {
      $password = password_hash($pass, PASSWORD_DEFAULT);
      return $password;
    }
  }

  public function register_user()
  {
    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|is_unique[users.username]');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[users.email]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
    $this->form_validation->set_rules('cpassword', 'Confirm password', 'trim|required|matches[password]');
    $this->form_validation->set_rules('fname', 'First name', 'trim|required');

    if ($this->form_validation->run() == TRUE) {
            // true case
            $password = $this->password_hash($this->input->post('password'));
          $data = array(
            'username' => $this->input->post('username'),
            'password' => $password,
            'email' => $this->input->post('email'),
            'firstname' => $this->input->post('fname'),
            'lastname' => $this->input->post('lname'),
            'phone' => $this->input->post('phone'),
            'gender' => $this->input->post('gender'),
          );
          $this->load->model('model_users');
          $create = $this->model_users->create($data, 5);
          if($create == true) {

              $email_exists = $this->model_auth->check_email($this->input->post('email'));

            if($email_exists == TRUE && $create ==TRUE) {
              $login = $this->model_auth->login($this->input->post('email'), $this->input->post('password'));

              if($login) {

                $logged_in_sess = array(
                  'id' => $login['id'],
                'username'  => $login['username'],
                'email'     => $login['email'],
                'logged_in' => TRUE
          );

          $this->session->set_userdata($logged_in_sess);
               //redirect('dashboard', 'refresh');
          $response['IsSuccess']="yes";
           echo json_encode($response);
          exit;
              }
          }
        }
          else {
            $response['IsSuccess']="no";
          $response['Message']='User already exists please try other username and email id  !';
          echo json_encode($response);
          exit;
            
          }
        }
        else {            
          $response['IsSuccess']="no";
          $response['Message']=validation_errors();
          echo json_encode($response);
          exit;
            
        }
  }
	
	}

