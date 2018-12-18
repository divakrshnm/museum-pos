<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Museum_pos_android extends REST_Controller{

    function __construct($config = 'rest'){
        parent::__construct($config);
        $this->load->database();
    }

    function index_get(){
        $id = $this->get('no_inventaris');
        $nama = $this->get('nama_koleksi');
        if($id != ''){
            $this->db->where('no_inventaris', $id);
            $koleksi = $this->db->get('koleksi')->result();
            
        }
        elseif($nama != ''){
            $this->db->like('nama_koleksi', $nama);
            $koleksi = $this->db->get('koleksi')->result();
        }
        else{
            $koleksi = $this->db->get('koleksi')->result();
        }
        $this->response(array('result' => $koleksi, 200));
    }

    function index_post() {
        $data = array(
                'nama'         => $this->post('nama'),
                'email'        => $this->post('email'),
                'no_hp'        => $this->post('no_hp'),
                'kritik_saran' => $this->post('kritik_saran'));
        $insert = $this->db->insert('kritik_saran', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}

?>