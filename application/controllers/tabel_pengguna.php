<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tabel_pengguna extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('tabel_pengguna_a', 'a');
        $this->load->helper('url');
    }
    function index(){
        $data['data'] = $this->a->gettabel_pengguna();
        $this->load->view('layout/header');
        $this->load->view('tabel_pengguna', $data);
        $this->load->view('layout/footer');
        
    }
    public function add(){
        $this->load->view('layout/header');
        $this->load->view('tabel_pengguna/add');
        $this->load->view('layout/footer');
    }
    public function submit(){
        $result = $this->a->submit();
        if($result){
            $this->session->set_flashdata('success_msg', 'record added successfully');
        }else{
            $this->session->set_flashdata('error_msg', 'fail to add record');
        }
        redirect(base_url('tabel_pengguna'));
    }
}
?>


