<?php
require_once '../../assets/private/init.php';

// Get countryid from AJAX call
$countryid = '-1';

if (isset($_POST['countryid'])) {
  $countryid = intval($_POST['countryid']);
}
if ($countryid > 0) {
  $countries = $country->getAllExcept($countryid);

  foreach($countries as $country) {
    echo "<option value='".$country['id']."'>".$country['name']."</option>";
  }
}
else {
  echo "<option>Something went wrong with the selected country</option>";
}
