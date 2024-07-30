<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends Model
{

    public function __construct()
    {
        parent::__construct();
        $this->table = 'm_user';
        $this->isNew = FALSE;
    }

    public function getRules()
    {
        $id = array(
            'field' => 'username-input',
            'label' => 'Username',
            'rules' => 'trim|required|max_length[100]'
        );

        $pass = array(
            'field' => 'password-input',
            'label' => 'Password',
            'rules' => 'trim|required|max_length[100]'
        );

        return array($id, $pass);
    }
}
