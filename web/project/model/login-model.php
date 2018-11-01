<?php
session_start();
/*
 * Library of Functions
 */
require('../connection.php');
var_dump($_POST);
//session start
//$userSession = $_POST["username"];


  $username= htmlspecialchars($_POST ['username']);
  $user_password= htmlspecialchars($_POST ['user_password']); 



    //$db = dbConnect();
    // The SQL statement
    $sql = 'SELECT * FROM account WHERE username = :username';
    // Create the prepared statement using the db connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    // Insert the data
    try {
        $stmt->execute();
        $client= $stmt->fetch();
        $_SESSION['username'] = $username;
        $_SESSION['client']=$client;
      
    }
       catch (Exception $e) {
        echo $e;
    }

    $session_username= $_SESSION['client']['username'];
    $session_password= $_SESSION['client']['user_password'];

//if ($username ==  $session_username && $user_password == $session_password){

    if ($username==$session_username){
    echo "logins match!";
    var_dump($_SESSION);
} else {
    echo "BAMP, wrong! login doesn't match";
    var_dump($_SESSION);
}

//header('Location:../dashboard.php');

 


  


    
  
    
?>
