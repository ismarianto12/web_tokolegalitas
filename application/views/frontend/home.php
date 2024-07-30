<?php
	$data = array(
		// '_title'=> $this->session->userdata('_NAME') . '@' . $this->config->item('app_name'),
		// '_content'=>'',
		// '_menu'=>$this->load->view('template/_menu','',TRUE),
		// '_extra_js'=>'loadContent(base_url + "view/_dashboard");'
	);

	$this->load->view('frontend/index',$data);	//file template
?>