<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DokterModel extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'dokter';
        $this->imgFolder = 'dokter';
        $this->isNew = false;
    }

    public function getField($inputs = array()) {
        $fields = array(
            'nama_dokter'     => $inputs['nama_dokter-input'],
            'id_bagian'       => $inputs['bagian-input'],
            'id_rumahsakit'   => $inputs['rumah_sakit-input'],
            'alamat'          => $inputs['alamat-input'],
            'ket'             => $inputs['ket-input'],
           'is_active'        => $inputs['status-input']
           
        );


        return $fields;
    }

    public function getRules() {
        $newRule = '';
        $bagian = array(
            'field' => 'bagian-input',
            'label' => 'Content',
            'rules' => 'trim|required|max_length[150]'
        );
        
        return array($bagian);
    }
}
