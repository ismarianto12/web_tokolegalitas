<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EbookModel extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'ebook';
        $this->imgFolder = 'ebook';
        $this->isNew = false;
    }

    public function getField($inputs = array()) {
        $fields = array(
            'title' => $inputs['title-input'],
            'ket' => $inputs['ket-input'],
            'link' => $inputs['link-input'],
            'ebook_category_id' => (isset($inputs['category-input'])) ? $inputs['category-input'] : null,
            'is_publish' => $inputs['publish-input'],
            'updated_by' => $this->session->userdata('_USER_ID'),
            'updated_datetime' => date('Y-m-d H:i:s')
        );

        if ($this->isNew) {
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

        $ket = array(
            'field' => 'ket-input',
            'label' => 'ket',
            'rules' => 'trim|required'
        );
        
        return array($title, $ket);
    }
}