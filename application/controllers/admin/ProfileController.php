<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('url', 'form'));
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	


}
