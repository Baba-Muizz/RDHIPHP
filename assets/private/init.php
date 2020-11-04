<?php
// Start SESSION
if (!isset($_SESSION)) {
  session_start();
}

// Errors array
$errors = array();

// Set application root path
define('DS', DIRECTORY_SEPARATOR);
define('APP_ROOT', dirname(dirname(dirname(__FILE__))).DS);

// Require priority files
require_once APP_ROOT . 'assets/private/db/config.php';
require_once APP_ROOT . 'assets/private/functions.php';
require_once APP_ROOT . 'assets/private/autoload_classes.php';

// Instantiate classes
$contact = new Contact();
$user = new User();
$profile = new Profile();


// Set server response messages
$session = new Session();
$message = $session->message();
