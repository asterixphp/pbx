<?php

class User_db extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_all_users() // not including resigned and suspended user
    {
        $query = $this->db->get('sip_buddies');
        return $query->result_array();
    }


    function get_user_by_user_name($user_name)
    {
        $this->db->where('username', $user_name);
        $admin_db= $this->load->database('admin', TRUE);
        return $admin_db->get('userman_users')->result_array();
    }

}
