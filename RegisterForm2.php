<?php
include "UserFnc.php";

$pass=Encrypt($_REQUEST["Password"],2);

if (addUser($_POST["Email"],$pass,$_REQUEST["FullName"],$_REQUEST["BirthDay"],$_REQUEST["BirthdayMonth"],$_REQUEST["BirthdayYear"],$_REQUEST["role"]))
{
	echo "Success";
	header("Location: ListAllUsers.php?Msg=Record Added Sucessfully");
}
else
{
	echo "This email already Exist";
}
?>