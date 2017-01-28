<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
if ( ! function_exists('css_url'))
{
	function css_url()
	{
		 $CI =& get_instance();
		 return $CI->config->item('css_url');
	}
}


if ( ! function_exists('js_url'))
{
	function js_url()
	{
		$CI =& get_instance();
		return $CI->config->item('js_url');
	}
} 

if ( ! function_exists('add_js'))
{
    function add_js($files)
    {
		if(!empty($files)){
			
			foreach($files as $e) {
				
				echo '<script src="' . js_url() . $e . '" ></script>'."\n";
 
			}
		}
    }
}

if ( ! function_exists('add_css'))
{
    function add_css($files)
    {
		if(!empty($files)){
			
			foreach($files as $e) {
				
				echo '<link rel="stylesheet" href="' . css_url() . $e . '" >'."\n";
 
				
			}
		}
    }
}
