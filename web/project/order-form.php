<?php include('../project/common/nav.php');?>
<?php 
//session start
session_start();

?>
<!---  ####### Body content begins ####### -->
<div class="container text-center">
<div class="row">
    <div class="col-sm-12 panel panel-default text-left">
        <div class="panel-body">
            <div class="bg-success">
        <h2>Amount Left to Spend:<span id="over-under"></span>+$x.xx</h2>
        </div>
        </div>

    </div>
    <!-- Left column -->
    <div class="col-sm-3 well text-left">
        <h3>
              Order Data
        </h3>
        <p><strong>Order Budget: </strong><span id="target-total"></span></p>
        
        <div class="thumbnail text-left">
            <h4>Full Portions</h4>
            <form class="d-inline row">
                <div class="form-group col-sm-6">
                <label># Ordered:</label> 
                <div>   
                <input type="number" id="full-count" size="10" placeholder="# ordered" aria-label="enter number of full portions ordered">                   
                </div>    
            </div>
                <div class="form-group col-sm-6">
                    <label>Budget Per:</label> 
                    <div> 
                    <input type="number" id="full-budget" size="10" placeholder="budget" aria-label="enter budget per full portion">
                    </div>
                </div>
                </form>
            </div>
            
            <div class="thumbnail text-left"> 
            <h4>Half Portions</h4>
            <form class="d-inline row">
            <div class="form-group col-sm-6">
                <label># Ordered:</label> 
                <div> 
            <input type="number" id="half-count" size="10" placeholder="# ordered" value ="10" readonly aria-label="enter number of half portions ordered">
            </div>    
            </div>
                <div class="form-group col-sm-6">
                    <label>Budget Per:</label> 
                    <div> 
            <input type="number" id="half-budget" size="10" value = "5" readonly aria-label="enter budget per half portion">
            </div>
                </div>    
        </form>
        </div>
        <button type="button" onclick="orderTarget()">Calculate</button> 
    </div>

    <!-- Center column -->
    <div class="col-sm-7">
<!-- #### HEADER #####-->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default text-left">
                    <div class="panel-body">
                        <form class="form-header">
                        <div class="input-group-lg">
                                <input class="form-control input-lg" type="text" id="co-op-name" placeholder="Co-op Name"><?php echo $_SESSION['clientData']['clientFirstname'];?>  
                        </div>
                        
                                <input class="form-control" type="text" id="contact-name" placeholder="Contact Name">
                                <div class="form-inline">
                                <input class="form-control" type="phone" id="contact-phone" placeholder="Contact Phone">
                                <input class="form-control" type="email" id="contact-email" placeholder="Contact Email">
                                </div>
                                <div>
                                    <label>Date:</label>                                           
                                    <input type="text" id="order-date" placeholder="mm/dd/yyyy">
                                </div>
                            
                    
                        </form>

                    </div>
                </div>
            </div>
        </div>
<!-- ####### ORDER FORM BEGINS-->
<div class="panel panel-default">
<h3>Item 1</h3>               
<div class="row">

<div class="col-sm-9">
    <div class="well">
        <div class="thumbnail text-left"> 
                <h4>Item Data</h4>
                <form class="form-inline row">
        <div class="col-sm-6">
                <label># Per Full:</label> 
            <div> 
                <input type="number" id="per-full" placeholder="#" >
            </div>    
        </div>
         <div class="col-sm-6">
                <label># Per Half:</label> 
            <div> 
                <input type="number" id="per-half" placeholder="#" >
            </div>
        </div> 
    </form>
        <form class="d-inline row">
            <div class="form-group col-sm-5">
                    <label>Item Name:</label> 
                <div> 
                    <input type="text" id="item-name" placeholder="Item name/description">
                </div>    
            </div>
            <div class="form-group col-sm-2">
                        <label>Count:</label> 
                <div> 
                        <input type="number" id="item-count" placeholder="#">
                </div>
            </div>
            <div class="form-group col-sm-2">
                        <label>Unit:</label> 
                <div> 
                        <input type="number" id="item-unit" placeholder="Count">
                </div>
            </div>
            <div class="form-group col-sm-3">
                        <label>Price:</label> 
                <div> 
                    <input type="number" id="item-price" placeholder="$0.00">
                </div>
            </div>    
        </form>
        <button type="button" onclick="orderQuantities()">Calculate</button> 
        <h4 id="item-1-totals"></h4>
            </div>
        </div>
    </div>
</div>

</div>
</div>

    <!-- Right column -->
    <div class="col-sm-2 well">
        <div class="thumbnail">
            <p>More Info</p>
        
        </div>
    </div>
</div>

<script src ="../project/scripts/order-form.js"></script>
<script src ="../project/scripts/order-quantities.js"></script>      
       
    <script src ="../scripts/functions.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/project/common/footer.php');?> 