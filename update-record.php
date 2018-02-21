<?php
session_start();
include 'controllers/con.php';
if (!isset($_SESSION['user']))
{
  header('location: login.php');
}
$id = $_GET['id'];
$stmt = $con->query("SELECT * FROM profiles WHERE user_id = $id");
$row = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>iGuide Student and Faculty Profiling System</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php include 'partials/navbar.php'; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="manage-records.php">Manage Records</a>
        </li>
        <li class="breadcrumb-item active">Update Record</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row container">
        <div class="update-left col-md-3">
          <div class="wrapper">
            <div class="clearfix m-b">
                <img src="images/avatar_default_female.jpg" class="pull-left thumb m-r img-circle">
              <div class="clear">
                <div class="h3 m-t-xs m-b-xs">Aimereen Batalla</div>
                  <small class="text-muted">
                    <i class="fa fa-map-marker"></i>
                    Alaminos City
                  </small>
              </div>
            </div>
            <div class="right-side">
              <small class="text-uc text-xs text-muted">username</small>
              <p>000aimee</p>
              <small class="text-uc text-xs text-muted">email</small>
              <p>aimereenbatalla@gmail.com</p>
              <small class="text-uc text-xs text-muted">member since</small>
              <p>3 January 2018</p>

              <small class="text-uc text-xs text-muted">last login</small>
              <p>12 February 2018</p>

              <small class="text-uc text-xs text-muted">account status</small>
              <p>
                  <span class="label bg-success">Active</span>
              </p>

              <div class="line"></div>
              <small class="text-uc text-xs text-muted">social network</small>
              <p class="m-t-sm">
                <a href="https://www.facebook.com" class="btn btn-rounded btn-facebook btn-icon" data-toggle="tooltip" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
              </p>
            </div>
          </div>
        </div> 
        <div class="card-body update-right col-md-9">
          <form method="post" action="controllers/update-profile.php">
            <div class="form-group">
              <label>First name</label>
              <input class="form-control" name="firstname" type="text" value="<?php echo $row['firstname'] ?>">
            </div>
            <div class="form-group">
              <label>Last name</label>
              <input class="form-control" name="lastname" type="text" value="<?php echo $row['lastname'] ?>">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input class="form-control" name="email" type="email" value="<?php echo $row['email'] ?>">
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input class="form-control" name="phone" type="text" value="<?php echo $row['phone'] ?>">
            </div>
            <div class="form-group">
              <label>Street</label>
              <input class="form-control" name="street" type="text" value="<?php echo $row['street'] ?>">
            </div>
            <div class="form-group">
              <label>Baranggay</label>
              <input class="form-control" name="baranggay" type="text" value="<?php echo $row['baranggay'] ?>">
            </div>
            <div class="form-group">
              <label>City</label>
              <input class="form-control" name="city" type="text" value="<?php echo $row['city'] ?>">
            </div>
            <div class="form-group">
              <label>Province</label>
              <input class="form-control" name="province" type="text" value="<?php echo $row['province'] ?>">
            </div>
            <div class="form-group">
              <label>Birthday</label>
              <input class="form-control" name="birthday" type="text" value="<?php echo $row['birthday'] ?>">
            </div>
            <div class="form-group">
              <label>Gender</label>
              <input class="form-control" name="gender" type="text" value="<?php echo $row['gender'] ?>">
            </div>
            <input class="form-control" name="user_id" type="hidden" value="<?php echo $id ?>">
            <button type="submit" class="btn btn-primary btn-block" href="#">Update</button>
          </form>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include 'partials/footer.html'; ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModal">Delete Record?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Are you sure you want to delete this record? Action is irrevocable once done and you might lose system data.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="#">Delete</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
