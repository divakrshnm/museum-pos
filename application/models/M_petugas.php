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

  function tambah($data){
    $this->db->insert('petugas', $data);
  }

  function ubah($nik, $data){
    $this->db->where('nik', $nik);
    $this->db->update('petugas', $data);
  }

  function hapus($nik){
    $this->db->where('nik', $nik);
    $this->db->delete('petugas');
  }

}

?>
