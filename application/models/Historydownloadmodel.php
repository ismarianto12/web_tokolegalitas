<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistorydownloadModel extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'download_history';
        $this->isNew = false;
    }

    public function getField($inputs = array()) {
        $fields = array(
            'title' => $inputs['title-input'],
            'content' => $inputs['content-input'],
            'name' => $inputs['name-input'],
            'email' => $inputs['email-input'],
            'phone' => (isset($inputs['phone-input'])) ? $inputs['phone-input'] : null,
            'type' => (isset($inputs['type-input'])) ? $inputs['type-input'] : null,
            'company' => (isset($inputs['company-input'])) ? $inputs['company-input'] : null,
            'address' => (isset($inputs['address-input'])) ? $inputs['address-input'] : null,
            'created_datetime' => date("Y-m-d H:i:s")
        );

        return $fields;
    }

    public function getRules() {
        $name = array(
            'field' => 'name-input',
            'label' => 'Name',
            'rules' => 'trim|required|max_length[200]'
        );

        $email = array(
            'field' => 'email-input',
            'label' => 'Email',
            'rules' => 'trim|required|max_length[200]|valid_email'
        );

        $title = array(
            'field' => 'title-input', 'label' => 'Title',
            'rules' => 'trim|required|max_length[255]'
        );

        $content = array(
            'field' => 'content-input',
            'label' => 'Content',
            'rules' => 'trim|required'
        );
        
        return array($name, $email, $title, $content);
    }
}