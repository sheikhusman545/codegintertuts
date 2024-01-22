<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
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
        $data['title'] = 'Add Product';
        $data['page'] = 'product/add';
        $this->load->view('layouts/content', $data);
    }

  


    public function save()
    {
        // File upload configuration
        $config['upload_path'] = './upload/';
        $config['allowed_types'] =  'gif|jpg|png|jpeg|svg';
        $config['max_size'] = 10000;
        $config['file_name'] = md5(date('Y-m-d H:i:s')) . '_' . $_FILES['file']['name'];

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            // File upload failed
            $data['error'] = $this->upload->display_errors();
            $data['title'] = 'add product';
            $data['page'] = 'product/add';
            $this->load->view('layouts/content', $data);
        } else {
            // File upload successful
            $file_data = $this->upload->data();
            $file = $file_data['file_name'];
        
        

            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'price' => $this->input->post('price'),
                'image' => $file,
                'sale_price' => $this->input->post('sale_price')
            );

            // Form validation
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('price', 'Price', 'required|numeric');
            $this->form_validation->set_rules('image', 'Image');
            $this->form_validation->set_rules('sale_price', 'Sale_Price', 'required');

            // Form validation fails
            if ($this->form_validation->run() === FALSE) {
                $data['error'] = validation_errors(); // Pass validation errors to the view
                $data['title'] = 'add product';
                $data['page'] = 'product/add';
                $this->load->view('layouts/content', $data);
                $this->load->view('layouts/content', $data);
            } else {
                // Insert data into the database
                if ($this->db->insert('products', $data)) {
                    redirect('product/index');
                } else {
                    $this->add();
                }
            }
        }
    }

    // private function prepareViewData($data, $title, $page)
    // {
    //     $data['title'] = $title;
    //     $data['page'] = $page;
    //     return $data;
    // }

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
// fiedl id , name , des, cat_id 
// foreach($cate as cat){
// echo $cat->id  cat->name  // selected 
// 4 // 3    
// if = product->category_id == $cat->id { echo selected  else ""}
//}