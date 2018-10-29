<?php include('../project/common/nav.php');?>
<?php 
//session start
session_start();

?>
<!---  ####### Body content begins ####### -->
<div class="container text-center">
<div class="row">
   <!--<div class="col-sm-12 panel panel-default text-left">
        <div class="panel-body">
            <div class="bg-success">
        <h2>Amount Left to Spend:<span id="over-under"></span></h2>
        </div>
        </div>

    </div> -->
    <!-- Left column -->
    <div class="col-sm-3 well text-left">
        <h3>
              Order Data
        </h3>
        <p><strong>Order Budget: </strong><span id="target-total"></span></p>
        
        <div class="thumbnail text-left">
            <h4>Full Portions</h4>
          <div class="d-inline row">
                <div class="form-group col-sm-6">
                <label># Ordered:</label> 
                <div>   
                <input type="number" name="full-count" id="full-count" size="10" placeholder="# ordered" onchange="orderQuantities()" aria-label="enter number of full portions ordered">                   
                </div>    
            </div>
                <div class="form-group col-sm-6">
                    <label>Budget Per:</label> 
                    <div> 
                    <input type="number" name="full-budget" id="full-budget" size="10" value ="10" readonly placeholder="budget" aria-label="enter budget per full portion">
                    </div>
                </div>
</div>
            </div>
           
            <div class="thumbnail text-left"> 
            <h4>Half Portions</h4>
            <div class="d-inline row">
            <div class="form-group col-sm-6">
                <label># Ordered:</label> 
                <div> 
            <input type="number" name=="half-count" id="half-count" size="10" placeholder="# ordered" onchange="orderQuantities()" aria-label="enter number of half portions ordered">
            </div>    
            </div>
                <div class="form-group col-sm-6">
                    <label>Budget Per:</label> 
                    <div> 
            <input type="number" ="half-budget" id="half-budget" size="10" value = "5" readonly aria-label="enter budget per half portion">
            </div>
                </div>    
</div>
        </div>
        <!--<button type="button" onclick="orderTarget()">Calculate</button> -->
    </div>

    <!-- Center column -->
    <div class="col-sm-9">
<!-- #### HEADER #####-->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default text-left">
                    <div class="panel-body">
                        <form class="form-header" action = "model/orders-model.php" method ="post">
                        <div class="input-group-lg">
                                <input class="form-control input-lg" type="text" id="co-op-name" placeholder="Co-op Name"><?php echo $_SESSION['clientData']['clientFirstname'];?>  
                        </div>
                        
                                <input class="form-control" type="text" name ="contact-name" id="contact-name" placeholder="Contact Name">
                                <div class="form-inline">
                                <input class="form-control" type="phone" name="contact-phone" id="contact-phone" placeholder="Contact Phone">
                                <input class="form-control" type="email" name="contact-email" id="contact-email" placeholder="Contact Email">
                                </div>
                                <div>
                                    <label>Date:</label>                                           
                                    <input type="text" name=="order-date" id="order-date" placeholder="mm/dd/yyyy">
                                </div>
                               
                    
                       

                    </div>
                </div>
            </div>
        </div>
<!-- ####### ORDER FORM BEGINS-->
<div class="panel panel-default">
              
<div class="row">

<div class="col-sm-12">
    <div class="well">
        <div class="thumbnail text-left"> 
                <h4>Item 1</h4>

              
                <div class="d-inline row">       
        <div class="col-sm-2">
                <label># Per Full:</label> 
            <div> 
                <input type="number" name="per-full" id="per-full" placeholder="#" onchange="orderQuantities()">
            </div>    
        </div>
         <div class="col-sm-2">
                <label># Per Half:</label> 
            <div> 
                <input type="number" name="per-half" id="per-half" placeholder="#" onchange="orderQuantities()">
            </div>
        </div> 
</div>
   
        <div class="d-inline row">
            <div class="form-group col-sm-5">
                    <label>Item Name:</label> 
                <div> 
                    <input type="text" name="item-name" id="item-name" size="40" placeholder="Item name/description">
                </div>    
            </div>
            <div class="form-group col-sm-1">
                        <label>Count:</label> 
                <div> 
                        <input type="number" name="item-count" id="item-count" placeholder="#" onchange="orderQuantities()">
                </div>
            </div>
            <div class="form-group col-sm-2">
                        <label>Unit:</label> 
                <div> 
                        <select name="item-unit" id="item-unit">

                            <option value="count">count</option>
                            <option value="pound">pound</option>
                            <option value="each">each</option>
</select>
                </div>
            </div>
            <!-- -->
            <div class="form-group col-sm-2">
                        <label>Price:</label> 
                <div> 
                    <input type="number" name=="item-price" id="item-price" placeholder="$0.00" onchange="orderQuantities()">
                </div>
            
            </div>
                <!-- -->
                <div class="form-group col-sm-1">
                        <label>Quantity:</label> 
                <div> 
                    <input type="number" name="item-quantity" id="item-quantity" readonly >
                </div>
            </div> 
            <!-- -->
            <div class="form-group col-sm-1">
                        <label>Total:</label> 
                <div> 
                    <input type="number" name="item-total" id="item-total" readonly >
                </div>
            </div>  
</div>
           
       
            </div>
           
        </div>
        <input type="submit" name="submit" id="regbtn" value="Save" class="btn-success">     
        </form>
    </div>
</div>

</div>
</div>

    
</div>


<script src ="../project/scripts/order-quantities.js"></script>      
       
    <script src ="../scripts/functions.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/project/common/footer.php');?> 