<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Image extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //  $this->load->model('Image_Model');
    }

    public function index()
    {
        $data['page'] = 'image/index';
        $this->load->view('layouts/content', $data);
    }

    public function saveImage()
    {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] =  'gif|jpg|png|jpeg|svg';
        $config['max_size'] = 10000;
        $config['file_name'] = md5(date('Y-m-d H:i:s')) . '_' . $_FILES['file']['name'];


        $this->load->library('upload', $config);   //load library
        //$this->upload->do_upload('file');   //upload file
        echo "<pre>";
        if (!$this->upload->do_upload('file')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            echo $data['file_name'];
            print_r($data);
        }
    }
}
