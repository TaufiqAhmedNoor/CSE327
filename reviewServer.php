<?php

    $review = "";
    $errors = array();

    //connect to the database
    $db = mysqli_connect("localhost","root","","noor");
    if (isset($_POST['review'])) {
        $review = mysql_real_escape_string($_POST['review']);
        
        
        if (empty($review)) {
            array_push($errors, "review is required");
        }
        if (count($errors) == 0){
            $sql = "INSERT INTO user (review) VALUES ('$review')";

            mysqli_query($db, $sql);
        }
    }

?>