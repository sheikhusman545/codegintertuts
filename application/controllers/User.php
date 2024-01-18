<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
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
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[2]|max_length[20]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[7]');

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password'))
            );
            if ($this->db->insert('users', $data)) {
                redirect('User/index');
            }
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
