<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Product_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_products()
    {

        //active record method
        // $this->db->select('id,name,email,created_at');
        // $this->db->from('users');
        // $this->db->order_by('id', 'DESC');
        // $data = $this->db->get()->result_array(); 

        //raw query method
        //$data = $this->db->query("SELECT * FROM users order by id desc")->result();

        $data = $this->db->get('products')->result();
        return $data;
    }

    public function save_products($data)
    {
        $this->db->insert('products', $data);
    }
}
