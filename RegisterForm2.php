<?php
include "UserFnc.php";
$pass=Encrypt($_REQUEST["Password"],2);
if (addUser($_POST["Email"],$pass,$_REQUEST["FullName"],$_REQUEST["BirthDay"],$_REQUEST["BirthdayMonth"],$_REQUEST["BirthdayYear"],$_REQUEST["role"]))
{
	echo "<h2>Successfully Registred</h2>";
}
else
{
	echo "<h2>This Email Already Exist</h2>";
}
?>