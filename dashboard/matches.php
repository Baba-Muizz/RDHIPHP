<?php require_once '../assets/private/init.php'; ?>
<?php administrator(); ?>

<?php require_once 'inc/header.php'; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Football Fixtures</li>
      </ol>
      <!-- Icon Cards-->
      <?php include_once 'inc/metric.php'; ?>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Football Fixtures
          <a href="match_add.php" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Add Fixture</a>
        </div>
        <div class="card-body">
          <?php success($message); ?>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Team 1</th>
                  <th>Team 2</th>
                  <th>Venue</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  // Get all countries
                  $matches = $match->getMatches();
                  var_dump($matches);exit;
                ?>
                <?php if(!empty($matches)): foreach($matches as $match): ?>
                <tr>
                  <td>
                    <?php echo date_to_text($match['match_date']); ?>
                  </td>
                  <td>
                    <img src="../assets/img/flag/<?php echo $match['team1_flag']; ?>" alt="<?php echo $match['team1_name']; ?>">
                    <?php echo $match['team1_name']; ?>
                  </td>
                  <td>
                    <?php echo $match['team2_name']; ?>
                    <img src="../assets/img/flag/<?php echo $match['team2_flag']; ?>" alt="<?php echo $match['team2_name']; ?>">
                  </td>
                  <td><?php echo $match['venue']; ?></td>
                  <td>
                    <a href="#" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                    <a href="match_update.php?id=<?php echo $match['id']; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="match_delete.php?id=<?php echo $match['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-remove"></i></a>
                  </td>
                </tr>
              <?php endforeach; endif; ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<?php require_once 'inc/footer.php'; ?>
