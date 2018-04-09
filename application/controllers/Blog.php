<?php 
	Class Blog extends CI_controller{

		public function __construct()
		{
			
			parent::__construct();
			
			$this->load->model('blog_model');
			$this->load->helper('url_helper');
		}
		public function index(){
			$this->load->tampil('header');
			$this->load->tampil('home');
			$this->load->tampil('footer');
		}
		public function about(){
			$this->load->tampil('header');
			$this->load->tampil('about');
			$this->load->tampil('footer');
		}
		public function blog()
		{
			
			$data['blog'] = $this->blog_model->get_blog()->result();
			$this->load->tampil('header');
			$this->load->tampil('blogg', $data);
			$this->load->tampil('footer');
		}
		public function tampil(){
		

			$id = $this->uri->segment(3); 
			$data['blog'] = $this->blog_model->get_blog_by_id($id);
			if(empty($data['blog'])){
				show_404();
			}
			
			$data['judul'] = $data['blog']['judul'];
			$data['tanggal'] = $data['blog']['tanggal'];
			$data['author'] = $data['blog']['author'];
			$data['konten'] = $data['blog']['konten'];
			$data['image'] = $data['blog']['image'];
			
			$this->load->tampil('tampil', $data);
		
		}

		public function create(){
			
			$this->load->helper('form');
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('judul', 'judul', 'required');
			$this->form_validation->set_rules('tanggal', 'tanggal', 'required');
			$this->form_validation->set_rules('author', 'author', 'required');
			$this->form_validation->set_rules('konten', 'konten', 'required');
			$this->form_validation->set_rules('image', 'image', 'required');
			
			if ($this->form_validation->run() == FALSE) {
				$this->load->tampil('create');
				$this->load->tampil('footer');
			} else {
			
				$this->model_blog->set_blog();
				
				redirect('blog');
			}
	}

	}
?>