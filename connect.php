<?php
/*$mysqli = new mysqli('localhost','root','root','pos_system');
   if($mysqli->connect_errno){
      echo $mysqli->connect_errno.": ".$mysqli->connect_error;
   }*/


$servername = "container-db.copiab6gphpr.ap-southeast-1.rds.amazonaws.com";
$username = "Bhodi";
$password = "Treebangbang*007";
$dbname = "pos_system";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

