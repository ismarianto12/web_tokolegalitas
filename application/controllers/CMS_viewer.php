<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CMS_viewer extends CI_Controller {
	private $activeSession;

	public function __construct() {
	    parent::__construct();
	    $this->activeSession =  $this->session->userdata('_USER_ID');
	}

	public function index() {
		if ($this->activeSession == null) {
				$this->load->view('cms/login');
			} else {
				redirect(site_url('view/home'));
		}
	}

	public function pathGuide($page = 'home', $param = null) {
		if ($this->activeSession == null) {
			$this->load->view('cms/login');
			// $this->load->view('home');
		} else {
			$this->load->view('cms/' . $page, array('param' => $param));
		}
	}

	public function pathGuide2($page = 'home', $param = null) {
		$this->load->view('frontend/' . $page, array('param' => $param));
		
	}
}
