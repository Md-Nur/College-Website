<?php
# Name of the Database and related items
// $userName = "epiz_28954371";
// $password = "OJ8xRtTdnbETA";
// $hostName = "sql212.epizy.com";
// $databaseName = "epiz_28954371_college";

$userName = "root"; 
$password = ""; 
$hostName = "localhost";  
$databaseName = "college"; 

# Sequence = Host name, user name, password, database name.
$conn = mysqli_connect($hostName, $userName, $password, $databaseName);
