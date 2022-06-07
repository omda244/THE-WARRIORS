<?php
include "UserFnc.php";

$pass=Encrypt($_REQUEST["Password"],2);
$role=$_REQUEST["Role"];
if (Login($_POST["Email"],$pass,$role))
{
	echo "<h2>Succesfully Logged In</h2>";
	if($role=='Admin')
	{
		header('Location: Admininterface.html');
	}
	if($role=='Teacher')
	{
		header('Location: Teacherinterface.html');
	}
	if($role=='Student')
	{
		header('Location: Studentinterface.html');
	}
	
	session_start();
	
	$_SESSION["Email"]=$_POST["Email"];
}
else
{
	echo "<script>
	alert('Incorrect Email Or Password Or Role Please Try Again');
	window.location.href='login.php';
	</script>";
}



?>