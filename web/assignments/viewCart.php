<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<?php
//session start
session_start();
   $products = $_POST["product"];
    foreach ($products as $product){
    $_SESSION["items"] = $products;}
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
        <button>Proceed to Checkout</button>


                   
            </div>
            </div>

   

            
<!--end center column-->
</div> 
</div>        
       
    <script src ="../scripts/functions.js"></script>
 <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 