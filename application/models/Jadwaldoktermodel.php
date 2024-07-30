<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalDokterModel extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'jadwal_dokter';
        $this->imgFolder = 'jadwal_dokter';
        $this->isNew = false;
    }

    public function getField($inputs = array()) {
        $fields = array(
            'id_dokter'          => $inputs['id_dokter-input'],
            'hari'               => $inputs['hari-input'],
            'jam'                => $inputs['jam-input'],
            'jam_pulang'         => $inputs['jam_pulang-input'],
            'id_rumahsakit'      => $inputs['id_rumahsakit-input'],

            // 'bagian'             => $inputs['bagian-input'],

            //'bagian'             => $inputs['bagian-input'],

            'ket'                => $inputs['ket-input'],
            'oncall'             => $inputs['oncall-input'],
            'is_active'          => $inputs['status-input']
            
            );


        return $fields;
    }

    public function getRules() {
        $newRule =  '';
        $dokter = array(
            'field' => 'id_dokter-input',
            'label' => 'Dokter ',
            'rules' => 'trim|required|max_length[255]' . $newRule
            );        
        return array($dokter);
    }
}