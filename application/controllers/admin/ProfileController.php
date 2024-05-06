<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('url', 'form'));
		$this->load->library('session');
		$this->load->model('Users_model');
		$this->load->library('form_validation');
	}

	public function  index()
	{
		$this->loginSession();
		$id = $this->session->userdata('User')['userId'];
		$data['user_login'] = $this->db->where('id', $id)->get('users')->row_array();
		$data['title'] = "Profile";
		$this->load->view('profile', $data);
	}

	public function loginSession()
	{
		$all_data = $this->session->userdata('User');
		if (empty($all_data)) {
			redirect('admin/Login');
		}
	}
	public function updateProfile()
	{
		$this->loginSession();
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
		if ($this->form_validation->run() == false) {
			$id = $this->session->userdata('User')['userId'];
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
			redirect('admin/ProfileController/index ');
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
			$data['title'] = "Profile";
			$this->load->view('profile', $data);
		} else {
			$id = $this->session->userdata('User')['userId'];
			$oldpws =  $this->input->post('old_password');
			$newpws =  $this->input->post('new_password');
			$details =    $this->Users_model->change_password($oldpws);
			if ($details) {
				if ($details == $newpws) {
					$this->session->set_flashdata('error', "New password cannot be same as  current password");
					redirect('admin/ProfileController/index ');
				} else {
					$data['password'] = $newpws;
					$this->Users_model->check_password($id, $data);
					$this->session->set_flashdata('success', "Password changed successfully");
					redirect('admin/ProfileController/index ');
				}
			} else {
				$this->session->set_flashdata('error', "Old password does not match");
				redirect('admin/ProfileController/index ');
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
