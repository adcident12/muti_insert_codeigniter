<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users_model extends CI_Model {
    public function get_users() {
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function insert($array) {
        $this->db->insert('users', $array);
        return $this->db->insert_id();
    }
    public function update($id, $array) {
        $this->db->where('id', $id);
        return $this->db->update('users', $array);
    }
}
