<?php

// Script By Akash Mondal

$servername = "localhost";
$username = "root";
$password = "akash@1997";
$dbname = "exp_ak";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

@@session_start();

function isloggedin()
{
	
if(@@$_SESSION['logged_in']!=TRUE)
{
 return FALSE;
}	
else
{
return TRUE;
}
}



?>