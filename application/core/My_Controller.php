<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load necessary libraries, helpers, models here
        $this->load->library('session');

        // Check login session
        // $this->loginSession();
    }

    public   function loginSession()
    {
        $all_data = $this->session->userdata('User');
        if (empty($all_data)) {
            redirect('admin/Login');
        }
    }
}
?>
