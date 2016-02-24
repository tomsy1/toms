<?php
    $server = "212.48.89.179 ";
    $db_user = "to-do-wqw-u-035652";
    $db_pass = "564620!";
    $db_name = "to-do-wqw-u-035652";

    mysql_connect($server, $db_user, $db_pass) or die("Could not connect to server!");
    mysql_select_db($db_name) or die("Could not connect to database!");
?>