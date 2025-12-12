<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        // Memuat database
        $this->load->database();
    }

    public function get_data()
    {
        // Query untuk mengambil data
        $query = $this->db->query("SELECT * FROM cara_keluar");
        return $query->result();
    }
}