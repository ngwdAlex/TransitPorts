<?php
include_once '../Model/Admin.php';

class LoginControl {
     
        $email = $_POST['inputEmail'];
        $pass = $_POST['inputPassword'];
                  
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
