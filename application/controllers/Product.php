<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('Product_Model');
        // this.classname->methodname
        $data['products'] = $this->Product_Model->get_products();
        $data['title'] = "Product";
        $data['page'] = 'product/product';
        $this->load->view('layouts/content', $data);
    }
    public function add()
    {
    }

    public function save()
    {
    }

    public function delete()
    {

        $id =  $this->uri->segment(3);
        $array = array(
            'id' => $id
        );
        $this->db->delete('products', $array);
        redirect('product');
    }

    public function edit()
    {
        echo $this->uri->segment(3);
    }

    public function update()
    {
    }   
    
}
