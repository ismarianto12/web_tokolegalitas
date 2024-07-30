<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_detailModel extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'gallery_detail';
        $this->imgFolder = 'gallery';
        $this->isNew = false;
    }

    public function getField($inputs = array()) {
        $fields = array(
            'is_active' => $inputs['status'],
            'id_rumahsakit'   => $inputs['id_rumahsakit-input']
        );

        return $fields;
    }

    public function getRules() {

        $status = array(
            'field' => 'status', 'label' => 'status',
            'rules' => 'trim|max_length[2]'
        );
        
        return array($status);
    }
}