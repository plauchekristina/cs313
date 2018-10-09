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
                <p>Brother Burton, I am actively still working on this right now. 
               I had a work trip last week for my company's annual conference. They have us scheduled from 8am-10pm for 9 days.
               If you're thinking "What the?!"  It's in progress.</p> 
                <form action="viewCart.php" method="post">
                <input type="checkbox" name="product[]" value="Item 1">Item 1</br>
                <input type="checkbox" name="product[]" value="Item 2">Item 2</br>
                <input type="checkbox" name="product[]" value="Item 3">Item 3</br>
                <input type="submit" name="submit" value="Add to Cart">
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