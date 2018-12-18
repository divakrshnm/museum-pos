<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->nama == "" AND $this->session->role == ""){
            redirect(base_url("login"));
        }
    }

    function index(){
        $this->load->view('header');
        $this->load->view('dashboard');
        $this->load->view('footer');
    }

}

?>