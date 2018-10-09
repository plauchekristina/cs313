<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');
//start the session
session_start();?> 
<!---  ####### Body content begins ####### -->
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div  class="panel-body">
              
                    <!-- product gallery begins-->
                    <body>
<div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div  class="panel-body">
                <p>Brother Burton, This was tough! I thought I was going to be able to do a lot more with this, but there are so many 
                layers of understanding needed to get this right. I am clearly still a novice.</p> 
               <form action="addToCart.php" method="post">
               <input type="checkbox" name="product[]" value="Item 1">Item 1</br>
               <input type="checkbox" name="product[]" value="Item 2">Item 2</br>
               <input type="checkbox" name="product[]" value="Item 3">Item 3</br>
               <input type="checkbox" name="product[]" value="Item 4">Item 4</br>
               <input type="submit" name="submit" class="btn-primary" value="Add to Cart">
               </form>
                   
            </div>
            </div>
</div>
</div>
   
</body>

                         <!-- product gallery ends-->
                   
            </div>
            </div>

   

            
<!--end center column-->
</div> 
</div>        
       
    <script src ="../scripts/functions.js"></script>
 <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 