<?php require_once '../assets/private/init.php'; ?>
<?php administrator(); ?>

<?php
  // Process form
  if (isset($_POST['addCountry'])) {
    // Required fields
    $required = array('name');

    foreach($_POST as $key=>$value) {
      if (empty($value) && in_array($key, $required)) {
        $errors[] = "Country name is required";
        break;
      }
    }

    // If no error
    if (empty($errors)) {
      // Assign form values
      $country->name = sanitize('name');
      $country->code = sanitize('code');

      if (strlen($country->name) < 3) {
        $errors[] = "Please check country name and try again.";
      }

      // if no error
      if (empty($errors)) {
        // Set path to flag directory
        Photograph::$upload_dir = "../assets/img/flag/";
        // Receive upload file
        $file = $_FILES['flag'];

        // Attempt to attach file
        if ($photo->attach_file($file)) {
          // Get filename
          $country->flag = $photo->filename;

          // Save copy in image directory
          if ($photo->save()) {
            // Store record in database
            if ($country->create()) {
              $session->message('Country added successfully.');
              redirectTo('countries.php');
            }
          }
          else {
            $errors[] = join("<br>", $photo->errors);
          }
        }
        else {
          $errors[] = join("<br>", $photo->errors);
        }
      }
    }
  }
?>

<?php require_once 'inc/header.php'; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Countries</li>
      </ol>

      <!-- Icon Cards-->
      <?php include_once 'inc/metric.php'; ?>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Add Country
        </div>
        <div class="card-body">
          <?php success($message); error($errors); ?>
          <div class="col-md-6">
            <form action="country_add.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="MAX_FILE_SIZE" value="1000">
              <div class="form-group">
                <label for="flag">Upload Country Flag</label>
                <input type="file" id="flag" name="flag" class="form-control">
              </div>

              <div class="form-group">
                <label for="name">Country Name</label>
                <input type="text" id="name" name="name" value="<?php echo stickyForm('name'); ?>" placeholder="Enter country" class="form-control">
              </div>

              <div class="form-group">
                <label for="code">Country Code</label>
                <input type="text" name="code" value="<?php echo stickyForm('code'); ?>" placeholder="Enter country code" class="form-control">
              </div>

              <div class="form-group">
                <button type="submit" name="addCountry" class="btn btn-primary"><i class="fa fa-plus"></i> Add Country</button>
              </div>
            </form>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<?php require_once 'inc/footer.php'; ?>
