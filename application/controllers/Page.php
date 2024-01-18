<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function index()
    {
        $data['page'] = 'pages/index';
        $this->load->view('layouts/content', $data);
    }

    public function page1()
    {
        $data['title'] = "Page 1";
        $data['page'] = 'pages/page1';
        $this->load->view('layouts/content', $data);
    }
}