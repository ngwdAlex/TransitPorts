<?php
include_once '../Model/Admin.php';
class LoginControl {
     
        $email = trim($_POST['inputEmail']);
        $pass = trim($_POST['inputPassword']);
                  
          if(!$email || !$pass){
              echo 'Incorrect email or password';
              echo '<a href="LoginAdmin.php">Back</a>';
          }
                 
          try{
              firebase.auth().signInWithEmailAndPassword($email, $pass);
          }catch (Exception $ex){
              $ex->getMessage();
          }
          
    
}
