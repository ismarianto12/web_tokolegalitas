<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CMS_manager extends CI_Controller
{
	private $activeSession; // store session

	public function __construct()
	{
		parent::__construct();
		$this->activeSession = $this->session->userdata('_USER_ID');
		$this->load->library('form_validation');
	}

	public function index()
	{
		redirect(site_url('view/home'));
	}

	/*
	*	login or logout
	*/
	public function identify($action)
	{
		if ($action == 'acknowledge') { // for login
			/*
			* code info:
			*	- 0 = akses tidak sah
			*	- 1 = user granted
			*	- 2 = user ID tidak dikenal
			*	- 3 = user PIN salah
			*/
			$code = 0;
			$message = '';

			if ($this->activeSession == null) {
				$this->load->model('loginmodel');
				$this->form_validation->set_rules($this->loginmodel->getRules());

				if ($this->form_validation->run() == FALSE) {
					$delimiter = '- ';
					$this->form_validation->set_error_delimiters($delimiter, '');
					$message = validation_errors();
				} else {
					$query['table'] = 'm_user';
					$query['where'] = array(
						'username' => $this->input->post('username-input'), 'is_active' => 1 // is alive
					);
					$actor = $this->loginmodel->getRecord($query);

					if ($actor == null) {
						$code = 2;
					} else {

						if ($actor->password == md5($this->input->post('password-input'))) {
							// var_dump($actor->rumahsakit_id);
							// exit();

							$this->session->set_userdata(array(
								'RS_ID' => $actor->rumahsakit_id,
								'_USER_ID' => $actor->user_id,
								'_NAME' => $actor->name,
								'_LEVEL' => $actor->level,
								'_IMG' => $actor->img
							));
							$code = 1;
						} else {
							$code = 3;
						}
					}
				}
			}

			echo json_encode(array('data' => array(
				'code' => $code,
				'message' => $message
			)));
		} else if ($action == 'revoke') { // for logout
			if ($this->activeSession != null) {
				$this->session->sess_destroy();
			}
			redirect(site_url());
		}
	}

	/*
	*	create, update, or delete
	*/

	public function process()
	{
		// print_r($_POST);
		// die;
		/*
		* code info:
		*	- 0 = akses tidak sah
		*	- 1 = proses berhasil
		*	- 2 = proses gagal
		*/
		$code = 0;
		$last_id = 0;
		$message = '';
		/* collect request */
		$action = $this->input->post('action-input'); // create, update, delete
		$model = $this->input->post('model-input') . 'model';

		if ($this->activeSession != null) {
			$this->load->model($model);
			$this->$model->isNew(($action == $this->$model->CREATE)); // if action is for creating new data, ignore unique field

			//if delete
			if ($action == $this->$model->DELETE) {
				//for file
				if ($this->input->post('model-input') == 'gallery_detail') {
					$dt = $this->model->getRecord(array('table' => $this->$model->getTable(), 'where' => array($this->input->post('key-input') => $this->input->post('value-input'))));
					if ($dt) {
						$pathfile = 'assets/image/gallery/' . $dt->img;
					}
				} else {
					$pathfile = null;
				}

				$result = $this->_do_delete($this->$model, $this->input->post(null));
				// echo $this->db->last_query();
				if ($result) {
					$code = 1;
					//delete file
					if ($pathfile != null) {
						@unlink($pathfile);
					}
				} else {
					$code = 2;
				}
			} else {
				$this->form_validation->set_rules($this->$model->getRules());

				if ($this->form_validation->run() == FALSE) {
					$delimiter = '- ';
					$this->form_validation->set_error_delimiters($delimiter, '');
					$message = validation_errors();
				} else {
					$isExist = '';
					if ($this->input->post('model-input') == 'privilege') {
						$result = $this->_privilegeRecord($this->input->post(null), $action);
					} else {
						$result = $this->_do($this->$model, $action, $this->input->post(null));
					}

					$last_id = ($action == $this->$model->CREATE) ? $this->$model->getLastID() : $this->input->post('value-input');
					$code = ($result) ? 1 : 2;
				}
			}
		}

		echo json_encode(array('data' => array(
			'code' => $code,
			'message' => $message,
			'last_id' => $last_id
		)));
	}

	/*
	* inner process
	*/
	private function _do($model, $action, $inputs)
	{
		// print_r($inputs);
		// die;
		$query = array(
			'table' => $model->getTable(), 'type' => $action,
			'data' => $model->getField($inputs),
			'at' => array(
				$inputs['key-input'] => $inputs['value-input']
			) // clause for model
		);
		return $model->action($query); // do...
	}

	private function _do_delete($model, $inputs)
	{
		$query = array(
			'table' => $model->getTable(), 'type' => 3,
			'data' => 'null',
			'at' => array(
				$inputs['key-input'] => $inputs['value-input']
			) // clause for model
		);
		return $model->action($query); // do...
	}

	/*
	* email send notification
	*/
	public function do_mail($type = null, $id = null)
	{
		$this->load->library('emailutil');
		//receiver
		$member = strip_tags($this->settingmodel->getSetByName('email_receiver'));
		if ($member) {
			$params['to'] = $member;
			if ($type == 'guestbook') {
				$gb = $this->model->getRecord(array('table' => $type, 'where' => array('guestbook_id' => $id)));
				if ($gb) {
					$params['subject'] = 'Buku Tamu : ' . $gb->title . ' (' . $gb->name . ')';
					$params['message'] = $gb->content;
				}
			}

			$this->emailutil->sendEmail($params);
		} else {
			echo 'Receiver not exist';
		}
	}

	public function set_cover_gallery($cover_id = null)
	{
		$code = 0;
		//the cover gallery
		$cover = $this->model->getRecord(array('table' => 'gallery_detail', 'where' => array('gallery_detail_id' => $cover_id)));
		if ($cover) {
			//reset
			$this->db->query("UPDATE gallery_detail SET is_cover = 0 WHERE gallery_id = $cover->gallery_id");
			//set current
			$sql = $this->db->query("UPDATE gallery_detail SET is_cover = 1 WHERE gallery_detail_id = $cover_id");
			if ($sql) {
				$code = 1;
			}
		}

		echo json_encode(array('code' => $code));
	}
}
