<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_kritik_saran extends CI_Model{

    function tampil(){
        return $this->db->get('kritik_saran');
    }

    function tampil_detail($id){
        $this->db->where('id', $id);
        $detail = $this->db->get('kritik_saran');
        return $detail;
    }

    function hapus($id){
        $this->db->where('id', $id);
        $this->db->delete('kritik_saran');
    }  
}

?>