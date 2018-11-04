<?php session_start();
$account_id=$_SESSION['client']['account_id'];

if (!isset($_SESSION['client'])){
    header('Location:login.php');
}?>
<?php include('../project/common/nav.php');
?> 
<!---  ####### Body content begins ####### -->

    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div  class="panel-body">
                    <p> <?php
                            require('connection.php');
                                foreach ($db->query('SELECT * FROM orders WHERE orders_account_id = '.$account_id) as $row)
                                    {
                                        if ($row['orders_account_id']=$account_id){
                                            echo "<h3><b>Order #: </b>" . $row['orders_id'] . "</h3> ";
                                            echo "<p>Date:".$row['orders_date']."</p>";
                                            echo "<p># Full Ordered:".$row['orders_full_qty']."</p>";
                                            echo "<p># Half Ordered".$row['orders_half_qty']."</p>";
                                            echo "<p>Grand Total: $".$row['orders_total']."</p><hr/>";

                                        } else {
                                            echo "<p>No orders could be found</p>";
                                        }
                                     
                            
                                }
                              ?></p>
                   
            </div>
            </div>

   

            <!-- Left column -->
            <div class="col-sm-3 well">
                <div class="well">
                    <h2>
                        <?php echo "Welcome, ".$_SESSION['client']['first_name'];?>
</h2>
                    
<br><p> 
                    <?php 
                    echo "<strong>Today is:</strong> ".date("m/d/Y");?></p>
                </div>
<?php  echo "<br/>Id: ".$_SESSION['client']['account_id'];?>

            </div>

            <!-- Center column -->
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default text-left well">
                            <div class="panel-body">
                            <p>Past orders:</p>
                           

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