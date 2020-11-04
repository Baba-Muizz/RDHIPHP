<?php require_once '../assets/private/init.php'; ?>
<?php administrator(); ?>
<?php
// GET querystring from preceeding page
if (!isset($_GET['id'])) {
  redirectTo('countries.php');
}
$id = urlencode($_GET['id']);

?>

<?php
  // Process form
  if (isset($_POST['updateCountry'])) {
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
      $country->name = ucwords(strtolower(sanitize('name')));
      $country->code = strtoupper(sanitize('code'));
      $country->flag = $flag = trim($_POST['flag']);

      if (strlen($country->name) < 3) {
        $errors[] = "Please check country name and try again.";
      }

      // if no error
      if (empty($errors)) {
        // Check if image was selected for upload
        if (empty($_FILES['flag']['name'])) {
          if ($country->update($id)) {
            $session->message('Country updated successfully');
            redirectTo('countries.php');
          }
        }
        else {
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
              if ($country->update($id)) {
                // Delete previous flag
                if(file_exists("../assets/img/flag/".$flag)) {
                  unlink("../assets/img/flag/".$flag);
                }

                $session->message('Country updated successfully.');
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
  }

  // Necessary for first time page load
  $nation = $country->getCountry($id);
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
          <i class="fa fa-table"></i> Update Country
        </div>
        <div class="card-body">
          <?php success($message); error($errors); ?>
          <div class="col-md-6">
            <form action="country_update.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="MAX_FILE_SIZE" value="1000">
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="flag">Upload Country Flag</label>
                    <input type="file" id="flag" name="flag" class="form-control">
                    <input type="hidden" name="flag" value="<?php echo $nation['flag']; ?>">
                  </div>
                </div>
                <div class="col-md-4">
                  <?php if(!empty($nation['flag'])): ?>
                    <img src="../assets/img/flag/<?php echo $nation['flag']; ?>" alt="">
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group">
                <label for="name">Country Name</label>
                <input type="text" id="name" name="name" value="<?php echo stickyUpdate('name', $nation['name']); ?>" placeholder="Enter country" class="form-control">
              </div>

              <div class="form-group">
                <label for="code">Country Code</label>
                <input type="text" name="code" value="<?php echo stickyUpdate('code', $nation['code']); ?>" placeholder="Enter country code" class="form-control">
              </div>

              <div class="form-group">
                <button type="submit" name="updateCountry" class="btn btn-primary"><i class="fa fa-edit"></i> Update Country</button>
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
