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
        $this->load->model('exten_db');


        $this->menuList = array('menu_order' , 'menu_delivery', 'menu_inscan' , 'menu_account' , 'menu_boy_note' , 'menu_sms', 'menu_report' , 'menu_user' , 'menu_preference'  );

    }

    public function index()
    {
        $userList   = $this->exten_db->get_all_users(); // all user ,
        //print_r($orderList);
        $B = $this->load->view('exten', array('uList' => $userList), TRUE );

        $this->_O( $B );
    }


}
?>
