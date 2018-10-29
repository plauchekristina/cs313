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
                    
                            <p>Info goes here:</p>
                            <ul>
                                <li> Co-op Name</li>
                                <li>Contact Name</li>
                                <li>Contact Email</li>
                                <li>Full Portion Budget</li>
                                <li>Half Portion Budget</li>
                            </ul>
                            <form action="model/co-op-model.php" method="POST">

        <div class="fail-message"><p>All fields are required</p></div>
        <div>
                <label for="co_op_name">Co-op Name</label>
        </div>
        <div>
                <input name="co_op_name" id="co_op_name" type="text" <?php if (isset($coop_name)) {
                echo "value='$coop_name'";} ?> required>
        </div>
        <div>
                <label for="contact_name">Contact Name</label>
        </div>
        <div>
                <input name="contact_name" id="contact_name" type="text" <?php if (isset($coop_contact_name)) {
                echo "value='$coop_contact_name'";} ?> required>
        </div>
      
        <div>
                <label for="cont_email">Contact Email</label>
        </div>
        <div>
                <input type="contact_email" name="contact_email" id="contact_email" <?php if (isset($coop_contact_email)) {
                echo "value='$coop_contact_email'";} ?> required >
        </div>
        <div>
        <label for="full_portion_budget">Full Portion Budget</label>
                </div>
                <div>
                <input name="full_portion_budget" id="full_portion_budget" type="text" <?php if (isset($coop_full_budget)) {
                echo "value='$coop_full_budget'";} ?> required>
        </div>
        <div>
        <label for="halfportion_budget">Half Portion Budget</label>
                </div>
                <div>
                <input name="half_portion_budget" id="full_portion_budget" type="text" <?php if (isset($coop_half_budget)) {
                echo "value='$coop_half_budget'";} ?> required>
        </div>
        <div>
            <!--<input type ="hidden" name="account_id" <"<"?php if (isset($account_id)) {
                echo "value='$account_id'";} ?> >"-->
            <label>&nbsp;</label>
            <input type="submit" name="submit" id="regbtn" value="Register" class="register">
            <!-- Add the action name-value pair -->
            <input type="hidden" name="action" value="coop-register">
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