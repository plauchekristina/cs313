<?php session_start();
$account_id=$_SESSION['client']['account_id'];
if (!isset($_SESSION['client'])){
    header('Location:login.php');
}?>
<?php include('../project/common/nav.php');
?> 
<!---  ####### Body content begins ####### -->
<div class="jumbotron">
        <div class="container text-center">
            <h1>Orders Dashboard</h1>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div  class="panel-body">
                <h2>
                        <?php echo "Welcome, ".$_SESSION['client']['first_name'];?>
</h2>
<p> 
                    <?php 
                    echo "<strong>Today is:</strong> ".date("m/d/Y");?></p>        
            </div>
            </div>

   

            <!-- Left column -->
            <div class="col-sm-3 well">
                <div class="well">
                    <h2><?php echo $_SESSION['coop']['coop_name'];?></h2>
<?php if (!isset($_SESSION['coop']['coop_name'])){ echo "<h3>Please <a href='co-op.php'>create your co-op</a></h3>";}?>
                           
                            
                               
                                <p><b>Full Budget:</b> <?php echo "$".$_SESSION['coop']['coop_full_budget'];?></p>
                                <p><b>Half Budget:</b> <?php echo "$".$_SESSION['coop']['coop_half_budget'];?></p>
                          
                           
                            
                            
                           
                    
<br>
                </div>
<?php  echo "<br/>Id: ".$_SESSION['client']['account_id'];?>

            </div>

            <!-- Center column -->
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default text-left well">
                            <div class="panel-body">
                            <h2>Past orders:</h2>
                            <?php
                            require('connection.php');
                                foreach ($db->query('SELECT * FROM orders WHERE orders_account_id = '.$account_id) as $row)
                                    {
                                        if ($row['orders_account_id']=$account_id){
                                            echo "<li><b>Order #: </b>" . $row['orders_id'] . "<a href='orders-view.php'> View</a></li> ";
                                        } else {
                                            echo "<p>No orders could be found</p>";
                                        }
                                     
                            
                                }
                              ?>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
<!--end center column-->
</div> 
</div>        
       
    <script src ="../scripts/functions.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/project/common/footer.php');?> 