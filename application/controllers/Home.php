<?php

class Home extends CI_Controller
{

    public function index()
    {
        $data['page'] = 'home/index';
        $this->load->view('layouts/content', $data);
    }

    public function aboutUs()
    {
        $data['name'] = "I m from AboutUs controller";
        $data['title'] = "I m title";
        $data['page'] = 'home/view';
        $this->load->view('layouts/content', $data);
    }

    public function contactUs()
    {
        $data['name'] = "I m from ContactUs controller";
        $data['title'] = "I m title";
        $this->load->view('home/view', $data);
    }

    public function faq()
    {
        $data['name'] = "I m from Faq controller";
        $data['title'] = "I m title";
        $this->load->view('home/view', $data);
    }
}
