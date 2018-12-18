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

    function cek_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
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
                echo "Anda tidak aktif";
            }
        }
        else{
            echo "Username dan password salah";
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }

}

?>