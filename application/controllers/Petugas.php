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
  function lihat($nik){
    $data['subheading'] = 'Petugas';
    $data['subheadingurl'] = 'petugas';
    $data['subsubheading'] = $this->m_petugas->tampil_detail($nik)->row()->nama;
    $this->load->view('header', $data);
    $data['petugas'] = $this->m_petugas->tampil_detail($nik)->row_array();
    $this->load->view('petugas/detail-petugas', $data);
    $this->load->view('footer');
  }

  function tambah(){
    $data['subheading'] = 'Petugas';
    $data['subheadingurl'] = 'petugas';
    $data['subsubheading'] = 'Tambah Data';
    $this->load->view('header', $data);
    $this->load->view('petugas/tambah-petugas');
    $this->load->view('footer');
  }

  function tambah_proses(){
    $nik = $this->input->post('nik');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $no_telp = $this->input->post('no_telp');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $nama = $this->input->post('nama');
    $tanggal_lahir = $this->input->post('tanggal_lahir');
    $alamat = $this->input->post('alamat');
    $role = $this->input->post('role');

    $data = array(
      'nik' => $nik,
      'tempat_lahir' => $tempat_lahir,
      'no_telp' => $no_telp,
      'username' => $username,
      'password' => md5($password),
      'nama' => $nama,
      'tanggal_lahir' => $tanggal_lahir,
      'alamat' => $alamat,
      'role' => $role
    );

    $this->m_petugas->tambah($data);
    redirect(base_url('petugas'));
  }

  function ubah($nik){
    $data['subheading'] = 'Petugas';
    $data['subheadingurl'] = 'petugas';
    $data['subsubheading'] = 'Ubah Data';
    $this->load->view('header', $data);
    $data['petugas'] = $this->m_petugas->tampil_detail($nik)->row_array();
    $this->load->view('petugas/ubah-petugas', $data);
    $this->load->view('footer');
  }

  function ubah_proses($nik){
    $tempat_lahir = $this->input->post('tempat_lahir');
    $no_telp = $this->input->post('no_telp');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $nama = $this->input->post('nama');
    $tanggal_lahir = $this->input->post('tanggal_lahir');
    $alamat = $this->input->post('alamat');
    $role = $this->input->post('role');
    $status = $this->input->post('status');

    $data = array(
      'tempat_lahir' => $tempat_lahir,
      'no_telp' => $no_telp,
      'username' => $username,
      'nama' => $nama,
      'tanggal_lahir' => $tanggal_lahir,
      'alamat' => $alamat,
      'role' => $role,
      'status' => $status
    );
    if($password != ""){
      $data['password'] = md5($password);
    }

    $this->m_petugas->ubah($nik, $data);
    //echo $this->db->last_query();
    redirect(base_url('petugas'));
  }

  function hapus($nik){
    $this->m_petugas->hapus($nik);
    redirect(base_url('petugas'));
  }

}


?>
