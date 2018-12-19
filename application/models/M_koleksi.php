<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class M_koleksi extends CI_Model{

    function tampil(){
        return $this->db->get('koleksi');
    }

    function tampil_detail($no_inventaris){
        $this->db->where('no_inventaris', $no_inventaris);
        $detail = $this->db->get('koleksi');
        return $detail;
    }

    function tambah($data, $table){
        $this->db->insert($table, $data);
    }
    
    function cek_no(){
        $this->db->select_max('no_inventaris');
        return $this->db->get('koleksi');
    }
    

}

?>