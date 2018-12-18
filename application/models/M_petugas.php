<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_petugas extends CI_Model{

    function tampil(){
        return $this->db->get('petugas');
    }

}

?>