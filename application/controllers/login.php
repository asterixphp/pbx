<?php

require_once('base_controller.php');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_db');
        if (session_id () == '') {
			session_start ();
		}

    }

    public function index()
    {
    	if(isset($_SESSION['user_id']))
            $this->dirctdisplay($_SESSION['user_id']);
    	else
            $this->load->view( 'login' );
    }

    public function set_session($userdata)
    {
        $_SESSION['user_id'] = $userdata[0]['uid'];
        $_SESSION['user_name']=$userdata[0]['username'];
    }

    public function dirctdisplay($sess_name)
    {
	      redirect('/index.php/user');
	      break;
    }
    public function UserLogIn(){
    	$username = $_REQUEST['username'];
    	$password = $_REQUEST['password'];
    	$userdata = $this->user_db->get_user_by_user_name($username);

    	if(count($userdata) > 0){
    	      if($userdata[0]['password'] == $password) {
                $this->set_session($userdata);
                $this->dirctdisplay($_SESSION['user_id']);

    	      }
    	      else
    	      	redirect('/');
    	}
    		else
    			redirect('/');
    }

    public function logout(){
		session_unset();
		session_destroy();
		redirect('/');
		die();
	}
}
?>
