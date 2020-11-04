<?php
// Helper functions

// Create slug
function create_slug($string){
  $string = strtolower($string);
  $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
  return $slug;
}

// Redirect to specified page
function redirectTo($page) {
  header("Location: " . $page);
  exit;
}

// Cart quantity count
function cartQty($id) {
  if (!empty($id) && in_array($id, $_SESSION['cart'])) {
    $count = 0;
    foreach($_SESSION['cart'] as $item) {
      if ($id == $item) {
        $count++;
      }
    }
    return $count;
  }
  return 1;
}

// Cart sub total price based on quantity
function cartPrice($id, $price) {
  if (!empty($id) && in_array($id, $_SESSION['cart'])) {
    if (!empty($price)) {
      return $price * cartQty($id);
    }
  }
}

function sanitize($value) {
	if (!empty($value)) {
		return htmlentities(strip_tags(trim($_POST[$value])));
	}
	return false;
}

// function to keep values on text and textarea form controls after page reload
function stickyForm($value) {
	return isset($_POST[$value]) ? $_POST[$value] : '';
}

function stickyUpdate($formfield='', $dbfield='') {
  if (!empty($formfield) || !empty($dbfield)) {
    return isset($_POST[$formfield]) ? $_POST[$formfield] : $dbfield;
  }
  return false;
}


// Radio button handler
function stickyRadio($field='', $label=''){
	if (!empty($field) && !empty($label))
		return (isset($_POST[$field]) && $_POST[$field] == $label) ? "checked='checked'" : '';
}
function stickyRadioUpdate($formfield='', $dbfield='', $formvalue=''){
  if (isset($_POST[$formfield])){
    if ($_POST[$formfield] == $formvalue){
      return " checked='checked'";
    }
  }
  else {
    if ($dbfield == $formvalue){
      return " checked='checked'";
    }
  }
}

// Select/menu handler
function stickySelect($value='', $query=''){
	if (!(strcmp(stickyForm($value), $query))){
      return " selected='selected'";
    }
}
function stickySelectUpdate($formfield='', $dbfield='', $choice=''){
  if (isset($_POST[$formfield])) {
    if (!(strcmp(stickyForm($formfield), $choice))){
        echo " selected='selected'";
      }
  }
  else {
    if (!(strcmp($dbfield, $choice))){
        echo " selected='selected'";
      }
  }
}

// Server messages
function error($errors){
    if (!empty($errors)){
      echo "<div class='alert alert-danger'>";
      foreach ($errors as $error){
        echo " - ".$error."<br>";
      }
      echo "</div>";
    }
}

function success($message){
    if (!empty($message)){
    	$output = "<div class='alert alert-success'>";
    	$output .= $message;
    	$output .= "</div>";

    	echo $output;
    }
}

// User Authentication
function loggedIn(){
	return isset($_SESSION['us3rid']) ? true : false;
}

function restricted(){
	if (!loggedIn()){
		redirectTo('../login.php');
	}
}

function administrator(){
	if (!isAdmin()){
		redirectTo('../login.php');
	}
}

function isAdmin(){
	return $_SESSION['1s@dmin'] ? true : false;
}

function admin() {
  if (loggedIn()) {
    if (isAdmin()) {
      return true;
    }
    return false;
  }
  return false;
}

function user() {
  if (loggedIn()) {
    if (!isAdmin()) {
      return true;
    }
    return false;
  }
  return false;
}

/* Working with Dates */
function datetime_to_text($date="") {
  if (!empty($date)) {
    $unixtimestamp = strtotime($date);
    // Format date
    return strftime("%B %d, %Y %I:%M %p", $unixtimestamp);
  }
}
function date_to_text($date=""){
  $unixdatetime = strtotime($date);
  return strftime("%B %d, %Y", $unixdatetime);
}

// Return excerpt of an article
function excerpt($body, $limit) {
  if (!empty($body)) {
    $body = strip_tags($body);
    $sentences = explode(' ', $body);
    $words = "";
    $counter = 1;
    foreach ($sentences as $word) {
      if ($counter > $limit) {
        break;
      }
      $words .= $word." ";
      $counter++;
    }
    return $words." ...";
  }
  return false;
}
