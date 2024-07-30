<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BagianModel extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'bagian';
        $this->isNew = false;
    }

    public function getField($inputs = array()) {
        $fields = array(
            'nama_bagian' => $inputs['nama_bagian-input'],
            'deskripsi' => $inputs['deskripsi-input'],
            'id_rumahsakit'   => $inputs['id_rumahsakit-input'],
            'urutan'   => $inputs['urutan-input'],
            'is_publish' => $inputs['publish-input']
          
        );
        return $fields;
    }
   
      public function getRules() {
        $newRule = '';
        $nama_bagian = array(
            'field' => 'nama_bagian-input', 'label' => 'Nama bagian',
            'rules' => 'trim|required|max_length[255]'
            );

        $deskripsi = array(
            'field' => 'deskripsi-input', 'label' => 'Deskripsi',
            'rules' => 'trim|required'
            );

        return array($nama_bagian, $deskripsi);
    }
}
