<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<?php
//session start
session_start();

?>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div  class="panel-body">
                <?php 
$name= $_POST["name"];
$email= $_POST["email"];
$street= $_POST["street"];
$city= $_POST["city"];
$state= $_POST["state"];
$zip= $_POST["zip"];
?>
<html>
    <body>
        <h1>Thank you! Your Order is Complete</h1>
        <h4>Order items:</h4>
        <?php 
        $items = $_SESSION["items"];
    foreach ($items as $item){
        echo "$item <br>";
}
?>
        <p>Name:
        <?php echo $name; ?>
    </p>
    <p>Email:
        <?php echo $email; ?>
    </p>
     <p>Address:
        <?php echo $street; ?>
    </p>
    <p>
        <?php echo $city.", " .$state." " .$zip; ?>
    </p>
                   
            </div>
            </div>

   

            
<!--end center column-->
</div> 
</div>        
       
    <script src ="../scripts/functions.js"></script>
 <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 