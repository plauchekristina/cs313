<?php

/*
 * Library of Functions
 */
require('../connection.php');
var_dump($_POST);

$orders_total=($_POST ['orders-total']);
$orders_full_qty=($_POST ['full-count']);
$orders_full_budget= $_POST ['full-budget']);
$orders_half_qty=($_POST ['half-count']);
$orders_half_budget= ($_POST ['half-budget']);
$orders_date= htmlspecialchars($_POST ['order-date']);
 

   
  

      // The SQL statement
      $sql = 'INSERT INTO orders (orders_total, orders_full_qty, orders_half_qty, orders_full_budget, orders_half_budget, orders_date)
          VALUES (:orders_total, :orders_full_qty, :orders_half_qty, :orders_full_budget, :orders_half_budget, :orders_date)';
      // Create the prepared statement using the db connection
      $stmt = $db->prepare($sql);
      // The next lines replace the placeholders in the SQL
      // statement with the actual values in the variables
      // and tells the database the type of data it is
      $stmt->bindValue(':orders_total', $orders_total, PDO::PARAM_INT);
      $stmt->bindValue(':orders_full_qty', $orders_full_qty, PDO::PARAM_INT);
      $stmt->bindValue(':orders_half_qty', $orders_half_qty, PDO::PARAM_INT);
      $stmt->bindValue(':orders_full_budget', $orders_full_budget, PDO::PARAM_INT);
      $stmt->bindValue(':orders_half_budget', $orders_half_budget, PDO::PARAM_INT);
      $stmt->bindValue(':orders_date', $orders_date, PDO::PARAM_STR);
      // Insert the data
      try {
        $stmt->execute();
         //$last_id = $db->lastInsertId();
      }
         catch (Exception $e) {
          echo $e;
      }
 
?>