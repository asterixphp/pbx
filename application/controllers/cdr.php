<?php

require_once('base_controller.php');


class exten extends BASE_Controller
{
    var $menuList;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array( 'form_validation', 'email'));
        $this->load->library ( 'upload' );
        $this->load->database();
        $this->load->model('cdr_db');

    }

    public function index()
    {
        $uList   = $this->cdr_db->get_list(); // all user ,
        //print_r($orderList);
        $B = $this->load->view('cdr', array('uList' => $uList), TRUE );
        $this->_O( $B );
    }
}
?>
