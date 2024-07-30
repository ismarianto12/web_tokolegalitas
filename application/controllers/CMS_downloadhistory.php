<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMS_downloadhistory extends CI_Controller {

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
		$model = 'downloadhistorymodel';

		$this->load->model($model);
		$this->$model->isNew(($action == $this->$model->CREATE)); // if action is for creating new data, ignore unique field

		$this->form_validation->set_rules($this->$model->getRules());

		if ($this->form_validation->run() == FALSE) {
			$delimiter = '- ';
			$this->form_validation->set_error_delimiters($delimiter, '');
			$message = validation_errors();
		} else {
			$result = self::_do($this->$model, $action, $this->input->post(null));
			//jika berhasil
			if ($result) {
				$last_id = $this->$model->getLastID();
				$this->do_mail_ebook($last_id);
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
	* email send notification ebook
	*/
	public function do_mail_ebook($id = null) {
		$ret = FALSE;
		$this->load->library('emailutil');
		//the downloader
		$download = $this->model->getRecord(array('table' => 'download_history', 'where' => array('download_id' => $id)));
		if ($download) {
			//the ebook
			$ebook = $this->model->getRecord(array('table' => 'ebook', 'where' => array('ebook_id' => $download->ebook_id)));
			if ($ebook) {
				//receiver
				$member = strip_tags($download->email);
				if ($member) {
					$params['to'] = $member;
					$params['subject'] = 'Link Download Ebook : ' . $ebook->title;
					$params['message'] = $this->load->view('cms/template/_email_ebook', array('data_ebook' => $ebook, 'data_download' => $download), TRUE);
					//do send
					$this->emailutil->sendEmail($params);
					$ret = TRUE;
				} else {
					//echo 'Receiver not exist';
				}
			} else {
				//echo 'Ebook not exist';
			}
		}

		return $ret;
	}
}