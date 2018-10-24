<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Loading screen</title>
    </head>
    <body>
        <h2>Authenticating...</h2>
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
                        echo 'Login Success! Click the following button to proceed<br />';
                        echo '<a href="../View/LandingMainPage.php">Proceed</a>';
                    }
                    
                } catch (Kreait\Firebase\Exception\Auth\InvalidPassword $e) {
                    echo $e->getMessage()."<br />";
                    
                }
               
            }
        
        
    } catch (Exception $ex) {
        echo "Can't connect to database Firebase";
        echo '<br /><a href="../View/Loginadmin.php">Back</a>';
    }
        ?>
    </body>
</html>
