<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EbookcategoryModel extends Model {

    public function __construct() {
        parent::__construct();
        //table DB yg digunakan
        $this->table = 'ebook_category';
        //img folder, jika diperlukan
        $this->imgFolder = 'ebooke-category';
        //default new false
        $this->isNew = false;
    }

    //maping field di form ke kolom di tabel DB
    public function getField($inputs = array()) {
        $fields = array(
            'category_name' => $inputs['name-input'],
            //'link' => $inputs['link-input'],    //link otomatis ding eh
            'description' => $inputs['description-input'],
            'is_active' => $inputs['status-input']
        );

        if ($this->isNew) {
            $fields['link'] = url_title($inputs['name-input'],'-',TRUE);
        }

        //return kan yg sudah dimapping
        return $fields;
    }

    //validation rule, minimal 1
    public function getRules() {
        //new rule jika unik
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