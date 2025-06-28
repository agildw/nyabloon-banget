<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Email Configuration
| -------------------------------------------------------------------------
| Configure email settings for sending emails from the contact form
| 
| For Gmail SMTP, you'll need to:
| 1. Enable 2-factor authentication on your Gmail account
| 2. Generate an App Password (not your regular password)
| 3. Use the App Password in the smtp_pass field
|
| For other SMTP providers, adjust the settings accordingly
*/

$config['protocol'] = 'smtp';  // Options: 'mail', 'sendmail', 'smtp'
$config['smtp_host'] = 'smtp.gmail.com';
$config['smtp_port'] = 587;
$config['smtp_timeout'] = 30;
$config['smtp_user'] = 'testa@gmail.com';  // Add your email here
$config['smtp_pass'] = 'Test123#';  // Add your app password here
$config['smtp_crypto'] = 'tls';  // Options: '', 'tls', 'ssl'
$config['smtp_keepalive'] = FALSE;

$config['mailtype'] = 'html';  // Options: 'text', 'html'
$config['charset'] = 'utf-8';
$config['validate'] = FALSE;
$config['priority'] = 3;  // 1 = highest, 5 = lowest
$config['crlf'] = "\r\n";
$config['newline'] = "\r\n";
$config['bcc_batch_mode'] = FALSE;
$config['bcc_batch_size'] = 200;
$config['wordwrap'] = TRUE;
$config['wrapchars'] = 76;

// Admin email settings
$config['admin_email'] = 'admin@gmail.com';  // Change this to your admin email
$config['from_email'] = 'test@gmail.com';  // Change this to your from email
$config['from_name'] = 'Test'; 