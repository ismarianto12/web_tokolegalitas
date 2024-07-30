<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArticlecategoryModel extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'article_category';
        $this->imgFolder = 'article-category';
        $this->isNew = false;
    }

    public function getField($inputs = array()) {
        $fields = array(
            'category_name' => $inputs['name-input'],
            'description' => $inputs['description-input'],
            'is_active' => $inputs['status-input']
        );

        if ($this->isNew) {
            $fields['link'] = url_title($inputs['name-input'],'-',TRUE);
        }

        return $fields;
    }

    public function getRules() {
        $newRule = ($this->isNew) ? '|is_unique[' . $this->table . '.category_name]' : '';
        $name = array(
            'field' => 'name-input',
            'label' => 'Category Name',
            'rules' => 'trim|required|max_length[255]' . $newRule
        );

        $description = array(
            'field' => 'description-input',
            'label' => 'Description',
            'rules' => 'trim'
        );
        
        return array($name, $description);
    }
}