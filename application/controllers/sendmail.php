<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sendmail extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->view('guestbook');
	}

	$this->load->helper(array('form', 'url'));
	$title = $this->input->post('title');
	$content = $this->input->post('content');
	$name = $this->input->post('name');
	$email = $this->input->post('email');
	$phone = $this->input->post('phone');
	$type = $this->input->post('type');
	$company = $this->input->post('company');
	$address = $this->input->post('address');

    //memasukan ke array
	$data = array(
		'title' => $title,
		'content' => $content,
		'name' => $name,
		'email' => $email,
		'phone' => $phone,
		'type' => $type,
		'company' => $company,
		'address' => $address,
		'active' => 0
		);
    //tambahkan akun ke database
	$this->load->model('Guestbookmodel');
	$id = $this->Guestbookmodel->add_account($data);

    //enkripsi id
	$encrypted_id = md5($guestbook_id);

	$this->load->library('email');
	$config = array();
	$config['charset'] = 'utf-8';
	$config['useragent'] = 'Codeigniter';
	$config['protocol']= "smtp";
	$config['mailtype']= "html";
    $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
    $config['smtp_port']= "465";
    $config['smtp_timeout']= "400";
    $config['smtp_user']= "info@publicspeakingsbc.com"; // isi dengan email kamu
    $config['smtp_pass']= "password kamu"; // isi dengan password kamu
    $config['crlf']="\r\n"; 
    $config['newline']="\r\n"; 
    $config['wordwrap'] = TRUE;
    //memanggil library email dan set konfigurasi untuk pengiriman email

    $this->email->initialize($config);
    //konfigurasi pengiriman
    $this->email->from($config['smtp_admin']);
    $this->email->to($email);
    $this->email->subject("KOMENTAR");
    $this->email->message(
    	"Ada pesan dari buku tamu silahkan cek<br><br>".
    	site_url("guestbook/verification/$encrypted_id")
    	);

    echo "<br><br><a href='".site_url("guestbook")."'>Kembali ke Menu Pesan</a>";
}