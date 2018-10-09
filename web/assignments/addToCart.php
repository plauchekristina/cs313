<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<?php 
//start the session
session_start();
$products = $_POST["continent"];
foreach ($continents as $c){
    $_SESSION["items"];
}

?>

<?php 

$products = $_POST["continent"];
?>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div  class="panel-body">
          
      <?php 
$name = $_POST["name"];
$email = $_POST["email"];
$major = $_POST["major"];
$comments = $_POST["comments"];
$continents = $_POST["continent"];
?>

    <p>Name:
        <?=$name ?>
    </p>
    <p>Email:
        <a href="mailto:<?=$email ?>">
            <?=$email ?>
        </a>
    </p>
    <p>Major:
        <?=$major ?>
    </p>
    <p>Comments:
        <?=$comments ?>
    </p>
    <p>Continents:</br>
        <?php
      $continentsDB = array("na"=>"North America", 
                          "sa"=>"South America",
                          "eu"=>"Europe",
                          "as"=>"Asia",
                          "au"=>"Australia",
                          "af"=>"Africa",
                          "an"=>"Antartica");
      foreach ($continents as $c){
          print "$continentsDB[$c] <br />";
      }
  ?>
    </p>
                   
            </div>
            </div>

   

            
<!--end center column-->
</div> 
</div>        
       
    <script src ="../scripts/functions.js"></script>
 <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 