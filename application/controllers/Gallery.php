<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        redirect();
    }

    public function gallery_list()
    {
        $data_to_load = null;
        //query from db
        $data_artikel['articles'] = $this->model->getList(array('table' => 'gallery', 'where' => array('is_publish' => 1),'sort' => 'created_datetime DESC'));
        if ($data_artikel) {
            $data_to_load = array(
                '_TITLE' => 'Gallery Foto',
                '_PAGE_TITLE' => 'Gallery Foto',
                '_PAGE_LINK' => 'album',
                '_PAGE_LINK1' => 'album',
                '_PAGE_CONTENT' => $this->load->view('main/list_album', $data_artikel, TRUE)
                );
        }

        $this->load->view('main/template_single_sidebar', $data_to_load, FALSE);
    }


    public function gallery_detail($link = null)

    {
    	$data_to_load = null;
        //query from db
        $data_artikel['articles'] = $this->model->getList(array('table' => 'v_gallery', 'where' => array('link' => $link, 'is_active' => 1),'sort' => 'created_datetime DESC'));
        if ($data_artikel) {
            $data_to_load = array(
                '_TITLE' => 'List Foto',
                '_PAGE_TITLE' => 'Gallery Foto',
                '_PAGE_TITLE1' => 'List Foto',
                '_PAGE_LINK' => 'album',
                '_PAGE_CONTENT' => $this->load->view('foto_gallery', $data_artikel, TRUE)
                );
        }

        $this->load->view('main/detail_gallery', $data_to_load, FALSE);
    }

    public function program($link = null)
    {
        $data_to_load = null;
        //query from db
        $page = $this->model->getRecord(array('table' => 'v_article', 'where' => array('link' => $link, 'is_publish' => 1)));
        if ($page) {
            $data_to_load = array(
                '_TITLE' => strip_tags($page->gallery_name),
                '_PAGE_TITLE' => $page->title,
                '_PAGE_DESC' => $page->description,
                /*'_PAGE_CONTENT' => $page->content,*/
                '_TGL_CREATED' => $page->created_datetime
                );
        }

        $this->load->view('main/template_single_sidebar', $data_to_load, FALSE);
    }

    public function video_list($link = null)
    {
    	$data_to_load = null;
        //query from db
        $data_artikel['articles'] = $this->model->getList(array('table' => 'article', 'where' => array('article_category_id' => 4, 'is_publish' => 1),'sort' => 'created_datetime DESC'));
        if ($data_artikel) {
            $data_to_load = array(
                '_TITLE' => 'Gallery Video',
                '_PAGE_TITLE' => 'Gallery Video',
                '_PAGE_TITLE1' => '',
                '_PAGE_LINK' => 'video',
                '_PAGE_CONTENT' => $this->load->view('main/video_view', $data_artikel, TRUE)
                );
        }

        $this->load->view('main/list_video', $data_to_load, FALSE);
    }



}
