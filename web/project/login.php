<?php session_start();

 ?>
<?php include('../project/common/nav.php');?> 

<!---  ####### Body content begins ####### -->

<div class="jumbotron">
        <div class="container text-center">
            <h1>Login</h1>
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
                          <!--- Form Begins-->
                          <form action="controller/accounts-controller.php" method="POST">
                          <input type="hidden" name="action" value="login_user">
           <h2>Register</h2>
        <div class="fail-message"><p>All fields are required</p></div>
        
        <div>
        <label for="username">Username</label>
                </div>
                <div>
                <input name="username" id="username" type="text" <?php if (isset($username)) {
                echo "value='$username'";} ?> required>
        </div>

        <div>
                <label for="user_password">Password</label>
                <p>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter, and 1 special character</p>
        </div>
        <div>
          <input type="password" name="user_password" id="user_password" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">     
        </div>
        <div>
            <label>&nbsp;</label>
            <input type="submit" name="submit" id="regbtn" value="Login" class="btn-success">
            <!-- Add the action name-value pair -->
            
        </div>
               
            </form>
                          <!--Form ends -->   
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