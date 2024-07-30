<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class post extends CI_controller {

    //property $post_limit untuk pengaturan limit post
    //yang akan ditampilkan perhalaman 

    private $post_limit = 5;

    public function __construct()
    {
        parent::__construct();
        // include helper yang akan digunakan 
        $this->load->helper(array('url','form'));

        //include model post_m 
        $this->load->model('post_m');
    }
    function post_loop($user_id, $offset = 0 ) {
        // ambil data post dari dattbase 
        $post = $this->post_m->get_posts($user_id, $offset, $this->post_limit);
        // siampkan variabel untuk memuat sejumlah data yang nantinya akan di layout 
        $all_post = '';
        //layout semua data dari database ke view 
        foreach ($posts as $post):
        //ganti dengan data asli 'nama' dari database 
        $post ['nama'] = 'Agus';
        // kirim $data ke view lalu tambahkan hasilnya ke $all_post
$all_post = $this->load->view('template_single_sidebar',$post, true);
endforeach;
return $all_posts;
    }
    function index($page = 0)
    //judul halaman  
    $data ['judul'] = "post";
    // muat view  form_komentar.php  untuk di tampilkan dihalaman utama
    $data['form_komentar'] = $this->load->view ('post/form_komentar', null, true);
    // set batas awal pengambilan datab 
    $offset = $page * $this->post_limit;

    // muat konten post menggunakan methode $this->post_loop()
    //ganti parameter pertama dengan id user yang sedang aktif 
    $data ['total_post'] = $this->post_m->total_post(1);
    $data ['page'] = $page;
    $data ['limit'] = $this->post_limit;

    //tampilan $data ke view post/template_single_sidebar.php
    $this->load->view ('post/template_single_sidebar', $data);

}


	
