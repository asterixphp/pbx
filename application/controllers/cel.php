<?php

require_once('base_controller.php');

class exten extends BASE_Controller
{
    var $menuList;
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('cel_db');

    }
    public function index()
    {
        $uList   = $this->cel_db->get_list(); // all user ,
        $B = $this->load->view('cel', array('uList' => $uList), TRUE );
        $this->_O( $B );
    }
}
?>
