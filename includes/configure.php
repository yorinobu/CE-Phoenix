<?php
// set the level of error reporting
  error_reporting(E_ALL);

  const HTTP_SERVER = 'https://www.seomagic-usa.com';
  const COOKIE_OPTIONS = [
    'lifetime' => 0,
    'domain' => 'www.seomagic-usa.com',
    'path' => '/CE-Phoenix/',
    'samesite' => 'Lax',
    'secure' => true,
  ];
  const DIR_WS_CATALOG = '/CE-Phoenix/';

  const DIR_FS_CATALOG = '/Users/nagatayorinobu/Dropbox/htdocs/www.seomagic-usa.com/CE-Phoenix/';

  date_default_timezone_set('America/Los_Angeles');

// If you are asked to provide configure.php details
// please remove the data below before sharing
  const DB_SERVER = 'localhost';
  const DB_SERVER_USERNAME = 'root';
  const DB_SERVER_PASSWORD = 'root';
  const DB_DATABASE = 'seomagic_db2';
