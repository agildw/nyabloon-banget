<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		// Load required libraries and helpers
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->helper('url');
		$this->load->helper('form');
		
		// Load email configuration
		$this->load->config('email');
	}

	public function index()
	{
		$this->load->view('contact');
	}

	public function send_message()
	{
		// Set validation rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[2]|max_length[100]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('tel', 'Phone', 'trim|required|min_length[10]|max_length[20]');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[10]|max_length[1000]');

		if ($this->form_validation->run() == FALSE) {
			// Validation failed, reload the contact page with errors
			$data['validation_errors'] = validation_errors();
			$this->load->view('contact', $data);
		} else {
			// Validation passed, send email
			$result = $this->send_contact_email();
			
			if ($result) {
				// Email sent successfully
				$data['success_message'] = 'Thank you for your message! We will get back to you soon.';
			} else {
				log_message('error', 'Email sending failed: ' . $this->email->print_debugger());
				// Email failed to send
				// $data['error_message'] = 'Sorry, there was an error sending your message. Please try again later.';
				$data['error_message'] = $this->email->print_debugger();
			}
			
			$this->load->view('contact', $data);
		}
	}

	private function send_contact_email()
	{
		// Get form data
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('tel');
		$message = $this->input->post('message');

		// Initialize email library with configuration
		$email_config = array(
			'protocol' => $this->config->item('protocol'),
			'smtp_host' => $this->config->item('smtp_host'),
			'smtp_port' => $this->config->item('smtp_port'),
			'smtp_timeout' => $this->config->item('smtp_timeout'),
			'smtp_user' => $this->config->item('smtp_user'),
			'smtp_pass' => $this->config->item('smtp_pass'),
			'smtp_crypto' => $this->config->item('smtp_crypto'),
			'smtp_keepalive' => $this->config->item('smtp_keepalive'),
			'mailtype' => $this->config->item('mailtype'),
			'charset' => $this->config->item('charset'),
			'validate' => $this->config->item('validate'),
			'priority' => $this->config->item('priority'),
			'crlf' => $this->config->item('crlf'),
			'newline' => $this->config->item('newline'),
			'bcc_batch_mode' => $this->config->item('bcc_batch_mode'),
			'bcc_batch_size' => $this->config->item('bcc_batch_size'),
			'wordwrap' => $this->config->item('wordwrap'),
			'wrapchars' => $this->config->item('wrapchars')
		);

		$this->email->initialize($email_config);

		// Get email configuration
		$admin_email = $this->config->item('admin_email');
		$from_email = $this->config->item('from_email');
		$from_name = $this->config->item('from_name');

		// Email subject
		$subject = 'New Contact Form Message from ' . $name;

		// Create email body
		$email_body = $this->create_email_template($name, $email, $phone, $message);

		try {
			// Configure email
			$this->email->from($from_email, $from_name);
			$this->email->to($admin_email);
			$this->email->reply_to($email, $name);
			$this->email->subject($subject);
			$this->email->message($email_body);

			// Send email
			$result = $this->email->send();

			// Log email debug info if failed
			if (!$result) {
				log_message('error', 'Email sending failed: ' . $this->email->print_debugger());
			}

			return $result;
		} catch (Exception $e) {
			log_message('error', 'Email exception: ' . $e->getMessage());
			return false;
		}
	}

	private function create_email_template($name, $email, $phone, $message)
	{
		$html = '
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<title>Contact Form Message</title>
			<style>
				body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
				.container { max-width: 600px; margin: 0 auto; padding: 20px; }
				.header { background-color: #4CAF50; color: white; padding: 20px; text-align: center; }
				.content { padding: 20px; background-color: #f9f9f9; }
				.field { margin-bottom: 15px; }
				.label { font-weight: bold; color: #555; }
				.value { margin-top: 5px; padding: 8px; background-color: white; border-left: 3px solid #4CAF50; }
				.message-box { background-color: white; padding: 15px; border-radius: 5px; margin-top: 10px; }
			</style>
		</head>
		<body>
			<div class="container">
				<div class="header">
					<h2>New Contact Form Message</h2>
				</div>
				<div class="content">
					<div class="field">
						<div class="label">Name:</div>
						<div class="value">' . htmlspecialchars($name) . '</div>
					</div>
					<div class="field">
						<div class="label">Email:</div>
						<div class="value">' . htmlspecialchars($email) . '</div>
					</div>
					<div class="field">
						<div class="label">Phone:</div>
						<div class="value">' . htmlspecialchars($phone) . '</div>
					</div>
					<div class="field">
						<div class="label">Message:</div>
						<div class="message-box">' . nl2br(htmlspecialchars($message)) . '</div>
					</div>
					<div style="margin-top: 20px; padding: 10px; background-color: #e8f5e8; border-radius: 5px; font-size: 12px; color: #666;">
						<strong>Note:</strong> This message was sent from the contact form on your website at ' . date('Y-m-d H:i:s') . '
					</div>
				</div>
			</div>
		</body>
		</html>';

		return $html;
	}
}
