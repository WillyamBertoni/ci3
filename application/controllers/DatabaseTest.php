<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatabaseTest extends CI_Controller {

      //public $view_data; // Declare the property
      function __construct()
    {
        parent::__construct();
        //load model login_model
        $this->load->model('view_data/DatabaseTest_model'); //load model data
    }

    public function index()
    {
        // Memuat model
        //$this->load->model('DatabaseTest_model');
        
        // Mengambil data dari database
        $data = $this->DatabaseTest_model->get_data();
        
        // Menampilkan data di view

        //$data['view_data'] = $this->view_data->get_data();
        $data['title_page'] = "Tampil Data";

        $this->load->view('DatabaseTest_view');
    } 
} 