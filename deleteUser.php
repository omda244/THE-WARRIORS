<?php
include "Userfnc.php";
$id=$_REQUEST["id"];
$role=$_REQUEST["role"];
DeleteUser($id , $role);
echo"$role";
?>