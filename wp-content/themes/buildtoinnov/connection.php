<?php
$username = "joupl148_jple";
$password = "Al8ZQN79hO%}";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
echo "";

$selected = mysql_select_db("joupl148_alpha",$dbhandle) 
  or die("Could not select examples");
  ?>