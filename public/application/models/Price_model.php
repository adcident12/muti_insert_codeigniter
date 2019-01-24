<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Price_model extends CI_Model {
    public function insert($array) {
        $this->db->insert('price', $array);
        return $this->db->insert_id();
    }
}
