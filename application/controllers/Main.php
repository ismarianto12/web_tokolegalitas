<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }


    public function index($link = null)
    {
        $data_to_load = array(
            '_TITLE' => 'Selamat datang di Rs. Permata Keluarga',
            '_PAGE_CONTENT' => $this->load->view('home', null, TRUE)
            );

        $this->load->view('home',$data_to_load, FALSE);
    }

}