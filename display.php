<?php
mysql_connect("localhost","root") or die("Connection Failed");
mysql_select_db("strike-system") or die("Connection Failed");
$name = $_POST['txtname'];
$username = $_POST['txtusername'];
$query = "select strikes from database where name = '$name' and username = '$username'"
$strikes = mysql_query($query);
while ($line = mysql_fetch_array($ans, MYSQL_ASSOC)){
  echo $line['name'];
  echo $line['strikes'];
  echo "<br>\n";
}
?>
