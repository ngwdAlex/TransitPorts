<!DOCTYPE html>
<?php

require '../vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.
$serviceAccount = ServiceAccount::fromJsonFile('../secret/transitports-ee351-ff3793a676d7.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    // The following line is optional if the project id in your credentials file
    // is identical to the subdomain of your Firebase project. If you need it,
    // make sure to replace the URL with the URL of your project.
    ->withDatabaseUri('https://transitports-ee351.firebaseio.com')
    ->create();

$database = $firebase->getDatabase();

//$newPost = $database
//    ->getReference('blog/posts')
//    ->push([
//        'title' => 'Post title',
//        'body' => 'This should probably be longer.'
//    ]);
//
//$newPost->getKey(); // => -KVr5eu8gcTv7_AHb-3-
//$newPost->getUri(); // => https://my-project.firebaseio.com/blog/posts/-KVr5eu8gcTv7_AHb-3-
//
//$newPost->getChild('title')->set('Changed post title');
//$newPost->getValue(); // Fetches the data from the realtime database
//$newPost->remove();
?>
<html lang="en">
    
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS-->
    <link href="../CSS/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../CSS/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../CSS/css/sb-admin.css" rel="stylesheet">
    
    
    
  </head>

  <body class="bg-dark">
    
    <div class="container" id="loginInterface">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form method="post" action="../Control/LoginControl.php">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
<!--            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>-->
            
          <a class="btn btn-primary btn-block" id="btnLogin" type="submit">Login</a>
          </form>
          <div class="text-center">
            <!--<a class="d-block small mt-3" href="register.html">Register an Account</a>-->
            <a class="d-block small" href="ForgotPassword.php" id="btnForgotPassword">Forgot Password?</a>
          </div>
        </div>
      </div>
    
     
      </div>
      

    <!-- Bootstrap core JavaScript-->
    <script src="../CSS/vendor/jquery/jquery.min.js"></script>
    <script src="../CSS/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../CSS/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
