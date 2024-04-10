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
                    'userEmail' => $login->email,
                    'userAddress' => $login->address,
                    'userMobile' => $login->mobile,
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


    public function loginSession()
    {
        $all_data = $this->session->userdata('User');
        if (empty($all_data)) {
            redirect('admin/Login');
        }
    }

    // view home page
    public function dashboard()
    {
        $this->loginSession();
        $data['title'] = "dashboard";
        $this->load->view('dashboard', $data);
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
        $this->loginSession();

        $id = $this->session->userdata('User')['userId'];
        $data['user_login'] = $this->db->where('id', $id)->get('users')->row_array();
        $data['title'] = "Profile";
        $this->load->view('profile', $data);
    }

    public function updateProfile()
    {
        $this->loginSession();
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('profile');
        }else{
            $all_user = $this->session->userdata('User')['userId'];

            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['address'] = $this->input->post('address');
            $data['mobile'] = $this->input->post('mobile');
    
            $this->db->where('id', $all_user)->update('users', $data);
            redirect('admin/Login/profile ');
        }
       
        
    }
}
