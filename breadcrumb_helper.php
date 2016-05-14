<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function set_breadcrumb()
    {
		$CI =& get_instance();
		$session_data = $CI->session->userdata('logged_in');
        if(isset($_SERVER['HTTP_REFERER']))
        {
			$CI->session->set_userdata('last_breadcrumb', $_SERVER['HTTP_REFERER']);
        }
        else
        {
			$CI->session->set_userdata('last_breadcrumb', $_SERVER['SERVER_NAME']);
        }
		
		Return;
    }
	
	function last_breadcrumb()
	{
		$CI =& get_instance();
		$lastBreadcrumb = $CI->session->userdata('last_breadcrumb');
		
		Return $lastBreadcrumb;
	}

?>