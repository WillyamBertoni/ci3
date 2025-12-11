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
        // Ambil Data
       $data['cara_keluar'] = $this->DatabaseTest_model->get_data();
       
       // Kirim ke view
       $this->load->view('DatabaseTest_view', $data); 
    } 
} 