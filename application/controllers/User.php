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

    public function create()
    {
        $data['title'] = 'Add User';
        $data['page'] =  'user/create';
        $this->load->view('layouts/content', $data);

    }

    public function save()
    {
        $data = array(
            'name' => $this->input->post('name'), 
            'email' => $this->input->post('email'), 
            'password' => $this->input->post('password') 
        );
      if($this->db->insert('users', $data)){
        redirect('User/index');
      }else{
        $this->create();
      }
    }

    public function delete()
    {
        $id =  $this->uri->segment(3);
        $array = array(
            'id' => $id
        );
        $this->db->delete('users', $array);
        redirect('User/index');
    }

    public function edit()
    {
        echo $this->uri->segment(3);
    }

    public function update()
    {
    }
}
