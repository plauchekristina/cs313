<?php

/*
 * Library of Functions
 */
require('../connection.php');
var_dump($_POST);

/*
function checkEmail($email) {
    $valEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    return $valEmail;
}

// Check the password for a minimum of 8 characters,
// at least one 1 capital letter, at least 1 number and
// at least 1 special character
function checkPassword($user_password) {
    $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]])[[:print:]]{8,}$/';
    return preg_match($pattern, $user_password);
}

/* 
 * Accounts Model page for site visitors.
 */
 /* 
 * New function will handle site registrations.
 */

/*
// Check for an existing email address
function checkExistingEmail($email) {
  
    $sql = 'SELECT email FROM account WHERE email = :email';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $matchEmail = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if(empty($matchEmail)){
    return 0;
    } else {
     return 1;
    }
   
}
  */
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
    $stmt->bindValue(':username', $email, PDO::PARAM_STR);
    $stmt->bindValue(':user_password', $user_password, PDO::PARAM_STR);
    // Insert the data
    try {
        $stmt->execute();
    }
       catch (Exception $e) {
        echo $e;
    }

    $co_op_name= htmlspecialchars($_POST ['co_op_name']);
    $contact_name= htmlspecialchars($_POST ['contact_name']);
    $contact_email= htmlspecialchars($_POST ['contact_email']);
    $full_budget= htmlspecialchars($_POST ['full_portion_budget']);
    $half_budget= htmlspecialchars($_POST ['half_portion_budget']); 
    
   
  
      //$db = dbConnect();
      // The SQL statement
      $sql = 'INSERT INTO coop (coop_name, coop_contact_name, coop_contact_email, coop_full_budget, coop_half_budget)
          VALUES (:coop_name, :coop_contact_name, :coop_contact_email, :coop_full_budget, :coop_half_budget)';
      // Create the prepared statement using the db connection
      $stmt = $db->prepare($sql);
      // The next four lines replace the placeholders in the SQL
      // statement with the actual values in the variables
      // and tells the database the type of data it is
      $stmt->bindValue(':coop_name', $coop_name, PDO::PARAM_STR);
      $stmt->bindValue(':coop_contact_name', $coop_contact_name, PDO::PARAM_STR);
      $stmt->bindValue(':coop_contact_email', $coop_contact_email, PDO::PARAM_STR);
      $stmt->bindValue(':coop_full_budget', $coop_full_budget, PDO::PARAM_INT);
      $stmt->bindValue(':coop_half_budget', $coop_half_budget, PDO::PARAM_INT);
      // Insert the data
      try {
          $stmt->execute();
      }
         catch (Exception $e) {
          echo $e;
      }
    // Ask how many rows changed as a result of our insert
   
   
   /*
   // Get client data based on an email address
   function getClient($email){
  
    $sql = 'SELECT account_id, first_name, last_name, email, username, user_password 
            FROM account
            WHERE email = :email';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $clientData = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $clientData;
   }
   
   
   
   // selecting client data based on Id
   
   // Get client information by client email
   function getClientInfo($email){

    $sql = 'SELECT * FROM account WHERE email = :email';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':email', $email, PDO::PARAM_INT);
    $stmt->execute();
    $clientInfo = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $clientInfo;
   }
   
   // Get client information by client ID
   function getClientById($account_id){
  
    $sql = 'SELECT * FROM account WHERE account_id = :account_id';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':account_id', $account_id, PDO::PARAM_INT);
    $stmt->execute();
    $clientById = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $clientById;
   }
   
   ///update account
   function updateClient($first_name, $last_name, $email, $account_id){
    // Create a connection object using the db connection function

    // The SQL statement
    $sql = 'UPDATE account SET first_name = :first_name, last_name = :last_name,
        email = :email
        WHERE account_id = :account_id';
    // Create the prepared statement using the db connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':first_name', $first_name, PDO::PARAM_STR);
    $stmt->bindValue(':last_name', $last_name, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':account_id', $account_id, PDO::PARAM_STR);
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
   }
   
   ///update account
   function updatePassword($user_password, $account_id){
    // Create a connection object using the db connection function
 
    // The SQL statement
    $sql = 'UPDATE account SET user_password = :user_password
        WHERE account_id = :account_id';
    // Create the prepared statement using the db connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':user_password', $user_password, PDO::PARAM_STR);
    $stmt->bindValue(':account_id', $account_id, PDO::PARAM_INT);
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
   }*/
?>