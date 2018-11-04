<?php session_start();?>
<?php include('../project/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<div class="jumbotron">
        <div class="container text-center">
            <h1>Welcome <?php echo ", ".$_SESSION['client']['first_name'];?></h1>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div  class="panel-body">
                    <p>It's harvest time and your group of friends wants to do some home canning and make homemade applesauce.
                        You've been charged with purchasing apples for everyone. Some people want full portions (example $50 worth of apples)
                        and others want half portions ($25 worth of apples). 
                        You need to figure how many boxes of apples to purchase for the group based on the amount of money everyone 
                        will contribute per portion.</p>
                   
            </div>
            </div>

   

            <!-- Left column -->
            <div class="col-sm-3 well">
                <div class="well">
                    <h2>
                        <a href="#">Date</a>
</h2>
                    
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
                            <h2>Let's get started</h2>
                            <?php if (!isset($_SESSION['client'])){
   echo "<p><a href='/project/register.php'>Register</a></p>
   <p><a href='/project/login.php'>Login</a></p>";
}else {echo "<p>You're already logged in. <a href='orderform.php'>Place a new order.</a></p>
<p>See <a href='dashboard.php'>See past orders</a></p>";}?>
                

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