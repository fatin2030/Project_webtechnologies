<?php

    $dbhost = "localhost";
    $dbname = "lab_work";
    $dbuser = "root";
    $dbpass = "";

    function getConnection(){
        global $dbhost;
        global $dbname;
        global $dbpass;
        global $dbuser;

        return  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    }
?>