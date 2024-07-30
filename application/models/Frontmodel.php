<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontmodel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function artkeldepan($limit)
    {
        return $this->db->select('
        article.article_id,
        article.img, 
        article.content, 
        article.link, 
        DATE_FORMAT(article.created_datetime,"%Y %M %d") as created_datetime,
        article.title,
        article_category.description, 
        rumah_sakit.nama_rumahsakit, 
        article.created_by,
        rumah_sakit.id_rumahsakit as rs_id
        
        ')
            ->from('article')
            ->join('rumah_sakit', 'article.id_rumahsakit = rumah_sakit.id_rumahsakit')
            ->join('article_category', 'article.article_category_id = article_category.article_category_id')
            ->order_by('rand()')
            ->limit($limit)
            ->where('article.article_category_id !=', 4)
            ->get();
    }

    public function video_home($id_rs)
    {
        return $this->db->select('
        article.article_id,
        article.img, 
        article.content, 
        article.link, 
        DATE_FORMAT(article.created_datetime,"%Y %M %d") as created_datetime,
        article.title,
        article_category.description, 
        rumah_sakit.nama_rumahsakit, 
        article.created_by,
        rumah_sakit.id_rumahsakit as rs_id
        
        ')
            ->from('article')
            ->join('rumah_sakit', 'article.id_rumahsakit = rumah_sakit.id_rumahsakit')
            ->join('article_category', 'article.article_category_id = article_category.article_category_id')
            // ->order_by('rand()')
            ->where('article.article_category_id', 4)
            ->where('rumah_sakit.id_rumahsakit', $id_rs)
            ->get();
    }

    public function promo($id_rs)
    {
        return $this->db->select('
        article.article_id,
        article.img, 
        article.content, 
        article.link, 
        article.title,
        article_category.description, 
        rumah_sakit.nama_rumahsakit, 
        article.created_by,
        rumah_sakit.id_rumahsakit
        
        ')
            ->from('article')
            ->join('rumah_sakit', 'article.id_rumahsakit = rumah_sakit.id_rumahsakit')
            ->join('article_category', 'article.article_category_id = article_category.article_category_id')
            ->order_by('rand()')
            ->where('article_category.article_category_id', 10)
            ->where('rumah_sakit.id_rumahsakit', $id_rs)
            ->limit(3)
            ->get();
    }

    function get_data($page)
    {
        $data_page = $this->switch_page($page);
    }
    public function getDetail($ftitle, $fcat)
    {
        return $this->db->select('
        article.article_id,
        article.img, 
        article.content, 
        article.link, 
        article.title,
        article.created_datetime,
        article_category.description, 
        rumah_sakit.nama_rumahsakit, 
        article.created_by,
        rumah_sakit.id_rumahsakit
        ')
            ->from('article')
            ->join('rumah_sakit', 'article.id_rumahsakit = rumah_sakit.id_rumahsakit')
            ->join('article_category', 'article.article_category_id = article_category.article_category_id')
            ->where('article.link', $ftitle)
            ->where('article_category.category_name', $fcat)
            ->get();
    }

    function get_article($id_rs, $category, $per_page = null, $page = null, $link = null)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('article');
        $this->db->where('article_category_id', $category);
        $this->db->where('id_rumahsakit', $id_rs);
        if ($link != null) {
            $this->db->where('link', $link);
        }
        $this->db->limit($per_page, $page);
        $q = $this->db->get();
        $data = $q->result();
        return $data;
    }

    function get_all_dokter($id_rs, $per_page = null, $page = null)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('v_dokter');
        $this->db->where('id_rumahsakit', $id_rs);
        $this->db->limit($per_page, $page);
        $this->db->order_by('id_bagian', 'ASC');
        $q = $this->db->get();
        $data = $q->result();
        return $data;
    }

    function get_count_dokter($id_rs)
    {
        $data = array();
        $this->db->select('count(*) as num_rows');
        $this->db->from('v_dokter');
        $this->db->where('id_rumahsakit', $id_rs);
        $q = $this->db->get();
        $data = $q->row()->num_rows;

        return $data;
    }

    function get_limit_article($category,  $limit = null, $id = null)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('article');
        $this->db->where('article_category_id', $category);
        if ($limit != null)
            $this->db->limit($limit);
        if ($id != null)
            $this->db->where('article_id', $id);
        $q = $this->db->get();
        $data = $q->result();

        return $data;
    }

    function get_limit_dokter($id_rs, $limit = null, $id = null)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('dokter');
        $this->db->where('id_rumahsakit', $id_rs);
        if ($limit != null)
            $this->db->limit($limit);
        if ($id != null)
            $this->db->where('id_dokter', $id);
        $this->db->order_by('id_bagian', 'ASC');
        $q = $this->db->get();
        $data = $q->result();

        return $data;
    }

    function get_count($category)
    {
        $data = array();
        $this->db->select('count(*) as num_rows');
        $this->db->from('article');
        $this->db->where('article_category_id', $category);
        $q = $this->db->get();
        $data = $q->row()->num_rows;

        return $data;
    }

    public function get_all_services($limit, $start, $id = null)
    {
        $this->db->limit($limit, $start);
        if ($id != null)
            $this->db->where('product_id', $id);
        $query = $this->db->get("v_service_rcs");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }

            return $data;
        }
        return false;
    }

    function get_list_fasilitas($id_rs, $id = null, $limit = null)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('article');
        $this->db->where('article_category_id', 6);
        $this->db->where('id_rumahsakit', $id_rs);
        if ($id != null) {
            $this->db->where('article_id', $id);
        }
        if ($limit == 1)
            $this->db->limit(20);
        $q = $this->db->get();
        // $sql = $this->db->last_query();
        $data = $q->result();

        return $data;
    }
    function get_berita($id_rs, $category, $per_page = null, $page = null, $link = null)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('article');
        $this->db->where('article_category_id', $category);
        $this->db->where('id_rumahsakit', $id_rs);
        if ($link != null) {
            $this->db->where('link', $link);
        }
        $this->db->limit($per_page, $page);
        $q = $this->db->get();
        $data = $q->result();
        return $data;
    }
    function get_list_dokter($id_rs, $per_page = null, $page = null, $link = null)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('dokter');
        $this->db->where('id_rumahsakit', $id_rs);
        if ($link != null) {
            $this->db->where('link', $link);
        }
        $this->db->limit($per_page, $page);
        $q = $this->db->get();
        $data = $q->result();

        return $data;
    }
    function get_program($id_rs, $category, $per_page = null, $page = null, $link = null)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('article');
        $this->db->where('article_category_id', $category);
        $this->db->where('id_rumahsakit', $id_rs);
        if ($link != null) {
            $this->db->where('link', $link);
        }
        $this->db->limit($per_page, $page);
        $q = $this->db->get();
        $data = $q->result();
        return $data;
    }
    function get_loker($id_rs, $category, $per_page = null, $page = null, $link = null)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('article');
        $this->db->where('article_category_id', $category);
        $this->db->where('id_rumahsakit', $id_rs);
        if ($link != null) {
            $this->db->where('link', $link);
        }
        $this->db->limit($per_page, $page);
        $q = $this->db->get();
        $data = $q->result();
        return $data;
    }
    function get_contact($id_rs, $id = null, $limit = null)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('setting');
        $this->db->where('id_rumahsakit', $id_rs);
        if ($id != null) {
            $this->db->where('setting_id', $id);
        }
        if ($limit == 1)
            $this->db->limit(20);
        $q = $this->db->get();
        // $sql = $this->db->last_query();
        $data = $q->result();

        return $data;
    }

    function get_kerjasama($id_rs, $id = null, $limit = null)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('article');
        $this->db->where(array('article_category_id' => '10', 'id_rumahsakit' => $id_rs));
        if ($id != null) {
            $this->db->where('article_id', $id);
        }
        if ($limit == 1)
            $this->db->limit(20);
        $q = $this->db->get();
        // $sql = $this->db->last_query();
        $data = $q->result();

        return $data;
    }


    function get_slide($id_rumahsakit)
    {
        $data = array();
        $q = $this->db->get_where('slide', array('id_rumahsakit' => $id_rumahsakit, 'is_active' => 1));
        $data = $q->result();

        return $data;
    }

    function get_images($id_rumahsakit)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('gallery');
        $qgc = $this->db->get_where('gallery', array('site_id' => '6', 'alt' => 'general-cleaning'));
        $qdc = $this->db->get_where('gallery', array('site_id' => '6', 'alt' => 'deep-cleaning'));
        $qpc = $this->db->get_where('gallery', array('site_id' => '6', 'alt' => 'partial-cleaning'));
        $qpj = $this->db->get_where('gallery', array('site_id' => '6', 'alt' => 'pembersihan-jadwal'));
        $qts = $this->db->get_where('gallery', array('site_id' => '6', 'alt' => 'toilet-salon'));
        $qvideo = $this->db->get_where('cms_video', array('site_id' => '6'));
        $data['tipe']['gc'] = $qgc->result();
        $data['tipe']['dc'] = $qdc->result();
        $data['tipe']['pc'] = $qpc->result();
        $data['tipe']['pj'] = $qpj->result();
        $data['tipe']['ts'] = $qts->result();
        $data['tipe']['video'] = $qvideo->result();

        return $data;
    }

    function get_latest_news($id_rumahsakit)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('article');
        $this->db->where(array('article_category_id' => '6', 'id_rumahsakit' => $id_rumahsakit));
        $this->db->order_by('article_id', 'DESC');
        $this->db->limit('3');
        $q = $this->db->get();
        $data = $q->result();

        return $data;
    }

    function get_profil($id_rumahsakit)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('article');
        $this->db->where(array('article_category_id' => '7', 'id_rumahsakit' => $id_rumahsakit));
        $this->db->order_by('article_id', 'DESC');
        $this->db->limit('1');
        $q = $this->db->get();
        $data = $q->result();

        return $data;
    }

    function get_dokter($id_rs)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('dokter');
        $this->db->where(array('id_rumahsakit' => $id_rumahsakit));
        $this->db->order_by('nama_dokter', 'ASC');
        $this->db->limit('6');
        $q = $this->db->get();
        $data = $q->result();

        return $data;
    }
    function get_informasi($category, $per_page = null, $page = null, $link = null)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('article');
        $this->db->where('article_category_id', $category);
        if ($link != null) {
            $this->db->where('link', $link);
        }
        $this->db->limit($per_page, $page);
        $q = $this->db->get();
        $data = $q->result();
        return $data;
    }


    function get_jadwal_dokter($id_rumahsakit)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('v_jadwaldokter');
        $this->db->where(array('id_rumahsakit' => $id_rumahsakit));
        $this->db->order_by('urutan_jadwal', 'asc');
        $this->db->order_by('id_dokter', 'asc');
        $this->db->order_by('orderday', 'asc');
        $this->db->order_by('jam', 'asc');
        $q = $this->db->get();
        $data = $q->result();
        // echo $this->db->last_query();
        // print_r($data);die;

        return $data;
    }

    function get_jadwal_dokter_oncall($id_rumahsakit)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('v_jadwaldokter');
        $this->db->where(array('id_rumahsakit' => $id_rumahsakit));
        $this->db->where(array('oncall' => 1));
        $q = $this->db->get();
        $data = $q->result();

        return $data;
    }

    function get_ambulance($id_rs, $id = null, $limit = null)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('article');
        $this->db->where(array('article_category_id' => '8', 'id_rumahsakit' => $id_rs));
        if ($id != null) {
            $this->db->where('article_id', $id);
        }
        if ($limit == 1)
            $this->db->limit(20);
        $q = $this->db->get();
        // $sql = $this->db->last_query();
        $data = $q->result();

        return $data;
    }


    function getSingleSetting($article_id, $id_rumahsakit = null)
    {
        if ($id_rumahsakit == null) {
            $id_rumahsakit = '1';
        }
        $q = $this->db->get_where('setting', array('setting_id' => $setting_id, 'id_rumahsakit' => $id_rumahsakit));
        $data = $q->result();

        return $data;
    }
    function getSingleSettingKontak($setting_id, $id_rumahsakit = null)
    {
        if ($id_rumahsakit == null) {
            $id_rumahsakit = '1';
        }
        $q = $this->db->get_where('setting', array('setting_id' => $setting_id, 'id_rumahsakit' => $id_rumahsakit));
        $data = $q->result();

        return $data;
    }
    function get_video($setting_id, $id_rumahsakit = null)
    {
        if ($id_rumahsakit == null) {
            $id_rumahsakit = '1';
        }
        $q = $this->db->get_where('setting', array('setting_id' => $setting_id, 'id_rumahsakit' => $id_rumahsakit));
        $data = $q->result();

        return $data;
    }

    function getSingleSettingMaps($id_rumahsakit = null)
    {
        $setting_id = 0;
        switch ($id_rumahsakit) {
            case '1':
                $setting_id = 32;
                break;
            case '2':
                $setting_id = 33;
                break;
            case '3':
                $setting_id = 31;
                break;
        }
        $q = $this->db->get_where('setting', array('setting_id' => $setting_id));
        $data = $q->result();

        return $data;
    }
    function getSingleSettingMedsos($id_rumahsakit = null)
    {
        $setting_id = 0;
        switch ($id_rumahsakit) {
            case '1':
                $setting_id = 29;
                break;
            case '2':
                $setting_id = 30;
                break;
            case '3':
                $setting_id = 31;
                break;
        }
        $q = $this->db->get_where('setting', array('setting_id' => $setting_id));
        $data = $q->result();

        return $data;
    }



    function insert_guestbook($post)
    {
        $ins = array();
        $ins['name'] = $post['name-input'];
        $ins['content'] = $post['content-input'];
        $ins['title'] = $post['title-input'];
        $ins['email'] = $post['email-input'];
        $ins['phone'] = $post['phone-input'];
        $ins['id_rumahsakit'] = $post['id_rumahsakit-input'];
        $ins['created_datetime'] = date('Y-m-d H:i:s');
        $ins['type'] = 'guestbook';
        $q = $this->db->insert('guestbook', $ins);
        if ($this->db->affected_rows() > 0) {
            echo json_encode(array('code' => 1, 'message' => 'Pesan telah berhasil dikirim'));
        } else {
            echo json_encode(array('code' => 0, 'message' => ''));
        }
    }

    function switch_uri($uri)
    {
        $id_rs = null;
        switch ($uri) {
            case 'lippo':
                $id_rs = 1;
                break;
            case 'jababeka':
                $id_rs = 2;
                break;
            case 'galuhmas':
                $id_rs = 3;
                break;
        }

        return $id_rs;
    }

    function switch_idrs($idrs)
    {
        $id_rs = null;
        switch ($idrs) {
            case '1':
                $id_rs = 'lippo';
                break;
            case '2':
                $id_rs = 'jababeka';
                break;
            case '3':
                $id_rs = 'galuhmas';
                break;
        }

        return $id_rs;
    }

    function get_opt_rs()
    {
        $q = $this->db->get_where('rumah_sakit', array('is_active' => 1));
        return $q->result();
    }




    function get_opt_bagian($nm_rs)
    {
        $id_rs = $this->switch_uri($nm_rs);
        $data = array();
        $this->db->where(array('id_rumahsakit' => $id_rs));
        $this->db->group_by('id_bagian');
        $q = $this->db->get('v_bagian');
        return $q->result();
    }

    function get_opt_bagian_by_id($id_rs)
    {
        $data = array();
        $this->db->where(array('id_rumahsakit' => $id_rs));
        $this->db->group_by('id_bagian');
        $q = $this->db->get('v_bagian');
        $data['bagian'] = $q->result();
        return $data;
    }
    //addding model;
    public function get_listjadwal($id_dokter)
    {
        return $this->db->query("SELECT
            `j`.`id_jadwal` AS `id_jadwal`,
            `j`.`hari` AS `hari`,
            `j`.`jam` AS `jam`,
            `j`.`jam_pulang` AS `jam_pulang`,
            `j`.`id_dokter` AS `id_dokter`,
            `j`.`id_rumahsakit` AS `id_rumahsakit`,
            `j`.`ket` AS `ket`,
            `j`.`is_active` AS `is_active`,
            `j`.`oncall` AS `oncall`,
            `d`.`nama_dokter` AS `nama_dokter`,
            `bag`.`nama_bagian` AS `bagian`,
            `bag`.`id_bagian` AS `id_bagian`,
            `r`.`nama_rumahsakit` AS `nama_rumahsakit`,
            `bag`.`urutan` AS `urutan_jadwal`,(
            CASE
                    
                    WHEN ( `j`.`hari` = 'Senin' ) THEN
                    1 
                    WHEN ( `j`.`hari` = 'Selasa' ) THEN
                    2 
                    WHEN ( `j`.`hari` = 'Rabu' ) THEN
                    3 
                    WHEN ( `j`.`hari` = 'Kamis' ) THEN
                    4 
                    WHEN ( `j`.`hari` = 'Jumat' ) THEN
                    5 
                    WHEN ( `j`.`hari` = 'Senin-Jumat' ) THEN
                    6 
                    WHEN ( `j`.`hari` = 'Senin-Sabtu' ) THEN
                    7 
                    WHEN ( `j`.`hari` = 'Sabtu' ) THEN
                    8 
                    WHEN ( `j`.`hari` = 'Minggu1' ) THEN
                    9 
                    WHEN ( `j`.`hari` = 'Minggu2' ) THEN
                    10 
                    WHEN ( `j`.`hari` = 'Minggu3' ) THEN
                    11 
                    WHEN ( `j`.`hari` = 'Minggu4' ) THEN
                    12 
                    WHEN ( `j`.`hari` = 'Minggu1-Minggu5' ) THEN
                    13 ELSE 14 
                END 
                ) AS `orderday`,
                `d`.`img` AS `img` 
            FROM
                (((
                            `jadwal_dokter` `j`
                            JOIN `dokter` `d` ON ((
                                    `j`.`id_dokter` = `d`.`id_dokter` 
                                )))
                        JOIN `rumah_sakit` `r` ON ((
                                `j`.`id_rumahsakit` = `r`.`id_rumahsakit` 
                            )))
                    JOIN `bagian` `bag` ON (((
                                `r`.`id_rumahsakit` = `bag`.`id_rumahsakit` 
                            ) 
            AND ( `bag`.`id_bagian` = `d`.`id_bagian` ))))
            
            Where  j.id_dokter = '" . $id_dokter . "'
            ");
    }
}
