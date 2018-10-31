<?php
session_start();
/*
 * Library of Functions
 */
require('../connection.php');
var_dump($_POST);
//session start
//$userSession = $_POST["username"];




  $first_name= htmlspecialchars($_POST ['first_name']);
  $last_name= htmlspecialchars($_POST ['last_name']);
  $email= htmlspecialchars($_POST ['email']);
  $username= htmlspecialchars($_POST ['username']);
  $user_password= htmlspecialchars($_POST ['user_password']); 
  
  

    //$db = dbConnect();
    // The SQL statement
    $sql = 'INSERT INTO account (first_name, last_name, email, username, user_password)
        VALUES (:first_name, :last_name, :email, :username, :user_password)';
    // Create the prepared statement using the db connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':first_name', $first_name, PDO::PARAM_STR);
    $stmt->bindValue(':last_name', $last_name, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->bindValue(':user_password', $user_password, PDO::PARAM_STR);
    // Insert the data
    try {
        $stmt->execute();
    }
       catch (Exception $e) {
        echo $e;
    }

   header('Location:../login.php');
    // Ask how many rows changed as a result of our insert
   
   
   
   // Get client data based on an username
 
    //$sql = 'SELECT *  FROM account WHERE username = :username';
   // $stmt = $db->prepare($sql);
   // $stmt->bindValue(':username', $username, PDO::PARAM_STR);
   // $stmt->execute();
   // $clientData = $stmt->fetchAll(PDO::FETCH_ASSOC);
   // var_dump($clientData);
   //php echo $userSession
   //php $_SESSION['clientData']=$clientData;
   //echo "clientData begins: " .$clientData 
    
?>
