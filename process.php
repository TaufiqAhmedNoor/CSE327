<?php

    //get value passes from in the login.php file
    $username = $post['username'];
    $password = $post['password'];

    /*to prevent Mysql injection
    $username = stripcslashes[$username];
    $password = stripcslashes[$password];
    $username = mysql_real_escape_string[$username];
    $password = mysql_real_escape_string[$password];*/

    //Connect to the server and select database
    mysql_connect("localhost", "root", "");
    mysql_select_db("login");

    //Query the database for user
    $result = mysql_query("select * from user where username = '$username' and password = '$password'") or die("Failed to query".mysql_error());
    $row = mysql_fetch_error($result);
    if ($row['username'] == $username && $row['password'] == $password){
        echo "login success";
    }
    else{
        echo "faild to login";
    }

?>