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
        $this->load->view('login');
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
                    redirect('Login/dashboard');
                } else {
                    $this->session->set_flashdata('error', 'Invalid credentials');
                    redirect('Login');
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
            redirect('Login');
        }

    }
    // end view home page

    // user logout
    public function logout()
    {
     $this->session->unset_userdata('User');
        redirect('Login');
    } // end user logout

}
