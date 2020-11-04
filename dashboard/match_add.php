<?php require_once '../assets/private/init.php'; ?>
<?php administrator(); ?>

<?php
  // Process form
  if (isset($_POST['addFixture'])) {
    // Required fields
    $required = array('team1', 'team2', 'match_date', 'venue');

    foreach($_POST as $key=>$value) {
      if (empty($value) && in_array($key, $required)) {
        $errors[] = "All fields are required";
        break;
      }
    }

    // If no error
    if (empty($errors)) {
      // $formattedDate = explode('/', $_POST['match_date']);
      // $formatted = $formattedDate[2].'-'.$formattedDate[0].'-'.$formattedDate[1];

      // Assign form values
      $match->team1 = sanitize('team1');
      $match->team2 = sanitize('team2');
      $match->venue = sanitize('venue');
      $match->match_date = trim($_POST['match_date']);

      if (strlen($match->venue) < 3) {
        $errors[] = "Please check venue and try again.";
      }

      // if no error
      if (empty($errors)) {
        if ($match->create()) {
          $session->message('Fixture added successfully.');
          redirectTo('matches.php');
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
        <li class="breadcrumb-item active">Fixtures</li>
      </ol>

      <!-- Icon Cards-->
      <?php include_once 'inc/metric.php'; ?>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Add Fixture
        </div>
        <div class="card-body">
          <?php success($message); error($errors); ?>
          <div class="col-md-12">
            <form action="match_add.php" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="team1">Team 1</label>
                    <select class="form-control" name="team1" id="team1">
                      <option value="">-- Choose Team 1 --</option>
                      <?php
                        $countries = $country->getCountries();
                        foreach($countries as $country1) {
                          echo "<option value='".$country1['id']."'>".$country1['name']."</option>";
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="team2">Team 2</label>
                  <select class="form-control" name="team2" id="team2">
                    <option value="">-- Choose Team 2 --</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="code">Date</label>
                    <input type="date" name="match_date" value="<?php echo stickyForm('match_date'); ?>" placeholder="Choose date" class="form-control">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="venue">Venue</label>
                    <input type="text" name="venue" value="<?php echo stickyForm('venue'); ?>" placeholder="Enter match venue" class="form-control">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <button type="submit" name="addFixture" class="btn btn-primary"><i class="fa fa-plus"></i> Add Fixture</button>
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
