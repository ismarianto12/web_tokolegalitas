<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loker extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index($link = null)
        {   
            $data_to_load = null;
            $this->db->order_by('article_id','DESC');
            $this->db->where(array('article_category_id' => '6','is_publish' => 1));
            $data_artikel = $this->db->get('article');
            if ($data_artikel) {
                $data = $data_artikel->result();
                $data_to_load['data'] = $data;
            }
            $this->load->view('loker',$data_to_load, FALSE);
        }

}