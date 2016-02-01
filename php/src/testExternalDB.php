<?php
$dbhost = "10.0.2.6";
$dbport = "3306";
$dbuser = "tester1";
$dbpwd = "MyNewPass4!"
$dbname = "osename";
$connection = mysql_connect($dbhost.":".$dbport, $dbuser, $dbpwd);
if (!$connection) {
  echo "Could not connect to database";
} else {
  echo "Connected to database.<br>";
}
$dbconnection = mysql_select_db($dbname);
$query = "SELECT * from test";
$rs = mysql_query($query);
while ($row = mysql_fetch_assoc($rs)) {
  echo $row['user_id'] . " " . $row['username'] . "\n";
}
mysql_close();
?>
