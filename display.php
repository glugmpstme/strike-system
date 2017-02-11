<?php

    require("db_credentials.php");

    //mysql_connect has been removed from php
    //mysqli being mysql improved
    //no one likes unexpected deaths
    $link = mysqli_connect($db_host, $db_uname, $db_pwd, $db_base);

    //appropriate error handling per new php conventions
    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    $myArray = array();

    // we should use MYSQLI_USE_RESULT if we have to retrieve a large amount of data 
    if ($result = mysqli_query($link, "SELECT * FROM {$db_table}")) {
        //printf("Select returned %d rows.\n", mysqli_num_rows($result));

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $myArray[] = $row;
        }
        echo json_encode($myArray);

        // free result set
        mysqli_free_result($result);
    }

    
    mysqli_close($link);
?>
