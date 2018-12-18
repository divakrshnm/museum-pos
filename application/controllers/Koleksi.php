<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH."libraries/phpqrcode/qrlib.php";

class Koleksi extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->nama == "" AND $this->session->role == ""){
            redirect(base_url("login"));
        }
        $this->load->model('m_koleksi');
    }

    function index(){
        $data['subheading'] = 'Koleksi';
        $this->load->view('header', $data);
        $data['koleksi'] = $this->m_koleksi->tampil()->result_array();
        $this->load->view('koleksi/koleksi', $data);
        $this->load->view('footer');
    }

    function lihat($no_inventaris){
        $data['subheading'] = 'Koleksi';
        $data['subheadingurl'] = 'koleksi';
        $data['subsubheading'] = $this->m_koleksi->tampil_detail($no_inventaris)->row()->nama_koleksi;
        $this->load->view('header', $data);
        $data['koleksi'] = $this->m_koleksi->tampil_detail($no_inventaris)->row_array();
        $this->load->view('koleksi/detail-koleksi', $data);
        $this->load->view('footer');
    }

    function tambah(){
        $this->load->view('koleksi/tambah-koleksi');
    }

    function tambah_proses(){

        $no_inventaris = $this->input->post('no_inventaris');

        $config['upload_path'] = "./uploads/images/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = $no_inventaris;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')){
            
        }else{
            $folder= "./uploads/qrcodes/".$no_inventaris.".png";
            QRcode::png($no_inventaris, $folder, 'H', 20, 1);

            $data = array(
                'no_inventaris' => $no_inventaris,
                'qr_code' => $folder,
                'foto' => $this->upload->data('full_path')
            );
            
            $this->m_koleksi->tambah($data,'koleksis');
        }

        
        
    }

}

?>