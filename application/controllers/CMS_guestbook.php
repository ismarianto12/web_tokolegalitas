<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMS_guestbook extends CI_Controller {

	public function __construct() {
	    parent::__construct();
	    $this->load->library('form_validation');
	}

	public function index() {
		redirect(site_url());
	}
	
	public function proses() {
		/*
		* code info:
		*	- 0 = akses tidak sah
		*	- 1 = proses berhasil
		*	- 2 = proses gagal
		*/
		$code = 0;
		$message = '';
		/* collect request */
		$action = 1; // create, update, delete
		$model = 'guestbookmodel';

		$this->load->model($model);
		$this->$model->isNew(($action == $this->$model->CREATE)); // if action is for creating new data, ignore unique field

		$this->form_validation->set_rules($this->$model->getRules());

		if ($this->form_validation->run() == FALSE) {
			$delimiter = '- ';
			$this->form_validation->set_error_delimiters($delimiter, '');
			$message = validation_errors();
		} else {
			$result = self::_do($this->$model, $action, $this->input->post(null));
			//send email if success
			if ($result) {
				//
				$this->do_mail_guestbook($this->db->insert_id());

			}
			$code = ($result) ? 1 : 2;
		}
		

    	echo json_encode(array('data' => array(
    		'code' => $code,
    		'message' => $message,
    		'last_id' => $this->$model->getLastID()
		)));
	}

	/*
	* inner process
	*/
	private function _do($model, $action, $inputs) {
		$query = array(
		'table' => $model->getTable(),
		'type' => $action,
		'data' => $model->getField($inputs),
			'at' => array(
				$inputs['key-input'] => $inputs['value-input']
			) // clause for model
		);
		return $model->action($query); // do...
	}

	/*
	* email send notification guestbook
	*/
	public function do_mail_guestbook($id = null) {
		$ret = FALSE;
		$this->load->library('emailutil');
		//the downloader
		$guestbook = $this->model->getRecord(array('table' => 'guestbook', 'where' => array('guestbook_id' => $id)));
		if ($guestbook) {
			//receiver
			$member = strip_tags($this->settingmodel->getSetByName("email_receiver"));
			if ($member) {
				$params['to'] = $member;
				$params['subject'] = 'Notifi, new guestbook from : ' . $guestbook->name;
				$params['message'] = 'New message from, '.$guestbook->name.' ('.$guestbook->email.') Please check guestbook 
				';
				//do send
				$this->emailutil->sendEmail($params);
				$ret = TRUE;
			}
		}
		
		return $ret;
	}
}