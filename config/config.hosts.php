<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// update the array keys with the folder names for each site configruation
// update the array values with the host names of each environment
$hosts = array 
(
  'dev' => array 
  (
    'site_1' => 'dev.site1.com',
    'site_2' => 'dev.site2.com'
  ),
  'stage' => array 
  (
    'site_1' => 'stage.site1.com',
    'site_2' => 'stage.site2.com'
  ),
  'prod' => array 
  (
    'site_1' => 'www.site1.com',
    'site_2' => 'www.site2.com'
  )
);

/*
  we check for the local environment separately so we can 
  .gitignore the config.hosts.local.php file
*/

$local_env = TRUE;

foreach( $hosts as $env ) 
{
  foreach( $env as $sitename => $hostname ) 
  {
    if (strtolower($_SERVER['HTTP_HOST']) == $hostname) 
    {
      $local_env = FALSE;
      break;
    }
  }
}

// don't forget to  update the array values in config.hosts.local.php
if ($local_env == TRUE) {
  include 'config.hosts.local.php';
}