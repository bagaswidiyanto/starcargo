<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sendmail extends CI_Controller
{


	public function index()
	{

		$this->load->library('email');

		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$message = $this->input->post('message');

		$this->db->query("INSERT INTO tbl_bantuan (name,email,phone,message) VALUES ('" . $name . "','" . $email . "','" . $phone . "','" . $message . "') ");


		$setting = $this->db->get('tbl_email', 1)->row();


		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.gmail.com';
		$config['smtp_port']    = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'bagas.ti441@gmail.com';
		$config['smtp_pass']    = 'b2c65432';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'text'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not

		$this->email->initialize($config);

		$this->email->from($email, $name);
		$this->email->to('bagaswidiyanto1@gmail.com');
		$this->email->cc($setting->emailCc);
		$this->email->bcc($setting->emailBcc);

		$this->email->subject($setting->emailSubject);
		$this->email->message('Nama : ' . $name . '<br/>phone : ' . $phone . '<br>Message : ' . $message);

		$this->email->send();

		echo $this->email->print_debugger();
		// echo 'Terima Kasih , kami akan memproses pesan anda secepatnya';
	}
}
