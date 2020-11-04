<?php
// Autoload PHP classes
function __autoload($classname) {
  $classname = strtolower($classname);
  require_once APP_ROOT . "assets/private/class/$classname.class.php";
}
