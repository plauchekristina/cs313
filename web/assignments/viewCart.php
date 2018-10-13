<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<?php
//session start
session_start();
  if (isset($_POST["empty_cart"])){
      unset($_SESSION["items"]);
  }
?>

    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div  class="panel-body">
                <h1>View Cart:</h1>
                
                <?php 
                $items = $_SESSION["items"];
            foreach ($items as $item){
                echo "$item <br>";
        }
        ?>
                <form action="checkout.php">
                <input type="submit" class= "btn-primary" value="Proceed to Checkout">
                            </form>
<div>
                            <form action="viewCart.php" class="double-button" method="post">
        <input type="submit" name="empty_cart" class= "btn-danger" value="Empty Cart">
    </form>
    </div>
    


                   
            </div>
            </div>

   

            
<!--end center column-->
</div> 
</div>        
       
    <script src ="../scripts/functions.js"></script>
 <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 