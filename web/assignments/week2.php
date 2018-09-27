<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<div class="jumbotron">
        <div class="container text-center">
            <h1>Fall Semester 2018</h1>
            <p>Week 2...</p>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div class="panel-body bold fun-quote">
                    <p> Hi there! I used to think I was indecisive, but now I'm not quite sure. </p>
                    <div>
                <label>Change the Background Color</label>
        </div>
        <div>
                <input name="colorChange" 
                       id="color-change" 
                       type="text" />
                    <button onclick="changeColor()" type="button" class="btn btn-dark">Change Color</button>
                </div>

            </div>
            <!-- Left column -->
            <div class="col-sm-3">
                <div class="profile bold">
                    <p>
                        <a href="#">Kristina</a>
                    </p>
                    <img src="../images/kp-profile.jpg" class="img-circle" height="65" width="65" alt="Avatar">
                </div>


            </div>

            <!-- Center column -->
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default text-left">
                            <div class="panel-body bold clicker">
                                If you want to see a JavaScript  alert, click the cool button below.
                                <button onclick="clickMe()"type="button" class="btn btn-dark">Click Me</button>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

    
           
        </div>

    </div>
    <script src ="../scripts/functions.js"></script>
 <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 