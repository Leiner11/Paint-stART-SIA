<?php
    $servername = "localhost";
    $username = "Group4PS_Admin";
    $password = "group_4_PS!!!1111";
    $dbname = "userregistration";

    //connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //check if connected
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE register SET "
