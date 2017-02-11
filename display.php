<?php
    //mysql_connect has been removed from php
    //no one likes unexpected deaths
    $link = mysqli_connect("localhost", db_uname, db_pwd, "eyeofglug");

    //appropriate error handling per new php conventions
    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    mysql_select_db("strike-system") or die("Connection Failed");
    $name = $_POST['txtname'];
    $username = $_POST['txtusername'];
    $sel = "select strikes from database where name = '$name' and username = '$username'";
    $strikes = mysql_query($sel);
    while ($line = mysql_fetch_array($ans, MYSQL_ASSOC)){
        echo "NAME: {$line['name']}  <br>".
        "STRIKES: {$line['strikes']} <br>".
        "<br>";
    }

    echo "data fetched!! <br>";
    mysql_close($con);
?>
