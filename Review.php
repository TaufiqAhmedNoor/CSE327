<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <link rel="stylesheet" type="text/css" href="css/review.css">
</head>
<body>
    <div class="header">
        <h2>Food review</h2>
    </div>
    <form  method="post" action="">
    <!-- This section is for reviwe writting  -->
    <div class="input-ground">
            <label>Review</label>
            <input type="text" name="Review">
    </div>
    <!-- This section is for reviwe submit button -->
    <div class="input-ground">
        <button type="submit" name="Review" class="btn">Submit</button>
    </div>
    </form>
</body>
</html>
/*
<?php 

    include "config.php";

?>
<?php 

    $sql = "INSERT INTO review (review) 
    VALUES ('" . $review ."';

?>*/
