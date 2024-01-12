<?php
defined('BASEPATH') or exit('No direct script access allowed');


class User_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_users()
    {

        //active record method
        // $this->db->select('id,name,email,created_at');
        // $this->db->from('users');
        // $this->db->order_by('id', 'DESC');
        // $data = $this->db->get()->result_array(); 

        //raw query method
        //$data = $this->db->query("SELECT * FROM users order by id desc")->result();

        $data = $this->db->get('users')->result();
        return $data;
    }

    public function save_users($data)
    {
        $this->db->insert('users', $data);
    }
}
