<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! defined('ENV'))
{
	// loop through each host
	foreach( $hosts as $env => $sites ) 
	{
		foreach( $sites as $sitename => $hostname )
		{	
			if( $_SERVER['HTTP_HOST'] == $hostname )
			{
				// if the current host matches a hostname, load the environment file
				require $sitename . '/env/env.' . $env . '.php';

				define('ENV', ${$sitename.'_settings'}['env']);
			  define('ENV_FULL', ${$sitename.'_settings'}['env_full']);
			  define('MSM_SITENAME', ${$sitename.'_settings'}['sitename']);
			  define('MSM_CURRENT_URL', ${$sitename.'_settings'}['site_protocol'] . '://' . ${$sitename.'_settings'}['site_url']);
			  define('MSM_CURRENT_PATH', ${$sitename.'_settings'}['site_path']);
			  define('MSM_PARENT_URL', ${$sitename.'_settings'}['parent_protocol'] . '://' . ${$sitename.'_settings'}['parent_url']);
			  define('MSM_PARENT_PATH', ${$sitename.'_settings'}['parent_path']);

				break;
			}

		}
	}
}