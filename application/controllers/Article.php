    <?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Article extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
        }


        public function index()
        {
            redirect();
        }

        public function program($link = null)
        {
            $data_to_load = null;
            $data_artikel['articles'] = $this->model->getList(array('table' => 'v_article', 'where' => array('article_category_id' => '1', 'is_publish' => 1), 'sort' => 'created_datetime ASC'));
            if ($data_artikel) {
                $data_to_load = array(
                    '_TITLE' => 'Program',
                    '_PAGE_TITLE' => 'Program',
                    '_PAGE_LINK' => 'program',
                    '_PAGE_LINK1' => 'program',
                    '_PAGE_CONTENT' => $this->load->view('main/list_program', $data_artikel, TRUE)
                );
            }

            $this->load->view('main/template_single_sidebar', $data_to_load, FALSE);
        }

        public function program_detail($link = null)
        {
            $data_to_load = null;
            $data = $this->model->getRecord(array('table' => 'v_article', 'where' => array('link' => $link, 'is_publish' => 1)));
            if ($data) {
                $data_to_load = array(
                    '_ID' => $data->article_id,
                    '_TITLE' => $data->title,
                    '_PAGE_TITLE' => $data->category_name,
                    '_PAGE_TITLE1' => $data->title,
                    '_PAGE_LINK' => 'program',
                    '_PAGE_LINK1' => $data->link,
                    '_PAGE_CONTENT' => $data->content
                );
            }

            $this->load->view('main/template_single_sidebar_comment', $data_to_load, FALSE);
        }

        public function training()
        {
            $data_to_load = null;
            $data_artikel['articles'] = $this->model->getList(array('table' => 'article', 'where' => array('article_category_id' => '5', 'is_publish' => 1), 'sort' => 'created_datetime DESC'));
            if ($data_artikel) {
                $data_to_load = array(
                    '_TITLE' => 'Training',
                    '_PAGE_TITLE' => 'Training',
                    '_PAGE_CONTENT' => $this->load->view('main/list_article', $data_artikel, TRUE)
                );
            }
            $this->load->view('main/template_single_sidebar', $data_to_load, FALSE);
        }

        public function article()
        {
            $data_to_load = null;
            $data_artikel['articles'] = $this->model->getList(array('table' => 'v_article', 'where' => array('article_category_id' => '3', 'is_publish' => 1), 'sort' => 'created_datetime DESC'));
            if ($data_artikel) {
                $data_to_load = array(
                    '_TITLE' => 'Article',
                    '_PAGE_TITLE' => 'Article',
                    '_PAGE_LINK' => 'article',
                    '_PAGE_LINK1' => 'article',
                    '_PAGE_CONTENT' => $this->load->view('main/list_article', $data_artikel, TRUE)
                );
            }
            $this->load->view('main/template_single_sidebar', $data_to_load, FALSE);
        }

        public function article_detail($link = null)
        {
            $data_to_load = null;
            $data = $this->model->getRecord(array('table' => 'v_article', 'where' => array('link' => $link, 'is_publish' => 1)));
            if ($data) {
                $data_to_load = array(
                    '_ID' => $data->article_id,
                    '_TITLE' => $data->title,
                    '_PAGE_TITLE' => 'Article',
                    '_PAGE_TITLE1' => $data->title,
                    '_PAGE_LINK' => 'article',
                    '_PAGE_LINK1' => $data->link,
                    '_PAGE_CONTENT' => $data->content
                );
            }
            $this->load->view('main/template_single_sidebar_comment', $data_to_load, FALSE);
        }

        public function promo()
        {
            // var_dump('ss');
            $data_to_load = null;
            $data_artikel['articles'] = $this->model->getList(array('table' => 'v_article', 'where' => array('article_category_id' => '2', 'is_publish' => 1), 'sort' => 'created_datetime DESC'));
            if ($data_artikel) {
                $data_to_load = array(
                    '_TITLE' => 'Article',
                    '_PAGE_TITLE' => 'Promo',
                    '_PAGE_LINK' => 'promo',
                    '_PAGE_LINK1' => 'promo',
                    '_PAGE_CONTENT' => $this->template->load('layouts/template', 'main/list_promo', $data_artikel)
                );
            }
            $this->template->load('layouts/template', 'main/list_promo', $data_to_load);
        }

        public function promo_detail($link = null)
        {
            // var_dump('aasd');
            $data_to_load = null;
            $data = $this->model->getRecord(array('table' => 'v_article', 'where' => array('link' => $link, 'is_publish' => 1)));
            if ($data) {
                $data_to_load = array(
                    '_ID' => $data->article_id,
                    '_TITLE' => $data->title,
                    '_PAGE_TITLE' => $data->category_name,
                    '_PAGE_TITLE1' => $data->title,
                    '_PAGE_LINK' => 'promo',
                    '_PAGE_LINK1' => $data->link,
                    '_PAGE_CONTENT' => $data->content
                );
            }

            $this->load->view('main/template_single_sidebar_comment', $data_to_load, FALSE);
        }
    }
