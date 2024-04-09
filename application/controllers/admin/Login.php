<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('url', 'form'));
        $this->load->model('Users_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    // view login
    public function index()
    {
        $data['title'] = "login";
        $this->load->view('login', $data);
    } //end  view login

    // add user login
    public function user_login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $login = $this->Users_model->login($email, $password);

            if ($login) {
                $data = array(
                    'userName' => $login->name,
                    'userId' => $login->id,
                    'email' => $login->email,
                );
                $this->session->set_userdata('User', $data);
                $this->load->view('dashboard');
            } else {
                $this->session->set_flashdata('error', 'Invalid credentials');
                redirect('admin/Login');
            }
        }
    }
    // end user login

    // view home page
    public function dashboard()
    {
  
       
        if ($this->session->userdata('User')) {
            $data['title'] = "dashboard";
            $this->load->view('dashboard', $data);
        } else {
            redirect('admin/Login');
        }
    }
    // end view home page

    // user logout
    public function logout()
    {
        $this->session->unset_userdata('User');
        redirect('admin/Login');
    } // end user logout


    public function profile()
    {
        $data['user_login']= $this->session->userdata('User');
        // echo  $data['user_login']->data;
        
            $data['title'] = "Profile";
            $this->load->view('profile', $data);
      
    }

    public function updateProfile()
    {
        $id = $this->input->post('id');
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
       
        $this->db->where('id',$id)->update('users',$data);
        //  print_r($ss);die;
        redirect('admin/Login/profile');
    }

   
}
