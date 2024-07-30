<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GalleryModel extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'gallery';
        //$this->imgFolder = 'gallery';
        $this->isNew = false;
    }

    public function getField($inputs = array()) {
        $fields = array(
            'gallery_name'     => $inputs['name-input'],
            'description'      => $inputs['description-input'],
            'id_rumahsakit'    => $inputs['id_rumahsakit-input'],
            'is_publish'       => $inputs['publish-input']
        );

        if ($this->isNew) {
            $fields['link'] = url_title($inputs['name-input'],'-',TRUE);
            $fields['created_by'] = $this->session->userdata('_USER_ID');
            $fields['created_datetime'] = date('Y-m-d H:i:s');
        }

        return $fields;
    }

    public function getRules() {
        $newRule = ($this->isNew) ? '|is_unique[' . $this->table . '.gallery_name]' : '';
        $name = array(
            'field' => 'name-input',
            'label' => 'Gallery Name ',
            'rules' => 'trim|required|max_length[255]' . $newRule
        );

        $description = array(
            'field' => 'description-input',
            'label' => 'Description',
            'rules' => 'trim|required'
        );
        
        return array($name, $description);
    }
}