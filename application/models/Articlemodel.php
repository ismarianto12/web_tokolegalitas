<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArticleModel extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'article';
        $this->imgFolder = 'article';
        $this->isNew = false;
    }

    public function getField($inputs = array()) {
        $fields = array(
            'title' => $inputs['title-input'],
            'content' => $inputs['content-input'],
            'article_category_id' => (isset($inputs['category-input'])) ? $inputs['category-input'] : null,
            'id_rumahsakit'   => $inputs['id_rumahsakit-input'],
            'is_publish' => $inputs['publish-input'],
            'updated_by' => $this->session->userdata('_USER_ID'),
            'updated_datetime' => date('Y-m-d H:i:s')
        );

        if ($this->isNew) {
            $fields['link'] = url_title($inputs['title-input'],'-',TRUE);
            $fields['created_by'] = $this->session->userdata('_USER_ID');
            $fields['created_datetime'] = date('Y-m-d H:i:s');
        }

        return $fields;
    }

    public function getRules() {
        $newRule = ($this->isNew) ? '|is_unique[' . $this->table . '.title]' : '';
        $title = array(
            'field' => 'title-input',
            'label' => 'Title ',
            'rules' => 'trim|required|max_length[255]' . $newRule
        );

        $content = array(
            'field' => 'content-input',
            'label' => 'Content',
            'rules' => 'trim|required'
        );
        
        return array($title, $content);
    }
}