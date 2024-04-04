<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

  public  function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->model('Users_model');
    $this->load->library('session');
    $this->load->library('form_validation');
    
  }

  public function index()
  {

    $this->load->view('login');
  }

  // public function demo(){
  //   echo "hello";
  // }

  public function user_login()
  {
   
   $this->load->library('session');
    $email = $_POST['email'];
    $password = $_POST['password'];
    $data = $this->Users_model->login($email, $password);

    if ($data) {
      $this->session->set_userdata('user', $data);
      redirect('Login/home');
    } else {
       redirect('Login');
     
    }
  }

  public function home()
  {
    if($this->session->userdata('user')){
			$data['title'] = "Home";

    $this->load->view('home',$data);
		}
		else{
			redirect('Login');
		}
    
  }

  public function logout(){
		$this->session->unset_userdata('user');
		redirect('Login');
	}

 
}
