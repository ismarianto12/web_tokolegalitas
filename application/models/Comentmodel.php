<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ComentModel extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'coment';
        $this->isNew = false;
    }

    public function getField($inputs = array()) {
        $fields = array(
            'article_id' => (isset($inputs['id-input'])) ? $inputs['id-input'] : null,
            'parent_coment_id' => (isset($inputs['parent-id-input'])) ? $inputs['parent-id-input'] : null,
            'content' => $inputs['content-input'],
            'name' => $inputs['name-input'],
            'email' => $inputs['email-input'],
            'created_datetime' => date("Y-m-d H:i:s")
        );

        //jika input baru
        if ($this->isNew) {
            $fields['is_approve'] = 0;
        }

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

        $content = array(
            'field' => 'content-input',
            'label' => 'Content',
            'rules' => 'trim|required'
        );
        
        return array($name, $email, $content);
    }
}