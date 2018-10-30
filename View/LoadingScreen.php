<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Loading</title>

    <!-- Bootstrap core CSS-->
    <link href="../CSS/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../CSS/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../CSS/css/sb-admin.css" rel="stylesheet">
    </head>
    <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Authenticating</div>
        <div class="card-body">
          
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
        
        //        $database = $firebase->getDatabase();

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
//        if(isset($_POST['btnLogin'])){
//             $email=trim($_POST['inputEmail']);
//                $password = trim($_POST['inputPassword']);
//                $firebase->getAuth()->verifyPassword($email, $password);
//        }
       
        try{
        if((isset($_POST['inputEmail'])) && isset($_POST['inputPassword'])){
            
            $email=trim($_POST['inputEmail']);
            $password = trim($_POST['inputPassword']);
            try {
                $user = $firebase->getAuth()->verifyPassword($email, $password); 
                if($user != null){
                    echo '<div class="text-center">';
                    echo '<form method="post" action="LandingMainPage.php">';
                    echo 'Login Success! Click the following button to proceed<br />';
//                        echo '<a href="../View/LandingMainPage.php">Proceed</a>';
                    echo '<button class="btn btn-primary btn-block" type="submit" name="btnLogin">Proceed</button>';
                    echo '</form>';
                    echo '</div>';
                }

            } catch (Kreait\Firebase\Exception\Auth\InvalidPassword $e) {
                echo $e->getMessage()."<br />";
            }
        }
        
        
    } catch (Exception $ex) {
        echo '<div class="text-center">';
                        echo '<form method="post" action="LoginAdmin.php">';
                        echo 'Error! Incorrect email and password<br />';
//                        echo '<a href="../View/LandingMainPage.php">Proceed</a>';
                        
                        echo '<button class="btn btn-primary btn-block" type="submit" name="btnLogin">Back</button>';
                        echo '</form>';
                        echo '</div>';
    }
        ?>
            
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  

        
    </body>
</html>
