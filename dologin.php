<?php
include "UserFnc.php";

$pass=Encrypt($_REQUEST["Password"],2);
$role=$_REQUEST["Role"];
if (Login($_POST["Email"],$pass,$role))
{
	echo "<h2>Succesfully Logged In</h2>";
	session_start();
	
	$_SESSION["Email"]=$_POST["Email"];
}
else
{
	echo "<h2>Incorrect Email Or Password Or Role</h2>";
}
?>