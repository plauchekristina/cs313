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
                <h1>Checkout</h1>
       
        <?php 
        $items = $_SESSION["items"];
    foreach ($items as $item){
        echo "$item <br>";
}
?>
        <form action="order-confirmation.php" method ="post"> 
            <div>
          <label>First & Last Name:</label> 
          </div>
          <div>  
              <input type="text" placeholder="Name" name="name">
            </div>
            <div>
              <label>Email:</label> 
              </div>
            <div>
              <input type="text" placeholder="Email" name="email">
            </div>
            <div>
              <label>Address:</label> 
              </div>
            <div>  
              <input type="text" placeholder="Street" name="street" >
            </div>
            <div>
              <input type="text" placeholder="City" name="city">
            </div>
            <div>
              <input type="text" placeholder="State" name="state">
            </div>
            <div>
              <input type="text" placeholder="Zip Code" name="zip">
            </div>
          
      <input type="submit" class= "btn-primary" name="submit" value="Place Order">
        </form>
                   
            </div>
            </div>

   

            
<!--end center column-->
</div> 
</div>        
       
    <script src ="../scripts/functions.js"></script>
 <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 