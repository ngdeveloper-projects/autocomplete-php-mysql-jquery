<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'pass123';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Database Connection Failed : ' . mysql_error());
}
mysql_select_db('javadomain');
?>