<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMS_uploader extends CI_Controller {
    private $activeSession; // store session

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->activeSession = $this->session->userdata('_USER_ID');
    }

    public function index() {
        redirect(site_url('view/home'));
    }

    function proses_upload()
    {
        $code = 0;
        $message = '';

        if ($this->activeSession != null) {
            $this->form_validation->set_rules('nama_field', 'Field', 'trim|required');  //untuk nama input file
            $this->form_validation->set_rules('model', 'Model', 'trim|required');
            $this->form_validation->set_rules('key', 'ID', 'trim|required');
            $this->form_validation->set_rules('value', 'Identifier', 'trim|required');
            
            if ($this->form_validation->run() == FALSE){
                $delimiter = '- ';
                $this->form_validation->set_error_delimiters($delimiter, '.<br>');
                $message = validation_errors();
                echo json_encode(array('error'=>$message));
            } else {
                //model
                $model = $this->input->post('model') . 'model';
                $this->load->model($model);
                //upload config
                $fld = 'assets/image/' . $this->$model->imgFolder . '/';
                $config['upload_path'] = $fld;
                $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                $config['max_size'] = '10000';
                //$config['max_width']  = '1940';
                //$config['max_height']  = '900';
                //$config['file_name']  = $image_name;
                //load library
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload($this->input->post('nama_field')))
                {
                    $message = $this->upload->display_errors();
                    echo json_encode(array('error'=>$message));
                } else {
                    $result = $this->upload->data();
                    if($result !=''){
                        foreach ($result as $item => $value){
                            $image_filename = $result['file_name'];
                        }

                        //buat thumbnail
                        $config1['image_library'] = 'gd2';
                        $config1['source_image'] = $fld . $image_filename;
                        $config1['new_image'] = $fld . 'thumb';
                        $config1['maintain_ratio'] = FALSE;
                        $config1['width'] = 400;
                        $config1['height'] = 300;
                            
                        $this->load->library('image_lib', $config1);
                        //resize 
                        $this->image_lib->resize();

                        //build query
                        $query = array(
                            'table' => $this->$model->getTable(),
                            'type' => $this->model->UPDATE, 
                            'data' => array('img' => $image_filename), 
                            'at' => array($this->input->post('key') => $this->input->post('value')) // clause for model
                        );
                        $result = $this->$model->action($query); // do...
                        if ($result) {
                            //$message = msgbox('ok', 'Data berhasil disimpan.');
                            echo json_encode(array());
                        } else {
                            $message = 'File gagal di upload.';
                            echo json_encode(array('error' => $message));
                        }
                    }
                }
            }
        }
    }

    public function proses_upload_slide()
    {
        $code = 0;
        $message = '';

        if ($this->activeSession != null) {
            $this->form_validation->set_rules('nama_field', 'Field', 'trim|required');
            
            if ($this->form_validation->run() == FALSE){
                $delimiter = '- ';
                $this->form_validation->set_error_delimiters($delimiter, '.<br>');
                $message = validation_errors();
                echo json_encode(array('error'=>$message));
            } else {
                //upload gambar...
                $fld = 'assets/image/slide/';
                $config['upload_path'] = $fld;
                $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                $config['max_size'] = '10000';
                //$config['max_width']  = '1940';
                //$config['max_height']  = '900';
                //$config['file_name']  = $image_name;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload($this->input->post('nama_field')))
                {
                    $message = $this->upload->display_errors();
                    echo json_encode(array('error'=>$message));
                } else {
                    $result = $this->upload->data();
                    if($result !=''){
                        foreach ($result as $item => $value){
                            $image_filename = $result['file_name'];
                        }

                        //buat thumbnail
                        $config1['image_library'] = 'gd2';
                        $config1['source_image'] = $fld . $image_filename;
                        $config1['new_image'] = $fld . 'thumb';
                        $config1['maintain_ratio'] = FALSE;
                        $config1['width'] = 400;
                        $config1['height'] = 300;
                            
                        $this->load->library('image_lib', $config1);
                        //resize 
                        $this->image_lib->resize();

                        //build query
                        $data = array(
                            'img' => $image_filename,
                            'title' => $this->input->post('title'),
                            'description' => $this->input->post('description'),
                            'id_rumahsakit' => $this->input->post('id_rumahsakit'),
                            'alt' => $this->input->post('alt')
                            );
                        $result = $this->db->insert('slide', $data); // do...
                        echo $this->db->last_query();
                        if ($result) {
                            echo json_encode(array());
                        } else {
                            $message = 'File gagal di upload.';
                            echo json_encode(array('error'=>$message));
                        }
                    }
                }
            }
        }
    }

    public function proses_upload_gallery()
    {
        $code = 0;
        $message = '';

        if ($this->activeSession != null) {
            $this->form_validation->set_rules('nama_field', 'Field', 'trim|required');  //untuk nama input file
            $this->form_validation->set_rules('value', 'Identifier', 'trim|required');
            
            if ($this->form_validation->run() == FALSE){
                $delimiter = '- ';
                $this->form_validation->set_error_delimiters($delimiter, '.<br>');
                $message = validation_errors();
                echo json_encode(array('error'=>$message));
            } else {
                //upload gambar...
                $fld = 'assets/image/gallery/';
                $config['upload_path'] = $fld;
                $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                $config['max_size'] = '10000';
                //$config['max_width']  = '1940';
                //$config['max_height']  = '900';
                //$config['file_name']  = $image_name;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload($this->input->post('nama_field')))
                {
                    $message = $this->upload->display_errors();
                    echo json_encode(array('error'=>$message));
                } else {
                    $result = $this->upload->data();
                    if($result !=''){
                        foreach ($result as $item => $value){
                            $image_filename = $result['file_name'];
                        }

                        //buat thumbnail
                        $config1['image_library'] = 'gd2';
                        $config1['source_image'] = $fld . $image_filename;
                        $config1['new_image'] = $fld . 'thumb';
                        $config1['maintain_ratio'] = FALSE;
                        $config1['width'] = 400;
                        $config1['height'] = 300;
                            
                        $this->load->library('image_lib', $config1);
                        //resize 
                        $this->image_lib->resize();

                        //build query
                        $data = array(
                            'img' => $image_filename,
                            'gallery_id' => $this->input->post('value'),
                            'title' => $this->input->post('title'),
                            'id_rumahsakit' => $this->input->post('id_rumahsakit'),
                            'description' => $this->input->post('description'),
                            'alt' => $this->input->post('alt')
                            );
                        $result = $this->db->insert('gallery_detail', $data); // do...
                        if ($result) {
                            //$message = msgbox('ok', 'Data berhasil disimpan.');
                            echo json_encode(array());
                        } else {
                            $message = 'File gagal di upload.';
                            echo json_encode(array('error'=>$message));
                        }
                    }
                }
            }
        }
    }

    
}
/* End of file Uploader.php */
/* Location: ./application/controllers/Uploader.php */