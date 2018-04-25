<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{

		$this->load->view("templates/header");
		$this->load->view('contact_view');
		$this->load->view("templates/footer");
	}
}
