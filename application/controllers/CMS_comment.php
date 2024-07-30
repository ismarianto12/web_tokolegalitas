<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMS_comment extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {
        redirect(site_url());
    }
    
    public function proses() {
        // print_r($_POST);
        // die;
        /*
        * code info:
        *   - 0 = akses tidak sah
        *   - 1 = proses berhasil
        *   - 2 = proses gagal
        */
        $code = 0;
        $message = '';
        /* collect request */
        $action = 1; // create, update, delete
        $model = 'comentmodel';

        $this->load->model($model);
        $this->$model->isNew(($action == $this->$model->CREATE)); // if action is for creating new data, ignore unique field

        $this->form_validation->set_rules($this->$model->getRules());
        $recaptcha = $this->input->post('g-recaptcha-response');
        if (!empty($recaptcha)) {
            $response = $this->recaptcha->verifyResponse($recaptcha);
            if ($this->form_validation->run() == true  &&  $response['success'] == true) {   
                $result = self::_do($this->$model, $action, $this->input->post(null));
                //send email if success
                if ($result) {
                    //
                    $this->do_mail_comment($this->db->insert_id());    
                }
                $code = ($result) ? 1 : 2;
            } else {
                $delimiter = '- ';
                $this->form_validation->set_error_delimiters($delimiter, '');
                $message = validation_errors();
            }
        }else{
            $message = validation_errors();
            echo json_encode(array('datax' => array(
                'code' => 2,
                'message' => "Captcha error"
            )));
        }

        

        echo json_encode(array('data' => array(
            'code' => $code,
            'message' => $message,
            'last_id' => $this->$model->getLastID()
        )));
    }

    /*
    * inner process
    */
    private function _do($model, $action, $inputs) {
        $query = array(
        'table' => $model->getTable(),
        'type' => $action,
        'data' => $model->getField($inputs),
            'at' => array(
                $inputs['key-input'] => $inputs['value-input']
            ) // clause for model
        );
        return $model->action($query); // do...
    }

    /*
    * email send notification comment to receiver
    */
    public function do_mail_comment($id = null) {
        $ret = FALSE;
        $this->load->library('emailutil');
        //the downloader
        $comment = $this->model->getRecord(array('table' => 'coment', 'where' => array('coment_id' => $id)));
        if ($comment) {
            //receiver
            $member = strip_tags($this->settingmodel->getSetByName("email_receiver"));
            if ($member) {
                $params['to'] = $member;
                $params['subject'] = '[New Comment] from : ' . $comment->name;
                $params['message'] = 'New comment from, '.$comment->name.' ('.$comment->email.'). Comment not publish if not approved, please check & approve it. 
                ';
                //do send
                $this->emailutil->sendEmail($params);
                $ret = TRUE;
            }
        }
        
        return $ret;
    }

    public function changeStatus($comment_id = null, $newStatus = 1)    
    {
        $comment_id = $this->input->post('comment_id');     
        if ($comment_id && $newStatus) {
            $data = $this->model->getRecord(array('table' => 'coment', 'where' => array('coment_id' => $comment_id)));            
            if ($data) {
                //update status
                if($data->is_approve == 1){
                    $newStatus = 2;
                    $this->db->update('coment', array('is_approve' => $newStatus), array('coment_id'=>$comment_id));
                    echo json_encode(array('data' => array(
                        'code' => 1,
                        'message' => 'Sukses unApprove Comment'
                    )));                    
                }else{
                    $newStatus = 1;
                    $this->db->update('coment', array('is_approve' => $newStatus), array('coment_id'=>$comment_id));
                    echo json_encode(array('data' => array(
                        'code' => 1,
                        'message' => 'Sukses Approve Comment'
                    )));
                }
                
            } else {
                echo json_encode(array('data' => array(
                    'code' => 2,
                    'message' => 'Gagal Approve/unApprove Comment'
                )));
            }
        } else {
            echo json_encode(array('data' => array(
                'code' => 2,
                'message' => 'Gagal Approve/unApprove Comment'
            )));
        }
    }


}

    
