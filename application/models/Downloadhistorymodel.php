<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DownloadhistoryModel extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'download_history';
        $this->isNew = false;
    }

    public function getField($inputs = array()) {
        $fields = array(
            'ebook_id' => $inputs['id-ebook-input'],
            'name' => $inputs['name-input'],
            'email' => $inputs['email-input'], 
            'ket' => $inputs['content-input'],
            'download_datetime' => date("Y-m-d H:i:s")
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