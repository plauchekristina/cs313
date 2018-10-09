<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');
//start the session
session_start();?> 
<!---  ####### Body content begins ####### -->
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div  class="panel-body">
                <?php
                // Set session variables
                $_SESSION["favcolor"] = "green";
                $_SESSION["favanimal"] = "cat";
                echo "Session variables are set.";
                ?>
                <form method="post" action="../assignments/addToCart.php">
                <input type="number" name="product[]" value="art1">Kids Art 1</br>
                <input type="number" name="product[]" value="art2">Kids Art 2</br>
                <input type="number" name="product[]" value="art3">Kids Art 3</br>
                <input type="submit" value= "Add to Cart">

                </form>
                    <p>hellow</p>
                   
            </div>
            </div>

   

            
<!--end center column-->
</div> 
</div>        
       
    <script src ="../scripts/functions.js"></script>
 <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 