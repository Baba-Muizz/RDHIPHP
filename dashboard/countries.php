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
        <li class="breadcrumb-item active">Countries</li>
      </ol>
      <!-- Icon Cards-->
      <?php include_once 'inc/metric.php'; ?>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> List of Countries
          <a href="country_add.php" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Add Country</a>
        </div>
        <div class="card-body">
          <?php success($message); ?>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th></th>
                  <th>Country</th>
                  <th>Country Code</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  // Get all countries
                  $countries = $country->getCountries();
                ?>
                <?php if(!empty($countries)): foreach($countries as $country): ?>
                <tr>
                  <td>
                    <img src="../assets/img/flag/<?php echo $country['flag']; ?>" alt="<?php echo $country['name']; ?>">
                  </td>
                  <td><?php echo ucwords(strtolower($country['name'])); ?></td>
                  <td><?php echo strtoupper($country['code']); ?></td>
                  <td>
                    <a href="#" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                    <a href="country_update.php?id=<?php echo $country['id']; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="country_delete.php?id=<?php echo $country['id'].'&flag='.$country['flag']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-remove"></i></a>
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
