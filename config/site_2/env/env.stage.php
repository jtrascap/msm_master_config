<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Staging Environment
// Update the array name prefix with the site's shortname, ex. '$mysite_settings'

$site_2_settings = array
(
  'sitename'          => 'site_2',
  'env'               => 'stage',
  'env_full'          => 'Staging',
  'site_protocol'     => 'http',
  'site_url'          => 'stage.site2.com',
  'site_path'         => '/path/to/the/staging/site/public/',
  'parent_protocol'   => 'http',
  'parent_url'        => 'stage.site1.com',
  'parent_path'       => '/path/to/the/parent/staging/site/public/'
);