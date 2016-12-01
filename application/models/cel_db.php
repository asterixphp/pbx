<?php

class Cel_db extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_list() // not including resigned and suspended user
    {
        $admin_db= $this->load->database('asteriskcdrdb', TRUE);
        $query = $this->db->get('cel');
        return $query->result_array();
    }

}
