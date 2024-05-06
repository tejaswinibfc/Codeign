<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->helper(array('url', 'form'));
    $this->load->library('session');
    $this->load->library('email');
  }
  public function send()
  {
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'smtp.gmail.com';
    $config['smtp_port'] = 587;
    $config['smtp_user']  = 'tejaswanibfcsofttech@gmail.com';
    $config['smtp_pass']  = 'rvyyiyvnclokvljt';
    $config['_smtp_auth'] = true;
    $config['smtp_crypto'] = 'tls';
    $config['charset']    = 'iso-8859-1';
    $config['wordwrap']   = TRUE;
    $config['mailtype']='html';

    $this->load->library('email');
    $this->email->initialize($config);
    
    $this->email->set_newline("\r\n");
    $this->email->from('tejaswanibfcsofttech@gmail.com');
    $this->email->to($this->input->post('email'));
    $this->email->subject("Thank you for contacting us");
    $user_name = $this->input->post('name');
   
    // $send_user = "Hi $user_name ,\r\n\r\nThank you for contacting us. We will contact you soon on;";
    $data['username'] = $user_name;
    // $send_user .= " ".$this->load->view('content')."\r\n";
    // $this->email->message($send_user);
    $content = $this->load->view('content', $data,TRUE,);
    $send_user = " " . $content . "\r\n";
    $this->email->message($send_user);

    $this->email->send();

    $data['user_email'] = $this->input->post('email');
    $data['user_subject'] = $this->input->post('subject');
    $data['user_message']= $this->input->post('message');
    $content = $this->load->view('admin_content', $data,TRUE);
    $admin_message = " " . $content . "\r\n";

    $this->email->from('tejaswanibfcsofttech@gmail.com');
    $this->email->to('tejaswanibfcsofttech@gmail.com');
    $this->email->message($admin_message);

    if ($this->email->send()) {
      $this->session->set_flashdata("success", "Successfully");
      redirect("admin/Login/dashboard");
    } else {
      $this->session->set_flashdata("error", "Error ");
      redirect("admin/Login/dashboard");
    }
  }
}
