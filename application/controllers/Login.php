<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }

    function index(){
        $this->load->view('login');
    }

    function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if(empty($username) || empty($password) || (empty($username) && empty($password))){
            $data = array(
                'error' => 'Username dan Password tidak boleh kosong!',
                'message' => 'Silahkan isi kolom username dan password.'
            );
            $this->load->view('login', $data);
        }
        else{
            $where = array(
                'username' => $username,
                'password' => md5($password)
            );
    
            $result = $this->m_login->cek_login("petugas", $where);
    
            if($result->num_rows() > 0){
                
                $result = $result->row_array();
    
                if($result['status'] == "aktif"){
    
                    $data = array(
                        'nama' => $result['nama'],
                        'role' => $result['role']
                    );
    
                    $this->session->set_userdata($data);
    
                    redirect(base_url("dashboard"));
                }
                else{
                    $data = array(
                        'error' => 'Status anda tidak aktif!',
                        'message' => 'Silahkan konfirmasi ulang ke manager.'
                    );
                    $this->load->view('login');
                }
            }
            else{
                $data = array(
                    'error' => 'Username atau Password salah!',
                    'message' => 'Silahkan masukan username atau password yang benar.'
                );
                $this->load->view('login', $data);
            }
        }        
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }

}

?>