<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//view file name welcome_message.php
		$this->load->view('welcome_message');
	}
	public function hello()
	{
		$data['name'] = "I m from controller";
		$this->load->view('hello', $data);
	}

	public function add()
	{
		$data['array'] = array(1, 2, 3, 4, 5);
		$data['title'] = 'Addition';
		$data['add'] = 1 + 2;
		$this->load->view('add', $data);
	}

	public function insideAview()
	{
		$this->load->view('welcome/index');
	}
}
