<?php
//Establishing connection with the database
$dbhost="localhost";
$dbuser ="root";
$dbpass = "";
$dbms= "lms";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbms);
if (!$conn){
	die ("Sorry, failed to connect".mysqli_connect_error());
}
else{
	echo"Connection was successful";
}
?>