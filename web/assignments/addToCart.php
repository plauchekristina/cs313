<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<?php 
//session start
session_start();

?>


    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div  class="panel-body">
          
                <?php

      $products = $_POST["product"];
    foreach ($products as $product){
        $_SESSION["items"] = $products;
       } 

?>

<h4>You have added the following to your cart:</h4>
        
        <?php 
        $products = $_POST["product"];
    foreach ($products as $product){
        echo "$product <br>";
}
?>
         
        <form action="viewCart.php">
        <input type="submit" class=".btn-primary" value="View Cart">
    </form>       
            </div>
            </div>

   

            
<!--end center column-->
</div> 
</div>        
       
    <script src ="../scripts/functions.js"></script>
 <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 