<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{

		$this->load->view("templates/header");
		$this->load->view('pages/about_view');
		$this->load->view("templates/footer");
	}
}
