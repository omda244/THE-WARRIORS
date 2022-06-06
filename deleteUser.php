<?php
include "Userfnc.php";
$id=$_REQUEST["id"];
$role=$_REQUEST["role"];
DeleteUser($id , $role);
echo"$role";
header("Location: ListAllUsers.php?Msg=Record $id was Deleted sucessfully");	


?>