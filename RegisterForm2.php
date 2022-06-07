<?php
include "UserFnc.php";
$pass=Encrypt($_REQUEST["Password"],2);
if (addUser($_POST["Email"],$pass,$_REQUEST["FullName"],$_REQUEST["BirthDay"],$_REQUEST["BirthdayMonth"],$_REQUEST["BirthdayYear"],$_REQUEST["role"]))
{
	echo "<script>
	alert('Successfuly Registered Login Now');
	window.location.href='login.php';
	</script>";
}
else
{
	echo "<script>
	alert('This Email Already Exist Try To Login');
	window.location.href='login.php';
	</script>";
}
?>