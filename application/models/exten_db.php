<?php

class Exten_db extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_all_users() // not including resigned and suspended user
    {
        $query = $this->db->get('extensions');
        $admin_db= $this->load->database('admin', TRUE);
        return $query->result_array();
    }

}
