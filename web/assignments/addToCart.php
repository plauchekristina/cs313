<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<?php 

$productss = $_POST["continent"];
?>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div  class="panel-body">
                <p>My Cart:</br>
        <?php
      $cartItems = array("art1"=>"Grant's Art", 
                          "art2"=>"Aden's Art",
                          "art3"=>"Chase's Art");
      foreach ($products as $p){
          print "$cartItems[$p] <br />";
      }
      ?>
                   
            </div>
            </div>

   

            
<!--end center column-->
</div> 
</div>        
       
    <script src ="../scripts/functions.js"></script>
 <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 