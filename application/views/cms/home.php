<?php
//  print_r($_SESSION);



$data = array(
	'_TITLE' => 'Adminpanel',
	'_CONTENT' => '',
	'user' => $this->session->userdata('_NAME')
	//'_MENU'=>$this->load->view('cms/template/_menu','',TRUE),
	//'_EXTRA_JS'=>'loadContent(base_url + "view/_dashboard");'


);

$this->load->view('cms/template/index', $data);	//file template
