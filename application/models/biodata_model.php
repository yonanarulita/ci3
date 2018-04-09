<?php

class Biodata_Model extends CI_Model {

	public functions get_biodata() {

			//$this->load->database();

		$this->db->get('biodata');

		$data = $this->query()->result();


		return $data;
	}
}
