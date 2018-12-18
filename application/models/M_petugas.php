<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_petugas extends CI_Model{

    function tampil(){
        return $this->db->get('petugas');
    }

    function tampil_detail($nik){
        $this->db->where('nik', $nik);
        $detail = $this->db->get('petugas');
        return $detail;
    }

}

?>