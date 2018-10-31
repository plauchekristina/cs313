<?php session_start();
$userID=$_SESSION['client']['account_id'];?>
<?php include('../project/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<div class="jumbotron">
        <div class="container text-center">
            <h1>Co-op Profile</h1>
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
                            <h2>Co-Op Details</h2>
                
                            <form action="model/co-op-model.php" method="POST">

        <div class="fail-message"><p>All fields are required</p></div>
        <div>
                <label for="account_id">Account ID</label>
        </div>
        <div>
                <input name="account_id" id="account_id" type="text" required readonly value = "<?php echo $_SESSION['client']['account_id'];?>">
        </div>
        <div>
                <label for="coop_name">Co-op Name</label>
        </div>
        <div>
                <input name="coop_name" id="coop_name" type="text" required>
        </div>
        <div>
                <label for="contact_name">Contact Name</label>
        </div>
        <div>
                <input name="contact_name" id="contact_name" type="text"  required>
        </div>
      
        <div>
                <label for="contact_email">Contact Email</label>
        </div>
        <div>
                <input type="email" name="contact_email" id="contact_email" required >
        </div>
        <div>
        <label for="full_portion_budget">Full Portion Budget</label>
                </div>
                <div>
                <input name="full_portion_budget" id="full_portion_budget" type="number" required>
        </div>
        <div>
        <label for="halfportion_budget">Half Portion Budget</label>
                </div>
                <div>
                <input name="half_portion_budget" id="full_portion_budget" type="number" required>
        </div>
        <div>
            <!--<input type ="hidden" name="account_id" <"<"?php if (isset($account_id)) {
                echo "value='$account_id'";} ?> >"-->
            <label>&nbsp;</label>
            <input type="submit" name="submit" id="regbtn" value="Save" class="register">
           
        </div>
               
            </form>

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