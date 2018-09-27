<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<div class="jumbotron">
        <div class="container text-center">
            <h1>CS 313 - Fall 2018</h1>
            <p>What I am doing...</p>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div class="panel-body" id="quoteDisplay">
                    <p> <strong>"Quote of the Day:"</strong> I used to think I was indecisive, but now I'm not quite sure. </p>
                <!--quote will display here -->
                    <button onclick="newQuote()">New Quote</button>
            </div>
            </div>

   

            <!-- Left column -->
            <div class="col-sm-3 well">
                <div class="well">
                    <h2>
                        <a href="#">Kristina</a>
</h2>
                    <img src="../images/kp-profile.jpg" class="img-circle" height="65" width="65" alt="Avatar">
                    <?php 
                    echo "Today is ".date("m/d/Y");?>
                </div>


            </div>

            <!-- Center column -->
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default text-left well">
                            <div class="panel-body">
                            <h2>Assignments</h2>
                            <p>Some content</p>

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