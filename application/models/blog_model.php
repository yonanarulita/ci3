<?php
Class blog_model extends CI_Model{
	/*
	function list_blog(){
		$blog = array("Model blog ajkshfdjkahsfkhaafhajkshfjhasfkjhajsh safjhasf hasfjhafj hfjahfjh ajkhsfj hfsjakh asjfh kjahs fh askjf hakshfkjashf jh fhaskjfhaskj fash fashfjkh afhjkshf");
		return $blog;
	}
	*/


	public function __construct()
    {
     	$this->load->database();
    } 
	
	public function get_blog(){
     	$query = $this->db->get('blog');
     	return $query;
     }

	public function get_blog_by_id($id){
     	$query = $this->db->get_where('blog', array('id' => $id));
     	return $query->row_array();
     }

     public function set_blog($id = 0){
     	$this->load->helper('url');
     	$object = array(
     		'judul' => $this->input->post('judul'),
     		'tanggal' => $this->input->post('tanggal'),
     		'author' => $this->input->post('author'),
     		'konten' => $this->input->post('konten'),
     		'image' => $this->input->post('image')
     		);
     	
     	$this->db->insert('blog', $object);
     }
}

?>

