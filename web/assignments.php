<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<div class="jumbotron">
        <div class="container text-center">
            <h1>Assignments</h1>
            <p>What I am doing...</p>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div  class="panel-body">
                    <p></p>
                   
            </div>
            </div>

   

            <!-- Left column -->
            <div class="col-sm-3 well">
                <div class="well">
                    <h2>
                        <a href="#">Kristina</a>
</h2>
                    <img src="../images/kp-profile.jpg" class="img-circle" height="65" width="65" alt="Avatar">
<br><p> 
                    <?php 
                    echo "<strong>Today is:</strong> ".date("m/d/Y");?></p>
                </div>


            </div>

            <!-- Center column -->
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default text-left well">
                            <div class="panel-body">
                            <h2>Assignments</h2>
                            <ul>
                                <li><a href="../assignments/week3.php">Week 3 Form</a>: a simple form.

                                </li>
                                <li><a href="../assignments/shop.php">Week 3 Shopping Cart</a>: a simple php shopping cart.

                                </li>
                                <li><a href="connect.php">Week 4 Scriptures</a>: a simple php query display.

                                </li>
                            </ul>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
<!--end center column-->
</div> 
</div>        
       
    <script src ="../scripts/functions.js"></script>
 <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 