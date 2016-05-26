<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function set_breadcrumb()
    {
		$CI =& get_instance();
		$manual_referer = $CI->session->userdata('manual_referer');
		
        if((isset($_SERVER['HTTP_REFERER'])) AND ($manual_referer == ''))
        {
			$CI->session->set_userdata('last_breadcrumb', $_SERVER['HTTP_REFERER']);
        } else if ($manual_referer != '') {
			$CI->session->set_userdata('last_breadcrumb', $manual_referer);
			$CI->session->unset_userdata('manual_referer');
		} else {
			$CI->session->set_userdata('last_breadcrumb', $_SERVER['SERVER_NAME']);
        }
	
		Return;
    }
	
	function manual_referer($referer) 
	{
		$CI =& get_instance();
		$CI->session->set_userdata('manual_referer', $referer);
	
		Return;
	}
	
	function last_breadcrumb()
	{
		$CI =& get_instance();
		$lastBreadcrumb = $CI->session->userdata('last_breadcrumb');
		
		Return $lastBreadcrumb;
	}

?>
