<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class Base_controller extends CI_Controller {

    public $title = '';
    // The template will use this to include default.css by default
    public $styles = array('default');

    public function __construct() {
        parent::__construct ();
         
        if (session_id () == '') {
            session_start ();
        }

        
    }

    function _O($content , $param='' , $page_header = '' , $page_footer = '' )
    {
        // Load the base template with output content available as $content
        $data['content'] = &$content;
        $data['page_header'] = &$page_header;
        $data['page_sub_header'] = '';
        $data['page_footer'] = &$page_footer;
        $data['P'] = $param;
        echo $this->load->view('base_template', $data);
    }
}
 
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */