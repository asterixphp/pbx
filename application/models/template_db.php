<?php

class template_db extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    /////////////// sms  field ////////////////////

    function get_sms_template( $uid = 0 )
    {
        if( $uid )
            $this->db->where( 'uid' , $uid );
        return $this->db->get('template')->result_array();
    }

    function get_template_list( $branch = '' )
    {
        return $this->db->get('template')->result_array();
    }

    function add_template( $arr )
    {
        $this->db->insert( 'template' , $arr );
        return $this->db->insert_id();
    }
    function remove_template( $uid )
    {
        $this->db->where( 'uid' ,  $uid );
        $this->db->delete(  'template' );
    }
    function update_template( $uid ,$arr )
    {
        $this->db->where( 'uid' ,  $uid );
        $this->db->update( 'template' ,$arr );
    }
}
