<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'third_party/PHPMailer/PHPMailerAutoload.php';

class EmailUtil {
	public function __construct() {
        $this->CI =& get_instance(); // duplikasi objek CI
        /* ready for mailer */
        $this->mail = new PHPMailer(true);
        $this->mail->isSMTP(); // we are going to use SMTP
        $this->mail->SMTPAuth   = true; // enabled SMTP authentication
        $this->mail->Host       = $this->CI->config->item('sys_email_host');
        $this->mail->Port       = $this->CI->config->item('sys_email_port');
        $this->mail->Username   = $this->CI->config->item('sys_email_user');
        $this->mail->Password   = $this->CI->config->item('sys_email_pass');
        $this->mail->setFrom($this->CI->config->item('sys_email_sender'), $this->CI->config->item('sys_email_sender_name'));  //Who is sending the email
    }

    public function sendEmail($param) {
        $this->mail->Subject = $param['subject'];
        $this->mail->Body = $param['message'];
        $this->mail->isHTML(true);
        $this->mail->clearAllRecipients();
        $recipients = explode(',', $param['to']);

        foreach ($recipients as $recipient) {
            $this->mail->addAddress($recipient);
        }

        return $this->mail->send();
    }
}