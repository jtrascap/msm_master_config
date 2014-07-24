<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Local db
$env_db['hostname'] = 'localhost';
$env_db['username'] = 'root';
$env_db['password'] = 'root';
$env_db['database'] = 'site1_local';

/**
 * Remote db - typically a shared development database
 * 
 * Putting this below the local settings allows us to easily uncomment the
 * lines to connect to a secondary connection, overriding the first settings
 */
// $env_db['hostname'] = 'domain.com';
// $env_db['username'] = '';
// $env_db['password'] = '';
// $env_db['database'] = '';
