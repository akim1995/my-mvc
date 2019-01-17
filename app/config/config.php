<?php
// DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'your_user');
define('DB_PASS', 'your_pass');
define('DB_NAME', 'your_db_name');
	// App Root
/* define('APPROOT', dirname(dirname(__FILE__))); */
define('APPROOT', $_SERVER['DOCUMENT_ROOT'] . '/app');
	// URL Root
// you can also hardcode url root like http://my-mvc.lan/
define('URLROOT', $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . 
	'://' . $_SERVER['HTTP_HOST'] . '/');
	// Site Name
define('SITENAME', 'your_sitename');

