<?php

require_once('base_controller.php');


class user extends BASE_Controller
{
    var $menuList;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array( 'form_validation', 'email'));
        $this->load->library ( 'upload' );
        $this->load->database();
        $this->load->model('user_db');
        $this->load->model('menu_db');
    }

    public function index()
    {
        $userList   = $this->user_db->get_all_users(); // all user ,
        //print_r($orderList);
        $B = $this->load->view('user', array('uList' => $userList), TRUE );

        $this->_O( $B );
    }

    public function loglist()
    {
      if( !isset($_REQUEST['st_date']) )
            $_REQUEST['st_date'] = date("m/1/Y");

      if( !isset($_REQUEST['en_date']) )
           $_REQUEST['en_date'] = date("m/d/Y");

      $st_calc = date("Y-m-d", strtotime($_REQUEST['st_date']));
      $en_calc = date("Y-m-d", strtotime($_REQUEST['en_date']));
      $logList   = $this->user_db->get_all_log_date($st_calc  , $en_calc );

      $B = $this->load->view('userlog', array('logList' => $logList, 'st_date'=>$_REQUEST['st_date'] , 'en_date'=>$_REQUEST['en_date']), TRUE );
      $this->_O( $B );
    }

    public function user_log_print()
    {
      if( !isset($_REQUEST['st_date']) )
            $_REQUEST['st_date'] = date("m/1/Y");

      if( !isset($_REQUEST['en_date']) )
           $_REQUEST['en_date'] = date("m/d/Y");

      $st_calc = date("Y-m-d", strtotime($_REQUEST['st_date']));
      $en_calc = date("Y-m-d", strtotime($_REQUEST['en_date']));
      $logList   = $this->user_db->get_all_logprint_date($st_calc  , $en_calc );
      $this->load->view('userlog_print', array('omList' => $logList, 'st_date'=>$_REQUEST['st_date'] , 'en_date'=>$_REQUEST['en_date']));

    }
}
?>
