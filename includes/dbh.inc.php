<?php
//this file is to connect to the database to retrieve and write data
//this is the address of the database. since the database is on the same host, we can use "localhost"
$servername = "localhost";

//this is the database user that the website will use
$dBUsername = "root";

//this is the password for the database user
$dbpassword = "";

//this is the name of the database
$dBName = "storeReadySkin";

$conn = mysqli_connect($servername,$dBUsername,$dbpassword,$dBName);
// Check connection
if ($conn->connect_error)
{
 die("There was a problem connecting to db: " . $dbconnection->connect_error);
}
