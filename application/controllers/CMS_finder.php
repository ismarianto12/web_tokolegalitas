<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMS_finder extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('pagination');
	}

	public function index() {
		redirect(site_url('view/home'));
	}

	public function resultdata() {
		$keywords = $this->input->get('key');
		$n = ($this->input->get('per_page') != null) ? $this->input->get('per_page') : 0;//$this->uri->segment(2);
		$str = explode('/', $keywords);
		$keyword = (isset($str) && $str[0] != '')? $str[0] : $keywords;
		//view
		$view_template = 'main/template_single_sidebar';
		$view = 'cms/_search_result';
		/*paging*/
		$a = $this->model->getList(array('table' => 'article', 'where' => array(
			'title' => $keyword
			), 'similar' => true));
		$config['base_url'] = base_url('search?key=' . $keyword .'/'); //set the base url for pagination
		$config['total_rows'] = count($a); //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 2; //see from base_url. 3 for this case
		$config['page_query_string'] = true;
		$this->pagination->initialize($config); //initialize pagination
		$data['result'] = $this->model->getList(array('table' => 'article', 'where' => array(
			'title' => $keyword
			), 'similar' => true, 'limits' => array($config['per_page'], $n)));
		$dt['_PAGE_TITLE'] = $data['keyword'] = 'Hasil pencarian "' . $keyword .'" <small>(total '. count($a) . ' hasil ditemukan)</small>';
		$dt['_PAGE_CONTENT'] = $this->load->view($view, $data, TRUE);

		$this->load->view($view_template, $dt);
	}
}
