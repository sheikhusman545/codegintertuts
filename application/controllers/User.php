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
        //active record method
        // $this->db->select('id,name,email,created_at');
        // $this->db->from('users');
        // $this->db->order_by('id', 'DESC');
        // $data['users'] = $this->db->get()->result(); 
        $data['users'] = $this->db->get('users')->result();
        //raw query method
        //$data['users'] = $this->db->query("SELECT * FROM users order by id desc")->result();
        $data['title'] = "User";
        $data['page'] = 'user/index';
        $this->load->view('layouts/content', $data);
    }
}
