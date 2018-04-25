<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

    function __construct()
    {
     parent::__construct();
    }

    // SQL dari tabel Blogs
    // Jalankan SQL berikut di database codeigniter
    # ------------------------------------------------------------

     // CREATE TABLE `blogs` (
       //`id` int(11) NOT NULL AUTO_INCREMENT,
        //`post_date` datetime DEFAULT '0000-00-00 00:00:00',
        //`post_title` varchar(128) NOT NULL,
        //`post_slug` varchar(128) NOT NULL,
        //`post_content` text NOT NULL,
       // `post_thumbnail` varchar(128) NOT NULL,
        //`post_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive',
        //`date_created` datetime NOT NULL,
        //PRIMARY KEY (`id`),
        //UNIQUE KEY `post_slug` (`post_slug`)
      //) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='utf8_general_ci';

     public function get_all_artikel() {
      //Query Manual
      $query = $this->db->query('
               SELECT * FROM blogs
          ');

     // Memakai Query Builder
     $query = $this->db->get('blogs');

     // Return dalam bentuk object
     return $query->result();
    }

    public function get_artikel_by_id($id)
    {
     $query = $this->db->get_where('blogs', array('id' => $id));
                 
          return $query->row();
    }

    public function get_artikel_by_slug($slug)
    {
        $query = $this->db->get_where('blogs', array('post_slug' => $slug));

        // Karena datanya cuma 1, kita return cukup via row() saja
        return $query->row();
    }

    public function create_artikel($data)
    {
        return $this->db->insert('blogs', $data);
    }

    public function update_artikel($data, $id) 
    {
        if ( !empty($data) && !empty($id) ){
            $update = $this->db->update( 'blogs', $data, array('id'=>$id) );
            return $update ? true : false;
        } else {
            return false;
        }
    }

    public function delete_artikel($id)
    {
     if ( !empty($id) ){
          $delete = $this->db->delete('blogs', array('id'=>$id) );
             return $delete ? true : false;
     } else {
          return false;
     }
    }
}