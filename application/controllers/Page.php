<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        redirect();
    }

    public function contact()
    {
        $data['title'] = "Kontak Kami";
        $this->template->load('layouts/template', 'main/contact',  ['page' => '', $data], FALSE);
    }

    public function profile($link = null)
    {
        $page = $this->model->getRecord(array('table' => 'page', 'where' => array('link' => $link, 'is_publish' => 1)));
        $this->template->load('layouts/template', 'main/template_single_sidebar',  ['page' => $page, 'title' => isset($page->title) ? $page->title : 'Unde Construction'], FALSE);
    }
    public function training($link = null)
    {
        $data_to_load = null;
        $page = $this->model->getRecord(array('table' => 'page', 'where' => array('link' => 'training', 'is_publish' => 1)));
        if ($page) {
            $data_to_load = array(
                '_TITLE' => strip_tags($page->title),
                '_PAGE_TITLE' => 'Training',
                '_PAGE_CONTENT' => $page->content,
                '_PAGE_LINK' => 'Page/training',
                '_PAGE_LINK1' => 'Page/training', $page->link,
                '_TGL_CREATED' => $page->created_datetime
            );
        }
        $this->load->view('main/template_single_sidebar', $data_to_load, FALSE);
    }

    function pengajuanproposal()
    {
        $page['title'] = "Pengajuan Proposal";
        $this->template->load('layouts/template', 'main/pengajuan_proposal',  ['page' => $page], FALSE);
    }
}
