<?php
mysql_connect(,,) or die("Connection Failed");
mysql_select_db("strike-system") or die("Connection Failed");
$name = $_POST['name'];
$username = $_POST['username'];
$query = "select strikes from database where name = '$name' and username = '$username'"
$ans = mysql_query($query);
while ($line = mysql_fetch_array($ans, MYSQL_ASSOC)){
  echo $line['name'];
  echo $line['strikes'];
  echo "<br>\n";
}
?>
