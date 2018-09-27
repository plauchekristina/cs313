<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<div class="jumbotron">
        <div class="container text-center">
            <h1>CS 313 - Fall 2018</h1>
           
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div  class="panel-body">
                    <p> <strong>Quote of the Day:</strong> <span id="quoteDisplay">People are more important than things. - Kristina Plauché</span> </p>
                    <button onclick="newQuote()"> New Quote</button>
                   
            </div>
            </div>

   

            <!-- Left column -->
            <div class="col-sm-3 well">
                <div class="well">
                    <h2>
                        <a href="https://www.facebook.com/kristina.plauche" target ="_blank">Kristina</a>
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
                            <h2>About Me</h2>
                            <ul>
                                <li>
                                <strong>Employed at:</strong> Automattic
                                </li>
                                <li>
                                <strong>Major:</strong> Web Design & Development - Development emphasis. 
                                </li>
                                <li>
                                <strong>Location:</strong> Georgia  
                                </li>
                                <li>
                                <strong>Family:</strong> Happily married & mother of 8. 7 sons and 1 daughter.   
                                </li>
                                <li>
                                <strong>Hobbies:</strong> School. School. School. After I graduate in December, then I'll get back to Cooking, Running, Hiking, etc...  
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