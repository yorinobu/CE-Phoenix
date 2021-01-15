<?php
// set the level of error reporting
  error_reporting(E_ALL);

  const HTTP_SERVER = 'https://www.seomagic-usa.com';
  const COOKIE_OPTIONS = [
    'lifetime' => 0,
    'domain' => 'www.seomagic-usa.com',
    'path' => '/CE-Phoenix/management',
    'samesite' => 'Lax',
    'secure' => true,
  ];
  const DIR_WS_ADMIN = '/CE-Phoenix/management/';

  const DIR_FS_DOCUMENT_ROOT = '/Users/nagatayorinobu/Dropbox/htdocs/www.seomagic-usa.com/CE-Phoenix/';
  const DIR_FS_ADMIN = '/Users/nagatayorinobu/Dropbox/htdocs/www.seomagic-usa.com/CE-Phoenix/management/';
  const DIR_FS_BACKUP = DIR_FS_ADMIN . 'backups/';

  const HTTP_CATALOG_SERVER = 'https://www.seomagic-usa.com';
  const DIR_WS_CATALOG = '/CE-Phoenix/';
  const DIR_FS_CATALOG = '/Users/nagatayorinobu/Dropbox/htdocs/www.seomagic-usa.com/CE-Phoenix/';

  date_default_timezone_set('America/Los_Angeles');

// If you are asked to provide configure.php details
// please remove the data below before sharing
  const DB_SERVER = 'localhost';
  const DB_SERVER_USERNAME = 'root';
  const DB_SERVER_PASSWORD = 'root';
  const DB_DATABASE = 'seomagic_db2';
