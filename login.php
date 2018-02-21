<?php
  if(isset($_SESSION['user']))
  {
    header("Location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>iGuidance Student and Admin Profiling</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/login.css" rel="stylesheet">
</head>

<body class="bg-dark">
<section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 login-sec">
                <h2 class="text-center">Login Now</h2>
                <form class="login-form" method="post" action="controllers/login.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="text-uppercase">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="">
                    </div>
                    <div class="form-check">
                        <!-- <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                          <small>Remember Me</small>
                        </label> -->
                        <button type="submit" class="btn btn-login float-right">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-8 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="images/slider1.jpeg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>Best place</h2>
                                    <p>The best candy shop a child can be left alone in, is the library ౼ Maya Angelou</p>
                                </div>  
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/slider2.jpeg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>Reading</h2>
                                    <p>can take you places you have never been before!</p>
                                </div>  
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/slider3.jpeg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                <h2>Libraries</h2>
                                <p>Always remind me that there are good things in this world</p>
                            </div>  
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    </div>
</section>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
