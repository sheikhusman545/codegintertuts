<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('function');
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
        $this->db->delete('users', array(
            'id' => $id
        ));
        redirect('User/index');
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $this->load->model('User_Model');
        $data['user']  = $this->User_Model->get_user_by_id($id);
        $data['title'] = 'Edit User';
        $data['page'] =  'user/edit';
        // dd($data);
        $this->load->view('layouts/content', $data);
    }

    public function update()
    {
        $this->load->model('User_Model');
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[2]|max_length[20]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[7]');

        if ($this->form_validation->run() == FALSE) {
            $this->edit();
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'created_at' => date('Y-m-d H:i:s')
            );
            $res = $this->User_Model->update_users($data, $this->input->post('id'));

            if ($res) {
                redirect('User/index');
            } else {
                redirect('User/edit');
            }
        }
    }
}
