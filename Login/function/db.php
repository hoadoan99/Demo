<?php 
//Enter host, username, password and database name below
$connection = mysqli_connect("localhost","root","","demo");
//Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL".mysqli_connect_errno();
}
?>