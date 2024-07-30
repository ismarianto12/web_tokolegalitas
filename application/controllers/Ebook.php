<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ebook extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        redirect();
    }

		public function ebook()
        {
            $data_to_load = null;
            //query from db
            $data_artikel['ebooks'] = $this->model->getList(array('table' => 'ebook', 'where' => array('is_publish' => 1),'sort' => 'created_datetime DESC'));
            if ($data_artikel) {
                $data_to_load = array(
                    '_TITLE' => 'E-Book',
                    '_PAGE_TITLE' => 'E-Book',
                    '_PAGE_LINK' => 'Ebook/ebook',
                    '_PAGE_LINK1' => 'Ebook/ebook',
                    '_PAGE_CONTENT' => $this->load->view('main/list_ebook', $data_artikel, TRUE)
                    );
            }
            $this->load->view('main/template_single_sidebar', $data_to_load, FALSE);
        }
        public function ebookdw()
        {
            $data_to_load = null;
            //query from db
            $data_artikel['ebooks'] = $this->model->getList(array('table' => 'ebook', 'where' => array('ebook_category_id' => '6','is_publish' => 1),'sort' => 'created_datetime DESC'));
            if ($data_artikel) {
                $data_to_load = array(
                    '_TITLE' => 'E-Book',
                    '_PAGE_TITLE' => 'E-Book',
                    '_PAGE_CONTENT' => $this->load->view('main/form_ebook', $data_artikel, TRUE)
                    );
            }
            $this->load->view('main/template_single_sidebar', $data_to_load, FALSE);
        }
        public function eboook()
        {
            $data_to_load = null;
            //query from db
            $data_artikel['articles'] = $this->model->getList(array('table' => 'article', 'where' => array('article_category_id' => '6','is_publish' => 1),'sort' => 'created_datetime DESC'));
            if ($data_artikel) {
                $data_to_load = array(
                    '_TITLE' => 'E-Book',
                    '_PAGE_TITLE' => 'E-Book',
                    '_PAGE_CONTENT' => $this->load->view('main/list_ebook', $data_artikel, TRUE)
                    );
            }
            $this->load->view('main/template_single_sidebar', $data_to_load, FALSE);
        }

}
