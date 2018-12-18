<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_kritik_saran extends CI_Model{

    function tampil(){
        return $this->db->get('kritik_saran');
    }
}

?>