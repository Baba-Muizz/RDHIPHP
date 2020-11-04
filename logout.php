<?php
require_once 'assets/private/init.php';

if (loggedIn()) {
  if ($user->logout()) {
    $session->message('You are logged out. Please login again.');
    redirectTo('login.php');
  }
}
redirectTo('login.php');
