<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends Model
{

    public function __construct()
    {
        parent::__construct();
        $this->table = 'm_user';
        $this->isNew = false;
        $this->load->library('cryptorgram');
    }

    public function getField($inputs = array())
    {
        $fields = array(
            'username' => $inputs['username-input'],
            'name' => $inputs['name-input'],
            /*'position' => $inputs['position-input'],*/
            'rumahsakit_id' => $inputs['rumahsakit_id'],
            'email' => $inputs['email-input'],
            'phone' => $inputs['phone-input'],
            'level' => $inputs['level-input'],
            'is_active' => $inputs['status-input']
        );

        if (trim($inputs['password-input']) != '') {
            $fields['password'] = md5($inputs['password-input']);
        }

        return $fields;
    }

    public function getRules()
    {
        $newRule = ($this->isNew) ? '|is_unique[' . $this->table . '.username]' : '';
        $username = array(
            'field' => 'username-input',
            'label' => 'Username',
            'rules' => 'trim|required|max_length[35]' . $newRule
        );
        $password = array(
            'field' => 'password-input',
            'label' => 'Password',
            'rules' => 'trim|max_length[21]'
        );
        $name = array(
            'field' => 'name-input',
            'label' => 'Name',
            'rules' => 'trim|required|max_length[50]'
        );
        $email = array(
            'field' => 'email-input',
            'label' => 'Email',
            'rules' => 'trim|valid_email|required|max_length[255]'
        );
        $phone = array(
            'field' => 'phone-input',
            'label' => 'Telpon',
            'rules' => 'trim|max_length[50]'
        );
        $level = array(
            'field' => 'level-input',
            'label' => 'Level',
            'rules' => 'trim|required|max_length[50]'
        );
        $level = array(
            'field' => 'rumahsakit_id',
            'label' => 'Nama Kantor',
            'rules' => 'trim|required|max_length[50]'
        );
        $is_active = array(
            'field' => 'status-input',
            'label' => 'Status',
            'rules' => 'trim|required|max_length[1]'
        );

        return array($username, $password, $name, $email, $phone, $level, $is_active);
    }
}
