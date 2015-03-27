<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    session_start();

    $dbhost = "localhost";
    $dbname = "rec";
    $dbuser = "reccer";
    $dbpass = "hotllama.kmsn";

    mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
    mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());

?>
