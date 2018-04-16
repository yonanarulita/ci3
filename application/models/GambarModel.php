<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GambarModel extends CI_Model {
	// Fungsi untuk menampilkan semua data gambar
	public function view(){
		return $this->db->get('gambar')->result();
	}
	
	// Fungsi untuk melakukan proses upload file
	public function upload(){
		$config['upload_path'] = './assets/images/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '4048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}
	
	// Fungsi untuk menyimpan data ke database
	public function save($upload){
		$data = array(
			'judul'=>$this->input->post('input_judul'),
			'tgl'=>$this->input->post('input_tgl'),
			'author'=>$this->input->post('input_author'),
			'konten'=>$this->input->post('input_konten'),
			'img' => $upload['file']['file_img']
		);
		
		$this->db->insert('gambar', $data);
	}
}
