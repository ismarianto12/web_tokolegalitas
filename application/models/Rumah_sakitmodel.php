<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rumah_sakitmodel extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'rumah_sakit';
        $this->isNew = false;
    }

    public function getField($inputs = array()) {
        $fields = array(
            'nama_rumahsakit' => $inputs['nama_rumahsakit-input'],
            'alamat'          => $inputs['alamat-input'],
            'is_active'       => $inputs['status-input']
        );


        return $fields;
    }

    public function getRules() {
       
        $nama_rumahsakit = array(
            'field' => 'nama_rumahsakit-input', 'label' => 'Nama Nama Kantor',
            'rules' => 'trim|required|max_length[255]'
            );

        $alamat = array(
            'field' => 'alamat-input', 'label' => 'Alamat',
            'rules' => 'trim|required|max_length[255]'
            );

        return array($nama_rumahsakit, $alamat);
    }
}