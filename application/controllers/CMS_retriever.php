<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CMS_retriever extends CI_Controller
{
	private $activeSession; // store session

	public function __construct()
	{
		parent::__construct();
		$this->activeSession = $this->session->userdata('_USER_ID');
	}

	public function index()
	{
		redirect(site_url('view/home'));
	}


	public function list_user()
	{
		return $this->db->query('
		SELECT
	m_user.rumahsakit_id, 
	m_user.username, 
	m_user.`password`, 
	m_user.`name`, 
	m_user.email, 
	m_user.phone, 
	m_user.`level`, 
	m_user.is_active, 
	m_user.img, 
	m_user.position, 
	m_user.user_id, 
	rumah_sakit.id_rumahsakit, 
	rumah_sakit.nama_rumahsakit, 
	rumah_sakit.alamat, 
	rumah_sakit.is_active
FROM
	m_user
	LEFT OUTER JOIN
	rumah_sakit
	ON 
		m_user.rumahsakit_id = rumah_sakit.id_rumahsakit
		');
	}
	/*
	* read object
	*/
	public function record($specific = null)
	{
		/*
		* code info:
		*	- 0 = akses tidak sah & data tidak perlu di tampilkan
		*	- 1 = akses sah & data di tampilkan
		*/
		$code = 0;
		$object = null;

		if ($this->activeSession != null) {
			switch ($this->input->post('model-input')) {
				case 'user':
					$query['table'] = 'm_user'; //$this->list_user();
					break;

				case 'bagian':
					$query['table'] = 'v_bagian';
					break;
				case 'articlecategory':
					$query['table'] = 'article_category';
					break;
				case 'article':
					$query['table'] = 'v_article';
					break;
				case 'gallery':
					$query['table'] = 'v_gallery';
					break;
				case 'guestbook':
					$query['table'] = 'v_guestbook';
					break;
				case 'dokter':
					$query['table'] = 'v_dokter';
					break;
				case 'coment':
					$query['table'] = 'v_comment';
					break;
				case 'gallery_detail':
					$query['table'] = 'v_gallery';
					break;
				case 'slide':
					$query['table'] = 'v_slide';
					break;

				case 'jadwaldokter':
					$query['table'] = 'v_jadwaldokter';
					break;

				default:
					$query['table'] = $this->input->post('model-input');
					break;
			}

			$query['where'] = array($this->input->post('key-input') => $this->input->post('value-input'));

			$object = $this->model->getRecord($query);


			$code = 1;
		}

		echo json_encode(array('data' => array(
			'code' => $code,
			'object' => $object
		)));
	}

	/* |||||||||||||||||||||||||||||||||||| DATATABLES |||||||||||||||||||||||||||||||||||| */
	/*
	* read objects - DataTables
	*/
	public function records($table, $key = 'null', $value = 'null', $picker = 'no')
	{
		$data = array();

		if ($this->activeSession != null) {
			if (isset($table)) {
				if ($key != 'null' && $value != 'null') {
					$query['where'] = array($key => $value);
				}

				switch ($table) {
					case 'articlecategory':
						$query['table'] = 'article_category';
						break;
					case 'user':
						$query['table'] =  'v_user_list'; //$this->list_user();
						// echo 'ss';
						break;
					case 'article':
						$query['table'] = 'v_article';
						break;
					case 'ebook_category':
						$query['table'] = 'ebook_category';
						break;
					case 'ebook':
						$query['table'] = 'v_ebook';
						break;
					case 'download':
						$query['table'] = 'v_download';
						break;
					case 'rumah_sakit':
						$query['table'] = 'rumah_sakit';
						break;
					case 'dokter':
						$query['table'] = 'v_dokter';
						break;
					case 'guestbook':
						$query['table'] = 'v_guestbook';
						break;
					case 'jadwaldokter':
						$query['table'] = 'v_jadwaldokter';
						break;
					case 'setting':
						$query['table'] = 'v_setting';
						break;
					case 'gallery':
						$query['table'] = 'v_gallery_header';
						break;
					case 'slide':
						$query['table'] = 'v_slide';
						break;
					case 'bagian':
						$query['table'] = 'v_bagian';
						break;
					default:
						$query['table'] = $table;
						break;
				}


				$records = $this->model->getList($query);
				$inner = '_' . $table;
				$data = $this->$inner($records, $picker);
			}
		}

		echo json_encode(array('data' => $data));
	}

	/*
	* inner data generator
	* ===================================== write your custom function here =====================================
	*/

	function _articlecategory($records, $picker = 'no')
	{
		$data = array();

		foreach ($records as $record) {
			if ($picker == 'yes') {
				$linkBtn = '<a href="#' . $record->article_category_id . '" class="btn btn-xs btn-info pickBtn" title="Pilih"><i class="fa fa-thumb-tack"></i> Pilih</a>';
			} else if ($picker == 'no') {
				$linkBtn = ' <a href="#' . $record->article_category_id . '" class="btn btn-xs btn-primary editBtn" title="Edit"  style="width:80px;margin:5px 5px 5px;><i class="fa fa-edit"></i> Edit</a>';
				//is removeable
				if ($record->is_removeable == 1) {
					$linkBtn .= ' <a href="#' . $record->article_category_id . '" class="btn btn-xs btn-danger removeBtn" title="Hapus"  style="width:80px;margin:5px 5px 5px;><i class="fa fa-trash-o"></i> Hapus</a>';
				}
			}
			$data[] = array(
				'category_name' => $record->category_name,
				'description' => $record->description,
				'is_active' => statusData($record->is_active),
				'aksi' => $linkBtn
			);
		}

		return $data;
	}

	function _article($records, $picker = 'no')
	{
		$data = array();
		// print_r($records);
		// die;

		foreach ($records as $record) {
			if ($picker == 'yes') {
				$linkBtn = '<a href="#' . $record->article_id . '" class="btn btn-xs btn-info pickBtn" title="Pilih"><i class="fa fa-thumb-tack"></i> Pilih</a>';
			} else if ($picker == 'no') {
				$linkBtn = ' <a href="#' . $record->article_id . '" class="btn btn-xs btn-info viewBtn" title="View"><i class="fa fa-eye"></i> View</a>';
				$linkBtn .= ' <a href="#' . $record->article_id . '" class="btn btn-xs btn-primary editBtn" title="Edit"><i class="fa fa-edit"></i> Edit</a>';
				$linkBtn .= ' <a href="#' . $record->article_id . '" class="btn btn-xs btn-danger removeBtn" title="Hapus"><i class="fa fa-trash-o"></i> Hapus</a>';
			}
			$data[] = array(
				'title' => $record->title,
				'date' => $record->created_datetime,
				'name' => $record->name,
				'category' => $record->category_name,
				'nama_rumahsakit' => $record->nama_rumahsakit,
				'is_publish' => statusYN($record->is_publish),

				'aksi' => $linkBtn
			);
		}

		return $data;
	}

	function _page($records, $picker = 'no')
	{
		$data = array();

		foreach ($records as $record) {
			if ($picker == 'yes') {
				$linkBtn = '<a href="#' . $record->id . '" class="btn btn-xs btn-info pickBtn" title="Pilih"><i class="fa fa-thumb-tack"></i> Pilih</a>';
			} else if ($picker == 'no') {
				$linkBtn = ' <a href="#' . $record->id . '" class="btn btn-xs btn-primary editBtn" title="Edit"  style="width:80px;margin:5px 5px 5px;><i class="fa fa-edit"></i> Edit</a>';
				if ($record->is_removeable == 1) {
					$linkBtn .= ' <a href="#' . $record->id . '" class="btn btn-xs btn-danger removeBtn" title="Hapus"  style="width:80px;margin:5px 5px 5px;><i class="fa fa-trash-o"></i> Hapus</a>';
				}
			}
			$data[] = array(
				'title' => $record->title,
				'is_publish' => statusYN($record->is_publish),
				'date' => $record->created_datetime,
				'aksi' => $linkBtn
			);
		}

		return $data;
	}

	function _user($records, $picker = 'no')
	{
		$data = array();
		// $data = self::list_user()
		foreach ($records as $record) {
			if ($picker == 'yes') {
				$linkBtn = '<a href="#' . $record->user_id . '" class="btn btn-xs btn-info pickBtn" title="Pilih"><i class="fa fa-thumb-tack"></i> Pilih</a>';
			} else if ($picker == 'no') {
				$linkBtn = ' <a href="#' . $record->user_id . '" class="btn btn-xs btn-primary editBtn" title="Edit"  style="width:80px;margin:5px 5px 5px;><i class="fa fa-edit"></i> Edit</a>';
				$linkBtn .= ' <a href="#' . $record->user_id . '" class="btn btn-xs btn-danger removeBtn" title="Hapus"  style="width:80px;margin:5px 5px 5px;><i class="fa fa-trash-o"></i> Hapus</a>';
			}
			$data[] = array(
				'username' => $record->username,
				'name' => $record->name,
				'position' => $record->position,
				'email' => $record->email,
				'phone' => $record->phone,
				'level' => $record->level,
				'is_active' => statusData($record->is_active),
				'nama_rs' => ($record->nama_rumahsakit) ? $record->nama_rumahsakit : 'Belum di setting',
				'aksi' => $linkBtn
			);
		}

		return $data;
	}

	function _setting($records, $picker = 'no')
	{
		$data = array();
		foreach ($records as $record) {
			if ($picker == 'yes') {
				$linkBtn = '<a href="#' . $record->setting_id . '" class="btn btn-xs btn-info pickBtn" title="Pilih"><i class="fa fa-thumb-tack"></i> Pilih</a>';
			} else if ($picker == 'no') {
				//manageable
				if ($record->is_system == 1) {
					$linkBtn = null;
				} else {
					$linkBtn = ' <a href="#' . $record->setting_id . '" class="btn btn-xs btn-primary editBtn" title="Edit"  style="width:80px;margin:5px 5px 5px;><i class="fa fa-edit"></i> Edit</a>';
					if ($record->is_removeable == 1) {
						$linkBtn .= ' <a href="#' . $record->setting_id . '" class="btn btn-xs btn-danger removeBtn" title="Hapus"  style="width:80px;margin:5px 5px 5px;><i class="fa fa-trash-o"></i> Hapus</a>';
					}
				}
			}
			$data[] = array(
				'description' => $record->description,
				'name' => $record->name_set,
				'value' => $record->value_set,
				'nama_rumahsakit' => $record->nama_rumahsakit,
				'is_active' => statusYN($record->is_active),
				'aksi' => $linkBtn
			);
		}

		return $data;
	}

	function _guestbook($records, $picker = 'no')
	{
		$data = array();

		foreach ($records as $record) {
			if ($picker == 'yes') {
				$linkBtn = '<a href="#' . $record->guestbook_id . '" class="btn btn-xs btn-info pickBtn" title="Pilih"><i class="fa fa-thumb-tack"></i> Pilih</a>';
			} else if ($picker == 'no') {
				$linkBtn = ' <a href="#' . $record->guestbook_id . '" class="btn btn-xs btn-info viewBtn" title="View"  style="width:80px;margin:5px 5px 5px;><i class="fa fa-eye"></i> View</a>';
				$linkBtn .= ' <a href="#' . $record->guestbook_id . '" class="btn btn-xs btn-danger removeBtn" title="Hapus"  style="width:80px;margin:5px 5px 5px;><i class="fa fa-trash-o"></i> Hapus</a>';
			}
			$data[] = array(
				'title' => $record->title,
				'name' => $record->name,
				'email' => $record->email,
				'type' => $record->type,
				'company' => $record->company,
				'nama_rumahsakit' => $record->nama_rumahsakit,
				'phone' => $record->phone,
				'date' => $record->created_datetime,
				'is_processed' => statusYN($record->is_processed),
				'aksi' => $linkBtn
			);
		}

		return $data;
	}

	function _gallery($records, $picker = 'no')
	{
		$data = array();

		foreach ($records as $record) {
			if ($picker == 'yes') {
				$linkBtn = '<a href="#' . $record->gallery_id . '" class="btn btn-xs btn-info pickBtn" title="Pilih"><i class="fa fa-thumb-tack"></i> Pilih</a>';
			} else if ($picker == 'no') {
				$linkBtn = ' <a href="#' . $record->gallery_id . '" class="btn btn-xs btn-info detailBtn" title="Manage Image"  style="width:90px;margin:5px 5px 5px;><i class="fa fa-image"></i> Manage Image</a>';
				$linkBtn .= ' <a href="#' . $record->gallery_id . '" class="btn btn-xs btn-primary editBtn" title="Edit"  style="width:80px;margin:5px 5px 5px;><i class="fa fa-edit"></i> Edit</a>';
				$linkBtn .= ' <a href="#' . $record->gallery_id . '" class="btn btn-xs btn-danger removeBtn" title="Hapus" style="width:80px;margin:5px 5px 5px;><i class="fa fa-trash-o"></i> Hapus</a>';
			}
			$data[] = array(
				'gallery_name' => $record->gallery_name,
				'description' => $record->description,
				'nama_rumahsakit' => $record->nama_rumahsakit,
				'is_publish' => statusYN($record->is_publish),
				'date' => $record->created_datetime,
				'aksi' => $linkBtn
			);
		}

		return $data;
	}

	function _gallery_video($records, $picker = 'no')
	{
		$data = array();

		foreach ($records as $record) {
			if ($picker == 'yes') {
				$linkBtn = '<a href="#' . $record->gallery_id . '" class="btn btn-xs btn-info pickBtn" title="Pilih"><i class="fa fa-thumb-tack"></i> Pilih</a>';
			} else if ($picker == 'no') {
				$linkBtn = ' <a href="#' . $record->gallery_id . '" class="btn btn-xs btn-info detailBtn" title="Manage Image"><i class="fa fa-image"></i> Manage Image</a>';
				$linkBtn .= ' <a href="#' . $record->gallery_id . '" class="btn btn-xs btn-primary editBtn" title="Edit"><i class="fa fa-edit"></i> Edit</a>';
				$linkBtn .= ' <a href="#' . $record->gallery_id . '" class="btn btn-xs btn-danger removeBtn" title="Hapus"><i class="fa fa-trash-o"></i> Hapus</a>';
			}
			$data[] = array(
				'gallery_name' => $record->gallery_name,
				'description' => $record->description,
				'nama_rumahsakit' => $record->nama_rumahsakit,
				'is_publish' => statusYN($record->is_publish),
				'date' => $record->created_datetime,
				'aksi' => $linkBtn
			);
		}

		return $data;
	}


	function _slide_form($records, $picker = 'no')
	{
		$data = array();

		foreach ($records as $record) {
			if ($picker == 'yes') {
				$linkBtn = '<a href="#' . $record->slide_id . '" class="btn btn-xs btn-info pickBtn" title="Pilih"><i class="fa fa-thumb-tack"></i> Pilih</a>';
			} else if ($picker == 'no') {
				$linkBtn = ' <a href="#' . $record->slide_id . '" class="btn btn-xs btn-info detailBtn" title="Manage Image"><i class="fa fa-image"></i> Manage Image</a>';
				$linkBtn .= ' <a href="#' . $record->coment_id . '" class="btn btn-xs btn-primary editBtn" title="Edit"><i class="fa fa-edit"></i> Edit</a>';
				$linkBtn .= ' <a href="#' . $record->slide_id . '" class="btn btn-xs btn-danger removeBtn" title="Hapus"><i class="fa fa-trash-o"></i> Hapus</a>';
			}
			$data[] = array(
				'title' => $record->title,
				'description' => $record->description,
				'alt' => $record->alt,
				'nama_rumahsakit' => $record->nama_rumahsakit,
				'aksi' => $linkBtn
			);
		}

		return $data;
	}

	function _coment($records, $picker = 'no')
	{
		$data = array();

		foreach ($records as $record) {
			if ($picker == 'yes') {
				$linkBtn = '<a href="#' . $record->coment_id . '" class="btn btn-xs btn-info pickBtn" title="Pilih"><i class="fa fa-thumb-tack"></i> Pilih</a>';
			} else if ($picker == 'no') {
				if ($record->is_approve == 1) {
					$class = "btn-warning warningBtn";
					$tittle = "unApprove";
					$icon = "fa fa-times";
				} else {
					$class = "btn-success checkBtn";
					$tittle = "Approve";
					$icon = "fa fa-check";
				}
				$linkBtn = ' <a href="#' . $record->coment_id . '" class="btn btn-xs btn-info viewBtn" title="View" style="width:80px;margin:5px 5px 5px;"><i class="fa fa-eye"></i> View</a>';
				$linkBtn .= ' <a href="#' . $record->coment_id . '" class="btn btn-xs ' . $class . ' title="' . $tittle . ' style="width:80px;margin:5px 5px 5px;"><i class="' . $icon . '"></i> ' . $tittle . '</a>';
				$linkBtn .= ' <a href="#' . $record->coment_id . '" class="btn btn-xs btn-danger removeBtn" title="Hapus" style="width:80px;margin:5px 5px 5px;><i class="fa fa-trash-o"></i> Hapus</a>';
			}
			$data[] = array(
				'name' => $record->name,
				'email' => $record->email,
				'content' => $record->content,
				'is_approve' => statusComment($record->is_approve),
				'date' => $record->created_datetime,
				'aksi' => $linkBtn
			);
		}

		return $data;
	}

	function _rumah_sakit($records, $picker = 'no')
	{
		$data = array();

		foreach ($records as $record) {
			if ($picker == 'yes') {
				$linkBtn = '<a href="#' . $record->id_rumahsakit . '" class="btn btn-xs btn-info pickBtn" title="Pilih"><i class="fa fa-thumb-tack"></i> Pilih</a>';
			} else if ($picker == 'no') {
				$linkBtn = ' <a href="#' . $record->id_rumahsakit . '" class="btn btn-xs btn-info editBtn" title="View"><i class="fa fa-edit"></i>Edit</a>';
				$linkBtn .= ' <a href="#' . $record->id_rumahsakit . '" class="btn btn-xs btn-danger removeBtn" title="Hapus"><i class="fa fa-trash-o"></i> Hapus</a>';
			}
			$data[] = array(
				'nama_rumahsakit' => $record->nama_rumahsakit,
				'alamat' => $record->alamat,
				'is_active' => statusData($record->is_active),
				'aksi' => $linkBtn
			);
		}

		return $data;
	}

	function _dokter($records, $picker = 'no')
	{

		$data = array();

		foreach ($records as $record) {
			if ($picker == 'yes') {
				$linkBtn = '<a href="#' . $record->id_dokter . '" class="btn btn-xs btn-info pickBtn" title="Pilih"><i class="fa fa-thumb-tack"></i> Pilih</a>';
			} else if ($picker == 'no') {
				$linkBtn = ' <a href="#' . $record->id_dokter . '" class="btn btn-xs btn-primary editBtn" title="Edit"<i class="fa fa-edit"></i> Edit</a>';
				$linkBtn .= ' <a href="#' . $record->id_dokter . '" class="btn btn-xs btn-danger removeBtn" title="Hapus"><i class="fa fa-trash-o"></i> Hapus</a>';
			}

			$data[] = array(
				'nama_dokter' => $record->nama_dokter,
				'bagian' => $record->bagian,
				'alamat' => $record->alamat,
				'ket' => $record->ket,
				'nama_rumahsakit' => $record->nama_rumahsakit,
				'is_active' => statusData($record->is_active),
				'aksi' => $linkBtn
			);
		}

		return $data;
	}

	function _jadwaldokter($records, $picker = 'no')
	{

		$data = array();

		foreach ($records as $record) {
			if ($picker == 'yes') {
				$linkBtn = '<a href="#' . $record->id_jadwal . '" class="btn btn-xs btn-info pickBtn" title="Pilih"><i class="fa fa-thumb-tack"></i> Pilih</a>';
			} else if ($picker == 'no') {
				$linkBtn = ' <a href="#' . $record->id_jadwal . '" class="btn btn-xs btn-primary editBtn" title="Edit"><i class="fa fa-edit"></i>Edit</a>';
				$linkBtn .= ' <a href="#' . $record->id_jadwal . '" class="btn btn-xs btn-danger removeBtn" title="Hapus"><i class="fa fa-trash-o"></i> Hapus</a>';
			}
			$data[] = array(
				'nama_dokter' => $record->nama_dokter,
				'bagian' => $record->bagian,
				'hari' => $record->hari,
				'jam' => $record->jam,
				'jam_pulang' => $record->jam_pulang,
				'ket' => $record->ket,
				'oncall' =>  statusYN($record->oncall),
				'nama_rumahsakit' => $record->nama_rumahsakit,
				'is_active' => statusData($record->is_active),
				'aksi' => $linkBtn
			);
		}

		return $data;
	}

	function _bagian($records, $picker = 'no')
	{

		$data = array();

		foreach ($records as $record) {
			if ($picker == 'yes') {
				$linkBtn = '<a href="#' . $record->id_bagian . '" class="btn btn-xs btn-info pickBtn" title="Pilih"><i class="fa fa-thumb-tack"></i> Pilih</a>';
			} else if ($picker == 'no') {
				$linkBtn = ' <a href="#' . $record->id_bagian . '" class="btn btn-xs btn-primary editBtn" title="Edit"><i class="fa fa-edit"></i>Edit</a>';
				$linkBtn .= ' <a href="#' . $record->id_bagian . '" class="btn btn-xs btn-danger removeBtn" title="Hapus"><i class="fa fa-trash-o"></i> Hapus</a>';
			}
			$data[] = array(
				'nama_bagian' => $record->nama_bagian,
				'nama_rumahsakit' => $record->nama_rumahsakit,
				'deskripsi' => $record->deskripsi,
				'urutan' => $record->urutan,
				'is_publish' => statusData($record->is_publish),
				'aksi' => $linkBtn
			);
		}

		return $data;
	}
}
