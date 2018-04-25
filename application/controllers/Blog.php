<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		// Load dulu model Blog
		$this->load->model('blog_model');

		// Dapatkan data dari model Blog
		$data['all_artikel'] = $this->blog_model->get_all_artikel();

		$this->load->view("templates/header");

		// Passing data ke view
		$this->load->view('blog_view', $data);
		$this->load->view("templates/footer");
	}

	// Membuat method dengan parameter
	// http://localhost/ci3-course/controller/fungsi/parameter1/parameter2
	public function lihat_detail($kategori, $id)
	{
		// Jika kita akses:
		// http://localhost/ci3-course/blog/lihat_detail/berita/2
		// Maka "lihat_detail" adalah fungsi ini, "berita" adalah "kategori" dan 2 dianggap id berita
		echo $kategori;
		echo '<br>';
		echo $id;
	}

	// Membuat fungsi read
	public function read($slug='')
	{
		// Load dulu model Blog
		$this->load->model('blog_model');

		// Mendapatkan data dari model
		$data['artikel'] = $this->blog_model->get_artikel_by_slug($slug);

		// Jika slug kosong atau tidak ada di db, lempar user ke halaman 404
		if ( empty($slug) || !isset($data['artikel']) ) show_404();

		$this->load->view("templates/header");

		// Passing data ke view
		$this->load->view('blog_read', $data);

		$this->load->view("templates/footer");
	}

	// Membuat fungsi create
	public function create()
	{

		$data['mode'] = 'Create';

		$this->load->model('blog_model');

		// Kita butuh helper dan library berikut
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    // Kita validasi input sederhana, sila cek http://localhost/ci3/user_guide/libraries/form_validation.html
	    $this->form_validation->set_rules('title', 'Judul', 'required');
	    $this->form_validation->set_rules('text', 'Konten', 'required');

	    // Cek apakah input valid atau tidak
	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('templates/header');
	        $this->load->view('blog_create');
	        $this->load->view('templates/footer');

	    } else {

    		// Apakah user upload gambar?
    		if ( isset($_FILES['thumbnail']) && $_FILES['thumbnail']['size'] > 0 )
    		{
    			// Konfigurasi folder upload & file yang diijinkan
    			// Jangan lupa buat folder uploads di dalam ci3-course
    			$config['upload_path']          = './uploads/';
    	        $config['allowed_types']        = 'gif|jpg|png';
    	        $config['max_size']             = 100;
    	        $config['max_width']            = 1024;
    	        $config['max_height']           = 768;

    	        // Load library upload
    	        $this->load->library('upload', $config);

    	        // Apakah file berhasil diupload?
    	        if ( ! $this->upload->do_upload('thumbnail'))
    	        {
    	        	$data['upload_error'] = $this->upload->display_errors();

    	        	$post_image = '';

    	        	// Kita passing pesan error upload ke view supaya user mencoba upload ulang
    	            $this->load->view('templates/header');
    	            $this->load->view('blog_create', $data);
    	            $this->load->view('templates/footer'); 

    	        } else {

    	        	// Simpan nama file-nya jika berhasil diupload
    	            $img_data = $this->upload->data();
    	            $post_image = $img_data['file_name'];
    	        	
    	        }
    		} else {

    			// User tidak upload gambar, jadi kita kosongkan field ini
    			$post_image = '';
    		}

    		// Helper URL dibutuhkan untuk formatting slug di bawah ini
	    	$this->load->helper('url');

	    	// Memformat slug sebagai alamat URL, 
	    	// Misal judul: "Hello World", kita format menjadi "hello-world"
	    	// Nantinya, URL blog kita menjadi mudah dibaca 
	    	// http://localhost/ci3-course/blog/hello-world
	    	$slug = url_title($this->input->post('title'), 'dash', TRUE);

	    	$post_data = array(
	    	    'post_title' => $this->input->post('title'),
	    	   	'post_date' => date("Y-m-d H:i:s"),
	    	    'post_slug' => $slug,
	    	    'post_content' => $this->input->post('text'),
	    	    'post_thumbnail' => $post_image,
	    	   	'date_created' => date("Y-m-d H:i:s"),
	    	);

	    	// Jika tidak ada error upload gambar, maka kita insert ke database via model Blog 
	    	if( empty($data['upload_error']) ) {
		        $this->blog_model->create_artikel($post_data);

		        $this->load->view('templates/header');
		        $this->load->view('blog_success', $data);
		        $this->load->view('templates/footer'); 
	    	}
	    }
	}


	// Membuat fungsi edit
	public function edit($id)
	{

		$data['mode'] = 'Edit';

		$this->load->model('blog_model');

		// Get artikel dari model berdasarkan $id
		$data['artikel'] = $this->blog_model->get_artikel_by_id($id);

		// Jika id kosong atau tidak ada id yg dimaksud, lempar user ke halaman blog
		if ( empty($id) || !$data['artikel'] ) show_404();

		// Kita simpan dulu nama file yang lama
		$old_image = $data['artikel']->post_thumbnail;

		// Kita butuh helper dan library berikut
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    // Kita validasi input sederhana, sila cek http://localhost/ci3/user_guide/libraries/form_validation.html
	    $this->form_validation->set_rules('title', 'Judul', 'required');
	    $this->form_validation->set_rules('text', 'Konten', 'required');

	    // Cek apakah input valid atau tidak
	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('templates/header');
	        $this->load->view('blog_edit', $data);
	        $this->load->view('templates/footer');

	    } else {

    		// Apakah user upload gambar?
    		if ( isset($_FILES['thumbnail']) && $_FILES['thumbnail']['size'] > 0 )
    		{
    			// Konfigurasi folder upload & file yang diijinkan
    			// Jangan lupa buat folder uploads di dalam ci3-course
    			$config['upload_path']          = './uploads/';
    	        $config['allowed_types']        = 'gif|jpg|png';
    	        $config['max_size']             = 100;
    	        $config['max_width']            = 1024;
    	        $config['max_height']           = 768;

    	        // Load library upload
    	        $this->load->library('upload', $config);

    	        // Apakah file berhasil diupload?
    	        if ( ! $this->upload->do_upload('thumbnail'))
    	        {
    	        	$data['upload_error'] = $this->upload->display_errors();

    	        	$post_image = '';

    	        	// Kita passing pesan error upload ke view supaya user mencoba upload ulang
    	            $this->load->view('templates/header');
    	            $this->load->view('blog_edit', $data);
    	            $this->load->view('templates/footer'); 

    	        } else {

    	        	// Hapus file image yang lama jika ada
    	        	if( !empty($old_image) ) {
    	        		if ( file_exists( './uploads/'.$old_image ) ){
    	        		    unlink( './uploads/'.$old_image );
    	        		} else {
    	        		    echo 'File tidak ditemukan.';
    	        		}
    	        	}

    	        	// Simpan nama file-nya jika berhasil diupload
    	            $img_data = $this->upload->data();
    	            $post_image = $img_data['file_name'];
    	        	
    	        }
    		} else {

    			// User tidak upload gambar, jadi kita kosongkan field ini, atau jika sudah ada, gunakan image sebelumnya
    			$post_image = ( !empty($old_image) ) ? $old_image : '';

    		}

	    	$post_data = array(
	    	    'post_title' => $this->input->post('title'),
	    	    'post_content' => $this->input->post('text'),
	    	    'post_thumbnail' => $post_image,
	    	);

	    	// Jika tidak ada error upload gambar, maka kita update datanya 
	    	if( empty($data['upload_error']) ) {

	    		// Update artikel sesuai post_data dan id-nya
		        $this->blog_model->update_artikel($post_data, $id);

		        $this->load->view('templates/header');
		        $this->load->view('blog_success', $data);
		        $this->load->view('templates/footer'); 
	    	}
	    }
	}


	// Membuat fungsi delete
	public function delete($id)
	{

		$data['mode'] = 'Hapus';

		$this->load->model('blog_model');

		// Get artikel dari model berdasarkan $id
		$data['artikel'] = $this->blog_model->get_artikel_by_id($id);

		// Jika id kosong atau tidak ada id yg dimaksud, lempar user ke halaman blog
		if ( empty($id) || !$data['artikel'] ) show_404();

		// Kita simpan dulu nama file yang lama
		$old_image = $data['artikel']->post_thumbnail;

    	// Hapus file image yang lama jika ada
    	if( !empty($old_image) ) {
    		if ( file_exists( './uploads/'.$old_image ) ){
    		    unlink( './uploads/'.$old_image );
    		} else {
    		    echo 'File tidak ditemukan.';
    		}
    	}

		// Hapus artikel sesuai id-nya
        if( ! $this->blog_model->delete_artikel($id) )
        {
        	// Jika gagal, tampilkan failnya
	        $this->load->view('templates/header');
	        $this->load->view('blog_failed', $data);
	        $this->load->view('templates/footer'); 
	    } else {
	    	// Ok, sudah terhapus
	    	$this->load->view('templates/header');
	        $this->load->view('blog_success', $data);
	        $this->load->view('templates/footer'); 
	    }
	}
}
