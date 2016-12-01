<?php

class Menu_db extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_menu_list( $user )
    {
        $this->db->where('user' , $user);
        return $this->db->get('menu')->result_array();
    } 

    function add_menu( $bname  , $user )
    {
        $this->db->insert( 'menu'  , array( 'name' => $bname , 'user' => $user ) );
    }
    function remove_menu( $uid )
    {
        $this->db->where( 'user' ,  $uid );
        $this->db->delete(  'menu' );
    }
}