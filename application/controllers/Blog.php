<?php 
	Class Blog extends CI_controller{

		public function __construct()
		{
			
			parent::__construct();
			
			$this->load->model('blog_model');
			$this->load->helper('url_helper');
		}
		public function index(){
			$this->load->view('header');
			$this->load->view('home');
			$this->load->view('footer');
		}
		public function about(){
			$this->load->view('header');
			$this->load->view('about');
			$this->load->view('footer');
		}
		public function blog()
		{
			
			$data['blog'] = $this->blog_model->get_blog()->result();
			$this->load->view('header');
			$this->load->view('blogg', $data);
			$this->load->view('footer');
		}
		public function view(){
		

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
			
			$this->load->view('view', $data);
		
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
				$this->load->view('create');
				$this->load->view('footer');
			} else {
			
				$this->model_blog->set_blog();
				
				redirect('blog');
			}
	}

	}
?>