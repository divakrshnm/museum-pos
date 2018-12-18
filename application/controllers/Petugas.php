<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller{


    function __construct(){
        parent::__construct();
        if($this->session->nama == "" AND $this->session->role == ""){
            redirect(base_url("login"));
        }
        else if($this->session->role == "admin"){
            redirect(base_url("dashboard"));
        }
        $this->load->model('m_petugas');
    }

    function index(){
        $data['subheading'] = 'Petugas';
        $this->load->view('header', $data);  
        $data['petugas'] = $this->m_petugas->tampil()->result_array();     
        $this->load->view('petugas/petugas', $data);
        $this->load->view('footer');
    }

}


?>