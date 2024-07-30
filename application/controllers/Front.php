<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Front extends CI_Controller
{
	private $activeSession;

	public function __construct()
	{
		parent::__construct();
		$this->activeSession = $this->session->userdata('_USER_ID');
		$this->load->model('frontmodel');
		$this->load->library('pagination');
	}

	public function index()
	{
		$this->home();
	}


	public function home()
	{
		$rs = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
		$id_rs = $this->frontmodel->switch_uri($rs);
		$data = array();
		$data['sliders'] = $this->frontmodel->get_slide($id_rs);
		// $data['dokter'] = $this->frontmodel->get_limit_dokter($id_rs, 3);
		// $data['profil'] = $this->frontmodel->get_profil($id_rs);
		// $data['fasilitas'] = $this->frontmodel->get_limit_article(6, $id_rs, 3);
		$data['rmahsakit']  = $this->db->get('rumah_sakit');
		$data['title'] = "TokoLegalitas.com - Jasa Pendirian PT, CV, Virtual Office, Pengurusan Izin";
		// print_r($this->db->get('rumah_sakit')->result());
		// exit;
		$data['video'] = $this->frontmodel->video_home($id_rs);
		$data['promos'] = $this->frontmodel->promo($id_rs);
		$data['infos'] = $this->frontmodel->artkeldepan($id_rs, 3);
		$data['id_rs'] = $id_rs;
		$data['rs'] = $rs;
		$this->template->load('layouts/template', 'home', $data);
	}

	public function informasi()
	{
		$link = null;
		$data = array();
		$start_index = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
		if (!is_numeric($start_index)) {
			$link = $start_index;
			$start_index = 0;
			$data['all'] = " hidden ";
			$data['one'] = " ";
		} else {

			$data['all'] = " ";
			$data['one'] = " hidden ";
		}
		$config = array();
		$config["base_url"] = base_url()."/informasi";
		$total_row = $this->frontmodel->get_count(1);
		$config["total_rows"] = $total_row;
		$config["per_page"] = 5;
		$config['use_page_number'] = TRUE;
		$config['num_links'] = $total_row;
	
		$config['full_tag_open'] = '<nav class="mt-5" aria-label="Page navigation example"><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav>';
		
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		
		$config['next_link'] = '»';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		
		$config['prev_link'] = '«';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link lh-sm" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		
		$config['attributes'] = array('class' => 'page-link lh-sm');
		

		$this->pagination->initialize($config);
		$data["informasi"] = $this->frontmodel->get_informasi(1, $config["per_page"], $start_index, $link);
		$data['single_article_info'] = $this->frontmodel->get_limit_article(1);
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;', $str_links);
		$data['title'] = 'Data list informasi';
		if ($link != NULL) {
			$cat = 'informasi';
			$this->detailarticle($cat, $link);
		} else {
			$this->template->load('layouts/template', 'frontend/informasi', $data,false);
		}
	}

	private function detailarticle($cat, $title)
	{
		$ftitle = trim($title);
		$sql = $this->frontmodel->getDetail($ftitle, $cat);
		if ($sql->num_rows() > 0) {
			$ret = $sql->row();
			$x = [

				'infos' => $this->frontmodel->artkeldepan(6),
				'value' => $ret,
				'title' => $ret->title,
			];
			$this->template->load('layouts/template', 'layouts/single_article', $x);
		} else {
			http_response_code(404);
			echo 'halaman yang di cari tidak ada';
		}
	}
	function single_article_info()
	{
		// print_r($_POST);
		// die;
		$rs = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
		$id_rs = $this->frontmodel->switch_uri($rs);
		$data = array();
		$config = array();
		$config["base_url"] = base_url() . $rs . "/single_article_info";
		$data['single_article_info'] = $this->frontmodel->get_info($id_rs, 1, $id_article, $limit = 1);
		$this->template->load('layouts/template', 'frontend/single_article_info', $data);
	}


	function single_article_fasilitas()
	{
		// print_r($_POST);die;
		$rs = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
		$id_rs = $this->frontmodel->switch_uri($rs);
		$data = array();
		$config = array();
		$config["base_url"] = base_url() . $rs . "/single_article_fasilitas";
		$data['single_article_fasilitas'] = $this->frontmodel->get_single($id_rs, 6, $id_article, $limit = 1);
		// echo $this->db->last_query();
		$this->load->view('frontend/single_article_fasilitas', $data);
	}



	public function berita()
	{

		$rs = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
		$id_rs = $this->frontmodel->switch_uri($rs);
		$link = null;
		$data = array();
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		if (!is_numeric($start_index)) {
			$link = $start_index;
			$start_index = 0;
			$data['all'] = "hidden";
			$data['one'] = " ";
		} else {

			$data['all'] = " ";
			$data['one'] = "hidden";
		}
		$config = array();
		$config["base_url"] = base_url() . $rs . "/berita";
		$total_row = $this->frontmodel->get_count($id_rs, 9);
		$config["total_rows"] = $total_row;
		$config["per_page"] = 5;
		$config['use_page_number'] = TRUE;
		$config['num_links'] = $total_row;
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';
		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
		$this->pagination->initialize($config);
		$data["berita"] = $this->frontmodel->get_article($id_rs, 9, $config["per_page"], $start_index, $link);
		$data['single_article_berita'] = $this->frontmodel->get_limit_article(9, $id_rs);
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;', $str_links);
		$this->load->view('frontend/berita', $data);
	}

	function single_article_berita()
	{
		if ($_REQUEST['a_id'] && $_REQUEST['ac_id'] && $_REQUEST['rs_id']) {
			$data['berita'] = $this->frontmodel->get_berita($_REQUEST['rs_id'], $_REQUEST['a_id']);
			$data['all_article'] = $this->frontmodel->get_berita($_REQUEST['rs_id']);
			$this->load->view('frontend/single_article_berita', $data);
		}
	}

	public function program()
	{

		$rs = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
		$id_rs = $this->frontmodel->switch_uri($rs);
		$link = null;
		$data = array();
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		if (!is_numeric($start_index)) {
			$link = $start_index;
			$start_index = 0;
			$data['all'] = "hidden";
			$data['one'] = " ";
		} else {

			$data['all'] = " ";
			$data['one'] = "hidden";
		}
		$config = array();
		$config["base_url"] = base_url() . $rs . "/program";
		$total_row = $this->frontmodel->get_count($id_rs, 8);
		$config["total_rows"] = $total_row;
		$config["per_page"] = 5;
		$config['use_page_number'] = TRUE;
		$config['num_links'] = $total_row;
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';
		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
		$this->pagination->initialize($config);
		$data["program"] = $this->frontmodel->get_program($id_rs, 8, $config["per_page"], $start_index, $link);
		$data['single_article_program'] = $this->frontmodel->get_limit_article(8, $id_rs);
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;', $str_links);
		$this->load->view('frontend/program', $data);
	}

	function single_article_program()
	{
		if ($_REQUEST['a_id'] && $_REQUEST['ac_id'] && $_REQUEST['rs_id']) {
			$data['program'] = $this->frontmodel->get_program($_REQUEST['rs_id'], $_REQUEST['a_id']);
			$data['all_article'] = $this->frontmodel->get_program($_REQUEST['rs_id']);
			$this->load->view('frontend/single_article_program', $data);
		}
	}


	public function fasilitas()
	{
		$rs = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
		$id_rs = $this->frontmodel->switch_uri($rs);
		$link = null;
		$data = array();
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		if (!is_numeric($start_index)) {
			$link = $start_index;
			$start_index = 0;
			$data['all'] = "hidden";
			$data['one'] = " ";
		} else {

			$data['all'] = " ";
			$data['one'] = "hidden";
		}
		$config = array();
		$config["base_url"] = base_url() . $rs . "/fasilitas";
		$total_row = $this->frontmodel->get_count($id_rs, 6);
		$config["total_rows"] = $total_row;
		$config["per_page"] = 5;
		$config['use_page_number'] = TRUE;
		$config['num_links'] = $total_row;
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';
		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
		$this->pagination->initialize($config);
		$data['rs'] = $rs;
		$data["fasilitas"] = $this->frontmodel->get_article($id_rs, 6, $config["per_page"], $start_index, $link);
		$data['list_fasilitas'] = $this->frontmodel->get_limit_article(6, $id_rs);
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;', $str_links);
		if ($link != NULL) {
			$cat = 'fasilitas';
			$this->detailarticle($rs, $cat, $link);
			// var_dump($id_rs, 1, $config["per_page"], $start_index, $link);
		} else {
			$this->template->load('layouts/template', 'frontend/fasilitas', $data);
		}
	}

	public function profil()
	{
		$rs = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
		$id_rs = $this->frontmodel->switch_uri($rs);
		$link = null;
		$data = array();
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		if (!is_numeric($start_index)) {
			$link = $start_index;
			$start_index = 0;
			$data['all'] = "hidden";
			$data['one'] = " ";
		} else {

			$data['all'] = " ";
			$data['one'] = "hidden";
		}
		$config = array();
		$config["base_url"] = base_url() . $rs . "/profil";
		$total_row = $this->frontmodel->get_count($id_rs, 7);
		$config["total_rows"] = $total_row;
		$config["per_page"] = 5;
		$config['use_page_number'] = TRUE;
		$config['num_links'] = $total_row;
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';
		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
		$this->pagination->initialize($config);
		$data["profil"] = $this->frontmodel->get_profil($id_rs, 7, $config["per_page"], $start_index, $link);
		$data['profil'] = $this->frontmodel->get_limit_article(7, $id_rs);
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;', $str_links);
		$this->load->view('frontend/profil', $data);
	}

	function get_single()
	{
		// print_r($_POST);die;
		if ($_POST['a_id'] && $_POST['ac_id'] && $_POST['rs_id'] && $_POST['page']) {
			$data['article'] = $this->frontmodel->get_limit_article($_POST['ac_id'], $_POST['rs_id'], null, $_POST['a_id']);
			$data['all_article'] = $this->frontmodel->get_limit_article($_POST['ac_id'], $_POST['rs_id']);
			$this->load->view('frontend/' . $_POST['page'], $data);
		}
	}
	public function ambulance()
	{

		$rs = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
		$id_rs = $this->frontmodel->switch_uri($rs);
		$link = null;
		$data = array();
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		if (!is_numeric($start_index)) {
			$link = $start_index;
			$start_index = 0;
			$data['all'] = "hidden";
			$data['one'] = " ";
		} else {

			$data['all'] = " ";
			$data['one'] = "hidden";
		}
		$config = array();
		$config["base_url"] = base_url() . $rs . "/ambulance";
		$total_row = $this->frontmodel->get_count($id_rs, 8);
		$config["total_rows"] = $total_row;
		$config["per_page"] = 5;
		$config['use_page_number'] = TRUE;
		$config['num_links'] = $total_row;
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';
		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
		$this->pagination->initialize($config);
		$data["ambulance"] = $this->frontmodel->get_article($id_rs, 8, $config["per_page"], $start_index, $link);
		$data['single_article_ambulance'] = $this->frontmodel->get_limit_article(8, $id_rs);
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;', $str_links);
		$this->load->view('frontend/ambulance', $data);
	}


	public function promo($id_rumahsakit = null, $id_article = null)
	{
		$rs = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
		$id_rs = $this->frontmodel->switch_uri($rs);
		$link = null;
		$data = array();
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		if (!is_numeric($start_index)) {
			$link = $start_index;
			$start_index = 0;
			$data['all'] = " hidden";
			$data['one'] = " ";
		} else {

			$data['all'] = " ";
			$data['one'] = " hidden";
		}
		$data['rs'] = $rs;
		$config = array();
		$config["base_url"] = base_url() . $rs . "/promo";
		$total_row = $this->frontmodel->get_count($id_rs, 10);
		$config["total_rows"] = $total_row;
		$config["per_page"] = 5;
		$config['use_page_number'] = TRUE;
		$config['num_links'] = $total_row;
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';
		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
		$this->pagination->initialize($config);
		$data["promo"] = $this->frontmodel->get_article($id_rs, 10, $config["per_page"], $start_index, $link);
		$data['single_article_promo'] = $this->frontmodel->get_limit_article(10, $id_rs);
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;', $str_links);
		$data['title'] = "Promo Nama Kantor";
		if ($link != NULL) {
			$cat = 'informasi';
			$this->detailarticle($rs, $cat, $link);
			// var_dump($id_rs, 1, $config["per_page"], $start_index, $link);
		} else {
			$this->template->load('layouts/template', 'frontend/promo', $data);
		}
	}
	public function loker()
	{

		$rs = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
		$id_rs = $this->frontmodel->switch_uri($rs);
		$link = null;
		$data = array();
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		if (!is_numeric($start_index)) {
			$link = $start_index;
			$start_index = 0;
			$data['all'] = " hidden";
			$data['one'] = " ";
		} else {

			$data['all'] = " ";
			$data['one'] = " hidden";
		}
		$config = array();
		$config["base_url"] = base_url() . $rs . "/loker";
		$total_row = $this->frontmodel->get_count($id_rs, 3);
		$config["total_rows"] = $total_row;
		$config["per_page"] = 5;
		$config['use_page_number'] = TRUE;
		$config['num_links'] = $total_row;
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';
		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
		$this->pagination->initialize($config);
		$data["loker"] = $this->frontmodel->get_article($id_rs, 3, $config["per_page"], $start_index, $link);
		$data['single_article_loker'] = $this->frontmodel->get_limit_article(3, $id_rs);
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;', $str_links);
		$data['lsrumahsakit'] = $this->db->get('rumah_sakit');
		$data['rs'] = $rs;
		if ($link != NULL) {
			$cat = 'informasi';
			$this->detailarticle($rs, $cat, $link);
		} else {
			$this->template->load('layouts/template', 'frontend/loker', $data);
		}
	}

	function single_article_loker()
	{
		if ($_REQUEST['a_id'] && $_REQUEST['ac_id'] && $_REQUEST['rs_id']) {
			$data['loker'] = $this->frontmodel->get_loker($_REQUEST['rs_id'], $_REQUEST['a_id']);
			$data['all_article'] = $this->frontmodel->get_loker($_REQUEST['rs_id']);
			$this->template->load('layouts/template', 'frontend/single_article_loker', $data);
		}
	}

	public function pendaftaran()
	{

		$rs = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
		$id_rs = $this->frontmodel->switch_uri($rs);
		$link = null;
		$data = array();
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		if (!is_numeric($start_index)) {
			$link = $start_index;
			$start_index = 0;
			$data['all'] = " hidden";
			$data['one'] = " ";
		} else {

			$data['all'] = " ";
			$data['one'] = " hidden";
		}
		$config = array();
		$config["base_url"] = base_url() . $rs . "/pendaftaran";
		$total_row = $this->frontmodel->get_count($id_rs, 11);
		$config["total_rows"] = $total_row;
		$config["per_page"] = 5;
		$config['use_page_number'] = TRUE;
		$config['num_links'] = $total_row;
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';
		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
		$this->pagination->initialize($config);
		$data["pendaftaran"] = $this->frontmodel->get_article($id_rs, 11, $config["per_page"], $start_index, $link);
		$data['single_article_pendaftaran'] = $this->frontmodel->get_limit_article(3, $id_rs);
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;', $str_links);
		$this->load->view('frontend/pendaftaran', $data);
	}

	function single_article_pendaftaran()
	{
		if ($_REQUEST['a_id'] && $_REQUEST['ac_id'] && $_REQUEST['rs_id']) {
			$data['loker'] = $this->frontmodel->get_loker($_REQUEST['rs_id'], $_REQUEST['a_id']);
			$data['all_article'] = $this->frontmodel->get_pendaftaran($_REQUEST['rs_id']);
			$this->load->view('frontend/single_article_pendaftaran', $data);
		}
	}



	public function contact($id_rumahsakit = null, $setting_id = null)
	{
		$data = array();
		$rs = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';

		$id_rumahsakit = (isset($_REQUEST['id_rumahsakit'])) ? $_REQUEST['id_rumahsakit'] : 1;
		$data['contact'] = $this->frontmodel->get_contact($id_rumahsakit, $setting_id);
		$data['id_rs'] = $id_rumahsakit;
		$data['rs'] = $rs;
		// echo $this->db->last_query();
		$this->template->load('layouts/template', 'frontend/contact', $data);
	}

	function list_fasilitas()
	{
		// print_r($_POST);die;
		if ($_POST['a_id'] && $_POST['ac_id'] && $_POST['rs_id']) {
			$data['fasilitas'] = $this->frontmodel->get_list_fasilitas($_POST['rs_id'], $_POST['a_id']);
			$data['all_article'] = $this->frontmodel->get_list_fasilitas($_POST['rs_id']);
			$this->load->view('frontend/list_fasilitas', $data);
		}
	}
	public function list_dokter()
	{
		$rs = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
		$id_rs = $this->frontmodel->switch_uri($rs);
		$data = array();
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$config = array();
		$config["base_url"] = base_url() . $rs . "/list_dokter";
		$total_row = $this->frontmodel->get_count_dokter($id_rs);
		$config["total_rows"] = $total_row;
		$config["per_page"] = 6;
		$config['use_page_number'] = TRUE;
		$config['num_links'] = $total_row;
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';
		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
		$this->pagination->initialize($config);
		$data['dokter'] = $this->frontmodel->get_all_dokter($id_rs, $config["per_page"], $start_index);
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;', $str_links);
		// echo $this->db->last_query();
		$this->load->view('frontend/list_dokter', $data);
	}

	function get_jadwal_dokter()
	{
		if (isset($_REQUEST['id_rs'])) {
			if (isset($_REQUEST['on_call'])) {
				$data = $this->frontmodel->get_jadwal_dokter_oncall($_REQUEST['id_rs']);
			} else {
				$data = $this->frontmodel->get_jadwal_dokter($_REQUEST['id_rs']);
			}
			// print_r($data);
			// echo json_encode(array('data'=>$data,'total'=>count($data)));
			return $data;
		}
	}




	public function gallery($id_rumahsakit = null, $gallery_id = null)
	{
		$data = array();
		$all_data = array();
		$all_data = $this->frontmodel->get_images();
		foreach ($all_data as $key => $value) {
			$data['gc'] = $value['gc'];
			$data['dc'] = $value['dc'];
			$data['pc'] = $value['pc'];
			$data['pj'] = $value['pj'];
			$data['ts'] = $value['ts'];
			$data['video'] = $value['video'];
		}
		$this->load->view('frontend/gallery', $data);
	}

	public function jadwal()
	{
		$rs = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
		$id_rs = $this->frontmodel->switch_uri($rs);
		$data = array();
		$data['jadwal_dokter'] = $this->frontmodel->get_jadwal_dokter($id_rs);
		$data['jadwal_dokter_oncall'] = $this->frontmodel->get_jadwal_dokter_oncall($id_rs);
		$data['rmahsakit']  = $this->db->get('rumah_sakit');
		$data['rs'] = $rs;
		$data['id_rs'] = $id_rs;
		$data['title'] = ":: Jadwal Dokter ::";
		$this->template->load('layouts/template', 'frontend/jadwal_dokter', $data);

		// echo json_encode($data['jadwal_dokter'], JSON_PRETTY_PRINT);
		// exit();
	}

	public function load_id($id_dokter)
	{
		$fid = strip_tags($id_dokter);
		$count = $this->frontmodel->get_listjadwal($id_dokter)->num_rows();
		$data['data'] = $count;
		$data['x'] = $this->frontmodel->get_listjadwal($id_dokter);
		$this->load->view('frontend/dokter_jadwal_id', $data);
	}

	public function booking()
	{
		$data = array();
		$data['province'] = $this->frontmodel->get_province();
		$data['kat_service'] = $this->frontmodel->get_kat_service();
		$data['tipe_costumer'] = $this->frontmodel->tipe_customer();
		$this->load->view('frontend/booking', $data);
	}

	function get_kab()
	{
		$id = $_POST['id_prov'];
		$data = $this->frontmodel->get_kabupaten($id);
		echo json_encode(array('data' => $data));
	}

	function regC()
	{
		print_r($_POST);
		die;
	}

	function send_guestbook()
	{
		if ($_POST) {
			$q = $this->frontmodel->insert_guestbook($_POST);
		}
	}

	function get_opt_rs()
	{
		$this->frontmodel->get_opt_rs();
	}
}
