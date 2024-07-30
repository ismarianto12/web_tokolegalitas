<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SettingModel extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'setting';
        $this->isNew = false;
    }

    public function getField($inputs = array()) {
        $fields = array(
            'name_set' => $inputs['name-input'],
            'value_set' => $inputs['val-input'],
            'id_rumahsakit'   => $inputs['id_rumahsakit-input'],
            'is_active' => $inputs['status-input'],
            'description' => $inputs['description-input']
        );

        return $fields;
    }

    public function getRules() {
        $newRule = ($this->isNew) ? '|is_unique[' . $this->table . '.name_set]' : '';
        $name = array(
            'field' => 'name-input',
            'label' => 'Name Set ',
            'rules' => 'trim|required|max_length[255]' . $newRule
        );

        $val = array(
            'field' => 'val-input',
            'label' => 'Value',
            'rules' => 'trim|required'
        );
        
        return array($name, $val);
    }

    public function getSetByName($name_set ='')
    {
        $set = $this->getRecord(array('table' => 'setting', 'where' => array('name_set' => $name_set,'is_active' => 1, )));
        if ($set) {
            return $set->value_set;
        } else {
            return null;
        }
    }
}