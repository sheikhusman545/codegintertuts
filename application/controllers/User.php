<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('User_Model');
        // this.classname->methodname
        $data['users'] = $this->User_Model->get_users();
        $data['title'] = "User";
        $data['page'] = 'user/index';
        $this->load->view('layouts/content', $data);
    }
    
}
