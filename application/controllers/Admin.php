<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller{
public function __construct()
{
parent::__construct();
$this->load->model('view_data/m_admin');
}
public function index()
{
$data['title'] = 'Smk Merdeka - ADMIN';
$this->load->view('templates/header', $data);
$this->load->view('templates/sidebar');
$this->load->view('templates/navbar');
$this->load->view('admin/index');
$this->load->view('templates/footer');
}
public function profile_sekolah()
{
$data['title'] = 'Smk Merdeka';
$this->load->view('templates/header', $data);
$this->load->view('templates/sidebar');
$this->load->view('templates/navbar');
$this->load->view('admin/profile_sekolah');
$this->load->view('templates/footer');
}
public function visi_misi()
{
$data['title'] = 'Smk Merdeka';
$this->load->view('templates/header', $data);
$this->load->view('templates/sidebar');
$this->load->view('templates/navbar');
$this->load->view('admin/visi_misi');
$this->load->view('templates/footer');
}
//Data Absen
public function data_absen()
{
$data['title'] = 'Data Absensi Siswa';
$this->load->view('templates/header', $data);
$this->load->view('templates/sidebar');
$this->load->view('templates/navbar');
$this->load->view('data_absen/absen_siswa');
$this->load->view('templates/footer');
}
public function registration()
{
$data['title'] = 'Smk Merdeka';
$this->load->view('templates/header', $data);
$this->load->view('templates/sidebar');
$this->load->view('templates/navbar');
$this->load->view('admin/registration');
$this->load->view('templates/footer');
}
}