<?php

defined('BASEPATH') OR  exit('No direct script access allowed');

class Kritik_saran extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->nama == "" AND $this->session->role == ""){
            redirect(base_url("login"));
        }
        $this->load->model('m_kritik_saran');
    }

    function index(){
        $data['subheading'] = 'Kritik Saran';
        $this->load->view('header', $data);
        $data['kritik_saran'] = $this->m_kritik_saran->tampil()->result_array();
        $this->load->view('kritik-saran/kritik-saran', $data);
        $this->load->view('footer');
    }
    
}

?>