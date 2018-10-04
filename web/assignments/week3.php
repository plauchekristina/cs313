<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?>
<!---  ####### Body content begins ####### -->

<head>
    <title>Shopping Cart</title>
</head>
<body>
    <form method="post" action="displayForm.php">
        Name: <input type="text" name="name"></br>
        Email: <input type="text" name="email"></br>
        Major:</br>
                <?php
                    $majors = array("Computer Science"=>"cs", 
                                    "Web Design and Development"=>"wdd",
                                    "Computer Information Technology"=>"cit",
                                    "Computer Engineering"=>"ce");
                foreach ($majors as $m => $m_code) {
                    print "<input type=\"radio\" name=\"major\" value=\"" 
                        . $m . "\" id=\"" . $m_code . "\"><label for=\"" . $m_code 
                        . "\">" . $m . "</label><br />";
                    }
                ?>
        Comments: <textarea name="comments"></textarea></br></br>
        <input type="checkbox" name="continent[]" value="na">North America</br>
        <input type="checkbox" name="continent[]" value="sa">South America</br>
        <input type="checkbox" name="continent[]" value="eu">Europe</br>
        <input type="checkbox" name="continent[]" value="as">Asia</br>
        <input type="checkbox" name="continent[]" value="au">Austrailia</br>
        <input type="checkbox" name="continent[]" value="af">Africa</br>
        <input type="checkbox" name="continent[]" value="an">Antarctica</br>
        <input type="submit" name="submit" value="Submit">
</body>



<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?>