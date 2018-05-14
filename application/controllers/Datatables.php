<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatables extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('blog_model');
	}

	public function index()
	{
		// Dapatkan data artikel dari model
		$artikel['data'] = $this->blog_model->get_all_artikel();

		$this->load->view("templates/header");
		$this->load->view('datatables/dt_view', $artikel);
		$this->load->view("templates/footer");
	}

	public function get_json()
	{
		$artikel['data'] = $this->blog_model->get_all_artikel();
		
		// Tampilkan dalam bentuk format
		echo json_encode($artikel);
	}

	public function view_json()
	{
		$this->load->view("templates/header");
		$this->load->view('datatables/dt_json');
		$this->load->view("templates/footer");
	}

}
