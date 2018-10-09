<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<?php 
    //start the session
    session_start();
?>

    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div  class="panel-body">
              <?php
              $items = $_SESSION["items"];
              foreach ($items as $item){ 
                  echo $item;
              } 
              ?>


                   
            </div>
            </div>

   

            
<!--end center column-->
</div> 
</div>        
       
    <script src ="../scripts/functions.js"></script>
 <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 