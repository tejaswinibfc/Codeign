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
        $data['title'] = "Login";
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
                redirect('admin/Login/dashboard');
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
        $data['title'] = "Dashboard";
        $this->load->view('dashboard', $data);
    }
    // end view home page

    // user logout
    public function logout()
    {
        // $this->session->unset_userdata('User');
        redirect('admin/Login');
    } // end user logout


    public function profile()
    {
        // $this->loginSession();

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
            $data['user_login'] = $this->db->where('id', $id)->get('users')->row_array();
            $this->load->view('profile', $data);
        } else {
            $all_user = $this->session->userdata('User')['userId'];

            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['address'] = $this->input->post('address');
            $data['mobile'] = $this->input->post('mobile');

            $this->db->where('id', $all_user)->update('users', $data);
            $this->session->set_flashdata('success', 'Profile updated successfully');
            redirect('admin/Login/profile ');
        }
    }


    public function changePassword()
    {
         $this->loginSession();
        $this->form_validation->set_rules('old_password', 'Old password', 'trim|required');
        $this->form_validation->set_rules('new_password', 'new password', 'trim|required');
        $this->form_validation->set_rules('confirm_password', 'confirm password', 'trim|required|matches[new_password]');

        if ($this->form_validation->run() == false) {
            $id = $this->session->userdata('User')['userId'];
            $data['user_login'] = $this->db->where('id', $id)->get('users')->row_array();
            $data['title'] = "Password";
            $this->load->view('profile', $data);
        } else {
            $id = $this->input->post('id');

            $oldpwsd = $this->input->post('old_password');
            $newpwsd = $this->input->post('new_password');
            $confirmpwsd = $this->input->post('confirm_password');
            $da = $this->Users_model->change_password($oldpwsd);
            if ($da) {
                $data['password'] = $newpwsd;
                $this->Users_model->check_password($id, $data);
                $this->session->set_flashdata('success', 'Password updated successfully');
                redirect('admin/Login/profile ');
            } else {
                redirect('admin/Login/profile ');
            }
        }
    }


    // public function forgot()
    // {
    //     $this->load->view('forgot_password');
    // }

    // public function forgotPassword()
    // {
    //     $forget_email = $this->input->post("email");
    //     $get_email = $this->Users_model->forget_mail($forget_email);
    //     if ($get_email) {
    //         $mail = new PHPMailer();
    //         $mail->Host = 'smtp.gmail.com';
    //         $mail->Port = '587';
    //         $mail->SMTPAuth = true;
    //         $mail->SMTPSecure = 'tls';
    //         $mail->Username = 'tejaswanibfcsofttech@gmail.com'; 
    //         $mail->Password = 'rvyyiyvnclokvljt'; 
    //         $mail->setFrom('tejaswanibfcsofttech@gmail.com', 'This is testing'); 
    //         //   $mail->addAddress('ks623039@gmail.com');  // Here add User Email ID
    //         //$mail->addReplyTo('elevenstech@gmail.com'); // Here add your Email ID. Where user can send email
    //         $mail->isHTML(true);
    //         $mail->Subject = 'This is only testing'; // This is subject of Email   
    //         $msg = "Forget Password:<a href='recover_password'>Click here</a>";
    //         $mail->Body = "$msg";
    //         if (!$mail->send()) {
    //             echo "Message could not be sent!";
    //         } else {
    //             echo "Message could be sent!";
    //         }
    //     } else {
    //         echo "Please enter correct email";
    //         die;
    //     }
    // }
}
