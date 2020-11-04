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
        <li class="breadcrumb-item active">Users</li>
      </ol>
      <!-- Icon Cards-->
      <?php include_once 'inc/metric.php'; ?>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> List of Users
        </div>
        <div class="card-body">
          <?php success($message); ?>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Date Added</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>E-mail</th>
                  <th>Address</th>
                  <th>State/LGA</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  // Get all users
                  $users = $user->getUsers();
                ?>
                <?php if(!empty($users)): foreach($users as $user): ?>
                <tr>
                  <td>
                    <?php echo datetime_to_text($user['created']); ?>
                  </td>
                  <td><?php echo $user['surname'].', '.$user['firstname'].' '.$user['middlename']; ?></td>
                  <td><?php echo $user['phone']; ?></td>
                  <td><?php echo $user['email']; ?></td>
                  <td><?php echo $user['address']; ?></td>
                  <td><?php echo $user['statename'].'/'.$user['name']; ?></td>
                  <td>
                    <a href="#" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                    <a href="user_update.php?id=<?php echo $user['id']; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="user_delete.php?id=<?php echo $user['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-remove"></i></a>
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
