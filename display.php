<?php
$con = mysql_connect("localhost","root") or die("Connection Failed");
mysql_select_db("strike-system") or die("Connection Failed");
$username = $_POST['txtusrnm'];
$email = $_POST['txteml'];
$sel = "SELECT Strikes FROM `database` WHERE Username='$username' AND Email='$email'";
$result = mysql_query($sel);
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)){
  echo "NAME: {$line['Name']}  <br>".
  "STRIKES: {$line['Strikes']} <br>".
  "<br>";
}

echo "data fetched!! <br>"
mysql_close($con);
?>
