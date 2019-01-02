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

    function lihat($id){
        $data['subheading'] = 'Kritik Saran';
        $data['subheadingurl'] = 'kritik-saran';
        $data['subsubheading'] = $this->m_kritik_saran->tampil_detail($id)->row()->nama;
        $this->load->view('header', $data);
        $data['kritik_saran'] = $this->m_kritik_saran->tampil_detail($id)->row_array();
        $this->load->view('kritik-saran/detail-kritik-saran', $data);
        $this->load->view('footer');
    }

    function hapus($id){
        $this->m_kritik_saran->hapus($id);
       redirect(base_url('kritik-saran'));
}
    
}

?>