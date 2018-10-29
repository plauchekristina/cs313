<?php

/*
 * Library of Functions
 */
require('../connection.php');
var_dump($_POST);



    $coop_name= htmlspecialchars($_POST ['coop_name']);
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
      $stmt->bindValue(':coop_contact_name', $contact_name, PDO::PARAM_STR);
      $stmt->bindValue(':coop_contact_email', $contact_email, PDO::PARAM_STR);
      $stmt->bindValue(':coop_full_budget', $full_budget, PDO::PARAM_INT);
      $stmt->bindValue(':coop_half_budget', $half_budget, PDO::PARAM_INT);
      // Insert the data
      try {
          $stmt->execute();
      }
         catch (Exception $e) {
          echo $e;
      }
    
?>

$item_name= htmlspecialchars($_POST ['item-name']);
      $item_count=($_POST ['item-count']);
      $item_unit=($_POST ['item-unit']);
      $item_price=($_POST ['item-price']);
      $item_full_qty=($_POST ['per-full']);
      $item_half_qty=($_POST ['per-half']);
      $item_order_qty= $_POST ['item-quantity']);
      $item_order_cost=($_POST ['item-total']);

      // The SQL statement
      $sql = 'INSERT INTO item (item_orders_id, item_name, item_count, item_unit, item_price, item_full_qty, item_half_qty, item_order_qty, item_order_cost)
      VALUES (:item_orders_id, :item_name, :item_count, :item_unit, :item_price, :item_full_qty, :item_half_qty, :item_order_qty, :item_order_cost)';
  // Create the prepared statement using the db connection
  $stmt = $db->prepare($sql);
  // The next lines replace the placeholders in the SQL
  // statement with the actual values in the variables
  // and tells the database the type of data it is
  $stmt -> bindValue(':item_orders_id', $last_id, PDO::PARAM_INT);
  $stmt->bindValue(':item_name', $item_name, PDO::PARAM_STR);
  $stmt->bindValue(':orders_total', $item_count, PDO::PARAM_INT);
  $stmt->bindValue(':item_unit', $item_unit, PDO::PARAM_STR);
  $stmt->bindValue(':item_price', $item_price, PDO::PARAM_INT);
  $stmt->bindValue(':item_full_qty', $item_full_qty, PDO::PARAM_INT);
  $stmt->bindValue(':item_half_qty', $item_half_qty, PDO::PARAM_INT);
  $stmt->bindValue(':item_order_qty', $item_order_qty, PDO::PARAM_INT);
  $stmt->bindValue(':item_order_cost', $item_order_cost, PDO::PARAM_INT);
  // Insert the data
  try {
      $stmt->execute();
     
  }
     catch (Exception $e) {
      echo $e;
  }