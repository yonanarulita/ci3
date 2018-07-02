<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    public function register($enc_password){
        // Array data user 
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
            'kodepos' => $this->input->post('kodepos'),
            'fk_level_id' => $this->input->post('membership')
        );

        // Insert user
        return $this->db->insert('users', $data);
    }

    // Proses login user
    public function login($username, $password){
        // Validasi
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return $result->row(0)->user_id;
        } else {
            return false;
        }
    }

    // Mendapatkan level user
    function get_user_level($user_id)
    {
        // Dapatkan data user berdasar $user_id
        $this->db->select('fk_level_id');
        $this->db->where('user_id', $user_id);

        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return $result->row(0);
        } else {
            return false;
        }
    }

    function get_user_details($user_id)
    {
        $this->db->join('levels', 'levels.level_id = users.fk_level_id', 'left');
        $this->db->where('user_id', $user_id);

        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return $result->row(0);
        } else {
            return false;
        }
    }

}
