<?php
class Users_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function login($email, $password)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query = $this->db->get('users')->row();
		// print_r($query);die;
		return $query;
	}

	public function change_password($oldpassword)
	{
		$this->db->where('password', $oldpassword);
		$data = $this->db->get('users')->row();
		$query = $data->password;
		return $query;
	}


	public function check_password($id, $newpassword)
	{
		$this->db->where('id', $id);
		$query = $this->db->update('users', $newpassword);
		return $query;
	}

	public function forget_mail($forget_email)
	{
		$this->db->where('email', $forget_email);
		$data = $this->db->get('users')->row();
		$query = $data->email;
		return $query;
	}
}
