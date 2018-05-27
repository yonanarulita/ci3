<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact1 extends CI_Controller {

	public function index()
	{

		$this->load->view("templates/header1");
		$this->load->view('pages/contact1_view');
		$this->load->view("templates/footer1");
	}
}
