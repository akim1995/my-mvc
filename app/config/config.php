<?php
	// App Root
/* define('APPROOT', dirname(dirname(__FILE__))); */
define('APPROOT', $_SERVER['DOCUMENT_ROOT'] . '/app');
	// URL Root
// you can also hardcode url root like http://my-mvc.lan/
define('URLROOT', $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . 
	'://' . $_SERVER['HTTP_HOST'] . '/');
	// Site Name
define('SITENAME', 'MyMVC');

